<?php
namespace Home\Controller;
use Think\Controller;
class HuajiaController extends Controller {
    public function huajia(){
    	$br_id = session('id');
    	$jbxx = M('station_p');
    	$data = $jbxx -> where("br_id = '$br_id'") -> select();
    	$this -> assign('data',$data);
        $this->display();
    }
}