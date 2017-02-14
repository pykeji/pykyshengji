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
}