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
           $level = $result['power'];
           $id = $result['id'];
           $pow = $result['power'];
           $path = $result['photopath'];
           session('wh_power',$pow);
         //用户名存入session
            session('wh_userName',$name);
            session('wh_userId',$id);
            session('patha',$path);
           // var_dump($_SESSION);
           // echo $level;
           $photo = $result['userphoto'];
           session('photo',$photo);
           $this->redirect('index/home',array('rev'=>$level));
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
    //显示用户管理页面
    public function userManage(){
        $name = $_SESSION['wh_userName'];
        $code = $_SESSION['wh_code'];
        $id = $_SESSION['wh_userId'];
        $user = M('user-info-dict');
        $name = M('power-name');
        $list = $user->where("code={$code}")->select();
        $na = $user->where("code={$code}")->Field('power')->select();
        $nnaa = M('power-name');
        $num = count($na);
        // dump($num);
        for($i=0;$i<$num;++$i){
          $att[$i] = $na[$i]['power'];
        }
        for($j=0;$j<$num;++$j){
          $newarr[$j] = $nnaa->where("id={$att[$j]}")->Field('name')->find();
        }
        
        // dump($list);
        for($z=0;$z<$num;++$z){
          $list[$z]['name'] = $newarr[$z]['name'];
        }
        $powerdict = $nnaa->where('level=1')->select();
        $um = count($powerdict);
        for($x=0;$x<$um;++$x){
          $powerlist[$x] = $powerdict[$x];
        }
        $this->assign('powerlist',$powerlist);
        $this->assign('list',$list);
        $this->display('index/userManage');
    }
    
}