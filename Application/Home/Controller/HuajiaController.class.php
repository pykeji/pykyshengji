<?php
namespace Home\Controller;
use Think\Controller;
class HuajiaController extends Controller {
    public function huajia(){
    	$br_id = session('id');
<<<<<<< HEAD
    	$jbxx = M('station_p');
=======
    	$jbxx = M('station_p');//病人基本信息
>>>>>>> 2c33002989b94e03d184eb00c0203b568881180a
    	$data = $jbxx -> where("br_id = '$br_id'") -> select();
    	$this -> assign('data',$data);
        $this->display();
    }
<<<<<<< HEAD
=======
    public function ajax(){
    	$sfxm = M('p_price_list');//收费项目列表
		$name = $_POST['name'];
    	$sfxmdata = $sfxm -> where("item_name = '$name'") -> select();
    	$this -> ajaxReturn($sfxmdata,'json');
    }
>>>>>>> 2c33002989b94e03d184eb00c0203b568881180a
}