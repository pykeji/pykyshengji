<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function home(){
        $this->display();
    }
    public function jiezhen(){
        $this->display();
    }
    public function dengji(){
    	// $Data     = M('station_p');// 实例化Data数据模型
        // $result = $Data->select();
        // $this->assign('result',$result);
        $this->display();
    

        // $this->display();
    }
    public function yuyue(){
        $this->display();
    }
    public function chaxun(){
        $this->display();
    }
    public function jiankang(){
        $this->display();
    }
    public function tizhi(){
        $this->display();
    }
    public function tiaoyang(){
        $this->display();
    }
}