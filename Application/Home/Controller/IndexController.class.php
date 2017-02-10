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
        $data =  $rect->where('jz_flagjz=1')->order('p_date')->limit($page->firstRow.','.$page->listRows)->select();//查询数据（未完成就诊的）$Page->firstRow 起始条数 $Page->listRows 获取多少条
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
            $c = $b+1;
            $id = date('Ymd').$c;
            // dump($id);die;
        }else{
            $id = date('Ymd')."1";
        }
        // session(id,$id);//设置编号
        $this->assign('id',$id);//设置编号
        // $this->assign('data',$data);// 赋值数据集
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
        //左侧病历号
        $data     = M('station_p');// 实例化Data数据模型
        $id = $data->field('br_id')->select();
        foreach ($id as $v) {
            foreach ($v as $value) {
                $qb[]=substr($value, 0,8);
            }
        }
        $a=array_count_values($qb);//计算出现次数
        $b=$a[date('Ymd')];
        if (!empty($b)) {
            $c = $b+1;
            $id = date('Ymd').$c;
            // dump($id);die;
        }else{
            $id = date('Ymd')."1";
        }
        // session(id,$id);//设置编号
        $this->assign('id',$id);//设置编号
        // $this->assign('data',$data);// 赋值数据集
        // 右侧预约情况
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
    //患者查询
    public function chaxun(){
        if(IS_GET){
            $times = date("Y-m-d");//获取当前时间
            //拼凑where条件 p_date 在$times 00:00:00 和 $times 23:59:59 时间段以内
            $map['p_date']  = array('between',"$times 00:00:00,$times 23:59:59");
            // dump($map['p_date']);die;
            $rect = M('station_p');
            $count = $rect->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
            $page = getpage($count,10);//控制页面显示条数
            $show = $page->show();// 分页显示输出
            $this->assign('page',$show);// 赋值分页输出
            //以上是分页 ， 以下是数据
            $data =  $rect->where("p_date like '". $times."%'")->order('br_id')->limit($page->firstRow.','.$page->listRows)->select();//查询数据（未完成就诊的）$Page->firstRow 起始条数 $Page->listRows 获取多少条
            $this->assign('data',$data);// 赋值模板变量
            $this->display();
        }else if(IS_POST){
            //链接数据库
            $rect = M('station_p');
            //第一步判断是否有病历号(病例号是主键唯一的)
            $br_id = I('post.br_id');//获取病例号
            if(!empty($br_id)){
                $data = $rect->where("br_id='{$br_id}'")->select();
                // dump($data);die;
                $this->assign('data',$data);
                $this->display();
            }else{
                //病例号不存在   获取时间拼接where条件
                $p_datekai = I('post.p_datekai');//获取开始日期
                $p_datezhong = I('post.p_datezhong');//获取终止日期
                $datetime['p_date'] =array('between',"$p_datekai 00:00:00,$p_datezhong 23:59:59");
                // dump($datetime);die;
                // 获取其他信息 拼接where条件
                $suoyoutj = I('post.');
                foreach ($suoyoutj as $k => $v) {
                    //当键值等于开始时间 不算入where条件内
                    if($k !="p_datekai" ){
                        //当键值等于终止时间 不算入where条件内
                        if($k!="p_datezhong"){
                            //判断值不为空
                            if(!empty($v)){
                                $a[].=$k;
                                $b[].=$v;
                            }
                        }
                    } 
                }
                //把值存在的数据 整合成一个数组 （建对应值的一个数组）
                $com=array_combine($a,$b);
                //分为两种情况 
                //第一 姓名或性别有一个存在。 第二 姓名或性别都不存在
                $br_name = I('post.br_name');
                $xb = I('post.xb');
                if($br_name || $xb){
                    // dump($com);die;
                    $count = $rect->where($com)->where($datetime)->count();// 查询满足要求的总记录数 $map表示查询条件
                    $page = getpage($count,10);//控制页面显示条数
                    $show = $page->show();// 分页显示输出
                    $this->assign('page',$show);// 赋值分页输出
                    //以上是分页 ， 以下是数据
                    $data = $rect->where($com)->where($datetime)->limit($page->firstRow.','.$page->listRows)->select();//查询数据（未完成就诊的）$Page->firstRow 起始条数 $Page->listRows 获取多少条

                    $this->assign('data',$data);
                    $this->display();
                }else{
                    // 第二 姓名或性别都不存在
                    $count = $rect->where($datetime)->where($datetime)->count();// 查询满足要求的总记录数 $map表示查询条件
                    $page = getpage($count,10);//控制页面显示条数
                    $show = $page->show();// 分页显示输出
                    $this->assign('page',$show);// 赋值分页输出
                    //以上是分页 ， 以下是数据
                    $data = $rect->where($datetime)->limit($page->firstRow.','.$page->listRows)->select();//查询数据（未完成就诊的）$Page->firstRow 起始条数 $Page->listRows 获取多少条
                    // dump($data);die;
                    $this->assign('data',$data);
                    $this->display();
                }
                    
            }  
        }
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
            session(id,$id);//设置编号存入session
            // dump($data);die;
        //接受接诊区传值(get方式)    
        }else if(IS_GET){
            // 判断get.id是否存在
            if (isset($_GET['id'])) {
                $id = I('get.id');//获取条件
                $user = M('station_p');
                $data = $user->where("br_id={$id}")->select();
                $this->assign('data',$data);// 模板变量赋值
                session(id,$id);//设置编号存入session

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