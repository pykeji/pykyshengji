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
    public function dengji(){
    	$Data     = M('station_p');// 实例化Data数据模型
        $result = $Data->select();
        $this->assign('result',$result);
        $this->display();
    

        // $this->display();
    }
}