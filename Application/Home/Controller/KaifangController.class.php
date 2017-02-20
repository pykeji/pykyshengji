<?php
namespace Home\Controller;
use Think\Controller;
class KaifangController extends Controller {
    public function bingMing(){
        $user = M("tcd_zybm");
        $data = $user->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function zhengxing(){
        $this->display();
    }
    public function zhiLiaoZhinan(){
        $this->display();
    }
    public function jingDian(){
        $this->display();
    }
    public function jingYan(){
        $this->display();
    }
    public function bianZheng(){
    	$this->display();
    }
    public function west(){
        $this->display();
    }
    public function zyhome(){
        $this->display();
    }
}