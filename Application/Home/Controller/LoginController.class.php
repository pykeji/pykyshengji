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
          //判断是否登录
          $on = $result['online'];
          $id = $result['id'];
          if($on == 0){
            $data['online'] = 1;
            $user->where("id={$id}")->save($data);
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
            //已登录
            $this->redirect('index/index',array('aa'=>2));
       }
            
        }else{
            //用户名或密码错误
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
         //更改登录状态online
        $data['online'] = 0;
        $id = $_SESSION['wh_userId'];
        $user = M('user-info-dict');
        $user->where("id={$id}")->save($data);
        // 清除session
        session_unset();
        $this->redirect('index/index');
    }
    
}