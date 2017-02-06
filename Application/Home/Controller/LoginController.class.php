<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function Login(){
        $user = M('user-info-dict');
        //组合查询条件
        $where = array();
        // dump($_POST);
        $name = $_POST['name'];
        $pwd = $_POST['password'];
        // dump($pwd);
        $where['userName'] = $name;
        $where['passWord'] = $pwd;
        $result = $user->where($where)->find();
        // dump($result);
        //验证用户名密码对比
        if($result && $result['password'] == $pwd){
          $code = $result['code'];
          //机构编码存入session
           session('wh_code',$code);
           $id = $result['id'];
         //用户名存入session
            session('wh_userName',$name);
            session('wh_userId',$id);
           // var_dump($_SESSION);
           $this->display('index/home');
        }else{
           $this->redirect('index/index',array('aa'=>1));
        }
    }
    // 用户详细信息查询
    public function userInfo(){
        $id = $_SESSION['wh_userId'];
        $Model = M('power-name');
        $User = M('user-info-dict');
        $pow = $User->where("id={$id}")->getField('power');
        $name = $Model->where("id={$pow}")->getField('name');
        $this->assign('zhiwei',$name);
        $this->display('index/userHome');
    }
    //退出登录
    public function logOut(){
        session_unset();
        // 清除session
        $this->redirect('index/index');
    }
    
}