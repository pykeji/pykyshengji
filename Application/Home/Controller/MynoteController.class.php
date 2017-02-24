<?php
namespace Home\Controller;
use Think\Controller;
class MynoteController extends Controller{
	public function index(){
		$this->display();
	}
	function consub(){
        $con=M('note');

        $data=I('post.');
        dump($data);exit;
        $data[userid]=session(wh_userId);
        $info=$con->add($data);
        if ($info) {
            echo "<script>parent.location.reload();</script>";
        }
    }
    function view(){
        $model=M('note');
        $cons=$model->where("id='$_GET[id]'")->select();
        $this->assign('cons',$cons);
        $this->display();
    } 
    function mlsubmit(){
        $elet=M('nodes');
        $data=I('post.');
        $data[userid]=session(wh_userId);
        $info=$elet->add($data);
        if ($info) {
            echo "<script>alert('新增目录成功！');parent.location.reload();</script>" ;  
        }
    }
    function delete(){
        $model=M('note');
        $info=$model->where("p_id='$_GET[id]'")->select();
        if(empty($info)){
            $nodes=M('nodes');
            $suc=$nodes->where("id='$_GET[id]'")->delete();
            if($suc){
                echo "<script>alert('删除成功！');parent.location.reload();</script>";
            }
        }else{
            echo "<script>alert('此目录下有文档，请清空文档之后再删除目录！');history.go(-1);</script>";
        }
    }
    function mllist(){
        $model=M();
        $result=$model->field('n1.*,n2.*')
                    ->table('nodes as n1,note as n2')
                    ->where('n2.p_id=n1.id')
                    ->select();
        $elet=M('nodes');
        $elements=$elet->select();
        foreach ($result as $k=>$v) {
            if($result[$k][userid]==$_SESSION[wh_userId]){
                $res[]=$v;
            }
        }
        
        foreach ($elements as $k=>$v) {
            if($v[userid]==$_SESSION[wh_userId]){
                $elets[]=$v;
            }
        }
        $this->assign('elet',$elets);
        $this->assign('res',$res);
        $this->display();
    }
    function rpro(){
        $this->display();
    }
    function vsave(){
        $model=M('note');

        $sav=I('post.');
        $data['list']=$sav['list'];
        $data['contents']=$sav['contents'];
        $info=$model->where("id='$_GET[id]'")->save($data);
        if($info){
            echo "<script>history.go(-1);</script>";
        }
    }
    function vdel(){
        $model=M('note');
        $del=$model->where("id='$_POST[id]'")->delete();
        if($del){
            $strdel="删除成功！";
            $this->ajaxReturn($strdel,'json');
        }  
    }
    function setml(){
        $this->display();
    }
    function delml(){
        $model=M('nodes');
        $nodes=$model->select();
        $this->assign('nodes',$nodes);
        $this->display();
    }
    function setnote(){
        $mlid=$_GET[id];
        $this->assign('mlid',$mlid);
        $this->display();
    }
}

?>