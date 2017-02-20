<?php
namespace Home\Controller;
use Think\Controller;
class KaifangController extends Controller {
    public function bingMing(){
        $user = M("tcd_zybm");
        $where['BM'] = '04';
        $data = $user->where($where)->distinct(true)->field('name,code')->select();
        $this->assign('data',$data);
        $this->display();
    }
    //按病名查找
    public function ajaxtjbm(){
        $tjbm = I('post.tjbm');//接受ajax传过来的条件
        if(preg_match ("/^[a-z]/i", $tjbm)){
            $user = M("tcd_zybm");
            $where['BM_INPUT'] = array('like',"{$tjbm}%");
            $where['BM'] = '04';
            $data = $user->where($where)->distinct(true)->field('name,code')->select();
            // $where['bm_input'] = array('like',"'$tjbm%'");
            // $data = $user->where("bm_input like '".$user."%' ")->field('name')->select();
            // $data = $user->where("bm_input = 'XEGM' ")->field('name')->select();
            $this->ajaxReturn($data,'json');
        }else{
            $user = M("tcd_zybm");
            $where['NAME'] = array('like',"{$tjbm}%");
            $where['BM'] = '04';
            $data = $user->where($where)->distinct(true)->field('name,code')->select();
            // $where['bm_input'] = array('like',"'$tjbm%'");
            // $data = $user->where("bm_input like '".$user."%' ")->field('name')->select();
            // $data = $user->where("bm_input = 'XEGM' ")->field('name')->select();
            $this->ajaxReturn($data,'json');
        }       
    }
    //ajax改变右侧证型 治法 等的值
    public function ajaxgaibiyouzhi(){
        $tjzuobingm = I('post.tjzuobingm');//接受ajax传过来的条件
        $user = M("tcd_zybm");
        $data = $user->where("CODE = {$tjzuobingm}")->field('zx,zf,cf_name,cf_tree')->select();

        $this->ajaxReturn($data);
    }
    public function zhengxing(){
        $this->display();
    }
    public function zhiLiaoZhinan(){
        $this->display();
    }
    public function jingDian(){
        $this->display();
    }
    public function jingYan(){
        $this->display();
    }
    public function bianZheng(){
    	$this->display();
    }
    public function west(){
        $use = M('useage_table');
        $pl = M('usepl_table');
        $pllist = $pl->select();
        $useage = $use->select();
        $this->assign('useage',$useage);
        $this->assign('usepl',$pllist);
        $this->display();
    }
    public function zyhome(){
        $this->display();
    }
}