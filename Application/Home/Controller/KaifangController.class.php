<?php
namespace Home\Controller;
use Think\Controller;
class KaifangController extends Controller {
    public function bingMing(){
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
        $use = M('useage_table');
        $pl = M('usepl_table');
        $pllist = $pl->select();
        $useage = $use->select();
        $this->assign('useage',$useage);
        $this->assign('usepl',$pllist);
        $this->display();
    }
    public function zyhome(){
        $this->display();
    }
}