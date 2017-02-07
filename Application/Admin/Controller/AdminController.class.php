<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
//    管理员角色管理
    public function admin_role(){
        $this->display();
    }
//    管理员权限管理
    public function admin_permission(){
        $this->display();
    }
//    管理员列表
    public function admin_list(){
        $this->display();
    }
}