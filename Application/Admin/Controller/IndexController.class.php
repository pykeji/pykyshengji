<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
//    管理员登录
    public function login(){
        $this->display();
    }
//    后台主界面
    public function index(){
        $this->display();
    }
//    登录后台后的欢迎界面
    public function welcome(){
        $this->display();
    }
}
