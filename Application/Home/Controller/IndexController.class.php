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
        }else{
            $this->display();
        }
        
    }
    public function home(){
        $this->display();
    }
    //接诊区
    public function jiezhen(){
        $rect = M('station_p');
        $data =  $rect->where('jz_flagjz=1')->select();
        // dump($data);die;
        $this->assign('data',$data);// 模板变量赋值
        $this->display();
    }
    // ajax接诊详情参数
    public function jiezhenxiangqajax(){
        $id = I('get.id');
        $user = M('station_p');
        $data = $user->where("br_id={$id}")->select();
       $this->ajaxReturn($data,'json');
    }
    //患者登记
    public function dengji(){
    	$data     = M('station_p');// 实例化Data数据模型
        $id = $data->field('BR_ID')->select();
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
    public function yuyue(){
        $this->display();
    }
    public function chaxun(){
        $this->display();
    }
    //健康档案
    public function jiankang(){
        //接受从患者登记处传值
        if (IS_POST){
            $station = M('station_p');//链接数据库
            $data = I('post.');//获取数据
            $station->data($data)->add();//添加数据
            $user = M('station_p'); //二次链接数据库
            $id = I('post.br_id');
            $data = $user->where("br_id={$id}")->select();
            // dump($data);die;
        //接受接诊区传值    
        }else if(IS_GET){
            $user = M('station_p');
            $id = I('get.id');//获取条件
            $data = $user->where("br_id={$id}")->select();
            // dump($data);die;
        }
        $this->assign('data',$data);// 模板变量赋值      
        $this->display();
    }
    public function tizhi(){
        $this->display();
    }
    public function tiaoyang(){
        $this->display();
    }
}