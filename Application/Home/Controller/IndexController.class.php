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
    	// echo "string";
    	$Data     = M('STATION_P');// 实例化Data数据模型
        $result     = $Data->select();
        dump($result);die;
        $this->assign('result',$result);
        $this->display();
    
        // $this->display();
    }
}