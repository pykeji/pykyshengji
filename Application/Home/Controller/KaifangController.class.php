<?php
namespace Home\Controller;
use Think\Controller;
class KaifangController extends Controller {
    public function bingMing(){
<<<<<<< HEAD
=======
        $user = M("tcd_zybm");
        $data = $user->select();
        $this->assign('data',$data);
>>>>>>> 2c33002989b94e03d184eb00c0203b568881180a
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
<<<<<<< HEAD
=======
        $use = M('useage_table');
        $pl = M('usepl_table');
        $pllist = $pl->select();
        $useage = $use->select();
        $this->assign('useage',$useage);
        $this->assign('usepl',$pllist);
>>>>>>> 2c33002989b94e03d184eb00c0203b568881180a
        $this->display();
    }
    public function zyhome(){
        $this->display();
    }
}