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
         //用户名存入session
            session('wh_userName',$name);
           // var_dump($_SESSION);
           $this->display('index/home');
        }else{
           $this->redirect('index/index',array('aa'=>1));
        }
    }
    
}