<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function del($id){
      $user = M('user-info-dict');
      $user->where("id={$id}")->delete();
      $this->redirect('Login/userManage');
    }
    
}