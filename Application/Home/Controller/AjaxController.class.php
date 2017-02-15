<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
      public function power($power){
        $pow = M('power-name');
        $list = $pow->where("pid=$power")->select();
        $this->ajaxReturn($list);
      }
      public function upload($id){
      	$user = M('user-info-dict');
      	$userinfo = $user->where("id=$id")->select();
      	$this->ajaxReturn($userinfo);
      }
      public function drugWest($htm){
        $durg = M('drug_dict');
        $where['input_code'] = array('like',"{$htm}%");
        $list = $durg->where($where)->field('drug_name')->select();
        $this->ajaxReturn($list);
      }
      public function sele(){
        // $a = $_POST['list'];
        $drug = M('drug_dict');
        $list = $drug->where("drug_name='$_POST[list]'")->find();
        $this->ajaxReturn($list);
      }
}