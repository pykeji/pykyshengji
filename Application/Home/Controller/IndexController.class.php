<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $a = I('get.aa');
        // var_dump($a);
        if($a == 1){
           $this->assign('msg','<b style="color:red">用户名或密码错误</b>');
           $this->display();
        }elseif($a == 2){
            $this->assign('msg','<b style="color:red">您的账号已登录</b>');
           $this->display();
        }else{
            $this->display();
        }
        
    }
     public function forget(){
        $this->display();
    }
    public function home($rev){
        $this->assign('rev',$rev);
        $this->display();
    }
    //接诊区
    public function jiezhen(){
        // 法一自己写的附带样式
        $rect = M('station_p');
        $count = $rect->where('jz_flagjz=1')->count();// 查询满足要求的总记录数 $map表示查询条件
        $page = getpage($count,10);//控制页面显示条数
        $show = $page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        //以上是分页 ， 以下是数据
        $data =  $rect->where('jz_flagjz=1')->order('br_id')->limit($page->firstRow.','.$page->listRows)->select();//查询数据（未完成就诊的）$Page->firstRow 起始条数 $Page->listRows 获取多少条
        $this->assign('data',$data);// 赋值模板变量
        $this->display();
        // 法二官方写的不带样式
        // $User = M('station_p'); // 实例化User对象
        // $count      = $User->where('jz_flagjz=1')->count();// 查询满足要求的总记录数
        // $page = getpage($count,5);
        // // $page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        // $show       = $page->show();// 分页显示输出
        // // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        // $data = $User->where('jz_flagjz=1')->order('p_date')->limit($page->firstRow.','.$page->listRows)->select();
        // $this->assign('data',$data);// 赋值数据集
        // $this->assign('page',$show);// 赋值分页输出
        // $this->display(); // 输出模板
    }
    // 接诊区详情 ajax接诊详情参数
    public function jiezhenxiangqajax(){
        $id = I('get.id');
        $user = M('station_p');
        $data = $user->where("br_id={$id}")->select();
       $this->ajaxReturn($data,'json');
    }
    // 接诊区修改 ajax参数
    public function jiezhenxiugaiajax(){
        $id = I('get.id');
        $user = M('station_p');// 实例化Data数据模型
        $data = $user->where("br_id={$id}")->select();
       $this->ajaxReturn($data,'json');
    }
    //执行修改 接诊区
    public function dojiezhenajaxxiugai(){
        $id = I('post.br_id');//修改条件
        $user = I('post.');//修改信息
        $data = M('station_p');// 实例化Data数据模型
        $data->where("br_id={$id}")->save($user);//执行修改
        $this->redirect("Index/jiezhen");//重定向
    }
    //患者登记
    public function dengji(){
    	$data = M('station_p');// 实例化Data数据模型
        $id = $data->field('br_id')->select();
        foreach ($id as $v) {
            foreach ($v as $value) {
                $qb[]=substr($value, 0,8);
            }
        }
        $a=array_count_values($qb);//计算出现次数
        $b=$a[date('Ymd')];
        if (!empty($b)) {
            $id = date('Ymd').$b+1;
        }else{
            $id = date('Ymd')."1";
        }
        session(id,$id);//设置编号
        $this->display();
    }
    //患者保存
    public function hzbc(){
        $station = M('station_p');
        $data = I('post.');//获取数据
        $station->data($data)->add();//添加数据
        $this->redirect('Index/jiezhen');//重定向到接诊区
    }
    //患者预约
    public function yuyue(){
        $user = M('station_p');
        //获取数据
        $data = $user->where('reserve=2')->field('p_date,br_name')->select();
        //是一个方法 直接调用（把二维数组 以一个字段为条件 升序排列）
        if (! function_exists('list_sort_by'))
        {
            function list_sort_by($list, $field, $sortby = 'asc')
            {
                if (is_array($list))
                {
                    $refer = $resultSet = array();
                    foreach ($list as $i => $data)
                    {
                        $refer[$i] = &$data[$field];
                    }
                    switch ($sortby)
                    {
                        case 'asc': // 正向排序
                            asort($refer);
                            break;
                        case 'desc': // 逆向排序
                            arsort($refer);
                            break;
                        case 'nat': // 自然排序
                            natcasesort($refer);
                            break;
                    }
                    foreach ($refer as $key => $val)
                    {
                        $resultSet[] = &$list[$key];
                    }
                    return $resultSet;
                }
                return false;
            }
        }
        // 调用方法判断（将数组升序）
        $shuju = list_sort_by($data, 'p_date', 'asc');
        // dump($shuju);die;
        $this->assign('data',$shuju);
        $this->display();
    }
    public function chaxun(){
        $this->display();
    }
    //健康档案
    public function jiankang(){
        //接受从患者登记处传值（post方式）
        if (IS_POST){
            $station = M('station_p');//链接数据库
            $data = I('post.');//获取数据
            $station->data($data)->add();//添加数据
            $user = M('station_p'); //二次链接数据库
            $id = I('post.br_id');
            $data = $user->where("br_id={$id}")->select();
            $this->assign('data',$data);// 模板变量赋值
            // dump($data);die;
        //接受接诊区传值(get方式)    
        }else if(IS_GET){
            // 判断get.id是否存在
            if (isset($_GET['id'])) {
                $id = I('get.id');//获取条件
                $user = M('station_p');
                $data = $user->where("br_id={$id}")->select();
                $this->assign('data',$data);// 模板变量赋值
            }
        }
        // $this->assign('data',$data);// 模板变量赋值      
        $this->display();
    }
    public function tizhi(){
        $this->display();
    }
    public function tiaoyang(){
        $this->display();
    }
}