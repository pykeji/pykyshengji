<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
//    用户列表
    public function user_list(){
        $this->display();
    }
//    删除的用户
    public function user_del(){
        $this->display();
    }
//    用户等级划分
    public function user_level(){
        $this->display();
    }

}