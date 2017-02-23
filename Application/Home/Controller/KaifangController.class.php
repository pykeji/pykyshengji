<?php
namespace Home\Controller;
use Think\Controller;
class KaifangController extends Controller {
    public function bingMing(){
        $user = M("tcd_zybm");
        $where['BM'] = '000';
        $data = $user->where($where)->distinct(true)->field('name,code')->select();
        //二次链接数据库
        // $douser = M("dict_usage");//别删
        // $yongfdata = $douser->field('name,code')->select();//别删
        $this->assign('data',$data);
        // $this->assign('yongfdata',$yongfdata);//别删
        $this->display();
    }
    //按病名查找
    public function ajaxtjbm(){
        $tjbm = I('post.tjbm');//接受ajax传过来的条件
        if(preg_match ("/^[a-z]/i", $tjbm)){
            $user = M("tcd_zybm");
            $where['BM_INPUT'] = array('like',"{$tjbm}%");
            $where['BM'] = '000';
            $data = $user->where($where)->distinct(true)->field('name,code')->select();
            // $where['bm_input'] = array('like',"'$tjbm%'");
            // $data = $user->where("bm_input like '".$user."%' ")->field('name')->select();
            // $data = $user->where("bm_input = 'XEGM' ")->field('name')->select();
            $this->ajaxReturn($data,'json');
        }else{
            $user = M("tcd_zybm");
            $where['NAME'] = array('like',"{$tjbm}%");
            $where['BM'] = '000';
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
    //ajax根据查询条件改变证型治法值
    public function ajaxzhengxingzhif(){
        $tjbmzxzf = I('post.tjbmzxzf');//接受ajax传过来的病名code条件
        $zxzfjg = I('post.zxzfjg');//接受ajax传过来的条件
        $user = M("tcd_zybm");
        $where['ZX_INPUT'] = array('like',"{$zxzfjg}%");
        $where['ZF_INPUT'] = array('like',"{$zxzfjg}%");
        $where['_logic'] = 'or';
        $map['_complex'] = $where;
        $map['CODE'] = $tjbmzxzf;
        // $where['_string'] = ' (ZX_INPUT like "{$zxzfjg}%")  OR ( ZF_INPUT like "{$zxzfjg}%") ';
        $data = $user->where($map)->field('zx,zf,cf_name,cf_tree')->select();
        $this->ajaxReturn($data);

    }
    //ajax改变下侧处方
    public function ajaxgaibianchufang(){
        $tjyouzhengxing = I('post.tjyouzhengxing');//接受ajax传过来的条件
        $user = M("bz_cf");
        $where['bz_cf.cfdm'] = $tjyouzhengxing;
        $data = $user->join('dict_drug_zy on dict_drug_zy.drug_code=bz_cf.ypdm')->where($where)->field('dict_drug_zy.drug_name,bz_cf.dw,bz_cf.sl,bz_cf.yf,bz_cf.serial_no')->select();
        $this->ajaxReturn($data);
    }
    //证型治法页面
    public function zhengxing(){
        $user = M("tcd_zybm");
        $where['BM'] = '04';
        $data = $user->where($where)->distinct(true)->field('name,zx,zf,cf_name,cf_tree')->select();
        // dump($data);
        $this->assign('data',$data);
        $this->display();
    }
    //ajax 页面2 按查询条件得出证型治法
    public function yeerajaxzxzf(){
        $yerzxzfjg = I('post.yerzxzfjg');//接受ajax传过来的条件
        $user = M("tcd_zybm");
        $where['ZX_INPUT'] = array('like',"{$yerzxzfjg}%");
        $where['ZF_INPUT'] = array('like',"{$yerzxzfjg}%");
        $where['_logic'] = 'or';
        $map['_complex'] = $where;
        $map['BM'] = "000";
        $data = $user->where($map)->field('name,zx,zf,cf_name,cf_tree')->select();
        $this->ajaxReturn($data);
    }
    //ajax 页面2处方赋值
    public function yeerchufangfuzhi(){
        $tjyouzhengxing = I('post.tjyouzhengxing');//接受ajax传过来的条件
        $user = M("bz_cf");
        $where['bz_cf.cfdm'] = $tjyouzhengxing;
        $data = $user->join('dict_drug_zy on dict_drug_zy.drug_code=bz_cf.ypdm')->where($where)->field('dict_drug_zy.drug_name,bz_cf.dw,bz_cf.sl,bz_cf.yf,bz_cf.serial_no')->select();
        $this->ajaxReturn($data);
    }
    //治疗指南
    public function zhiLiaoZhinan(){
        $user = M("jbxx");
        $where['XXLBDM'] = '16';
        $data = $user->where($where)->order('xxdm')->select();
        $this->assign("data",$data);
        $this->display();
    }
    // ajax治疗指南点击出现子类
    public function ajaxzlznzilei(){
        $zhuaxuyhaoid = I('post.zhuaxuyhaoid');//接受ajax传过来的条件
        $user = M('v_tcd_zyxk');
        $where['BM'] = $zhuaxuyhaoid;
        $databingm = $user->where($where)->field('name,code')->select();
        $this->ajaxReturn($databingm);

    }
    //
    public function yeerajaxtjbm(){
        $tjbm = I('post.tjbm');//接受ajax传过来的条件
        if(preg_match ("/^[a-z]/i", $tjbm)){
            $user = M("v_tcd_zyxk");
            $where['input_code'] = array('like',"{$tjbm}%");
            $data = $user->where($where)->distinct(true)->field('BM,name,code')->select();
            // $where['bm_input'] = array('like',"'$tjbm%'");
            // $data = $user->where("bm_input like '".$user."%' ")->field('name')->select();
            // $data = $user->where("bm_input = 'XEGM' ")->field('name')->select();
            $this->ajaxReturn($data);
        }else{
            $user = M("v_tcd_zyxk");
            $where['NAME'] = array('like',"{$tjbm}%");
            $data = $user->where($where)->distinct(true)->field('BM,name,code')->select();
            // $where['bm_input'] = array('like',"'$tjbm%'");
            // $data = $user->where("bm_input like '".$user."%' ")->field('name')->select();
            // $data = $user->where("bm_input = 'XEGM' ")->field('name')->select();
            $this->ajaxReturn($data);
        }
        
    }
    //页面3ajax改变右侧证型
    public function yesanajaxyouzhengxing(){
        $tjzuobingm = I('post.tjzuobingm');//接受ajax传过来的条件
        $user = M("tcd_zybm");
        $where['zyyxh_code'] = $tjzuobingm;
        $data = $user->where($where)->field('ZX,ZF,cf_name,cf_tree,explain')->select();

        $this->ajaxReturn($data);
    }
    //页面3按证型搜索赋值
    public function yesanajaxzhengxingzhif(){
        $tjbmzxzf = I('post.tjbmzxzf');//接受ajax传过来的病名code条件
        $zxzfjg = I('post.zxzfjg');//接受ajax传过来的条件
        $user = M("tcd_zybm");
        $where['ZX_INPUT'] = array('like',"{$zxzfjg}%");
        $where['ZF_INPUT'] = array('like',"{$zxzfjg}%");
        $where['_logic'] = 'or';
        $map['_complex'] = $where;
        $map['zyyxh_code'] = $tjbmzxzf;
        // $where['_string'] = ' (ZX_INPUT like "{$zxzfjg}%")  OR ( ZF_INPUT like "{$zxzfjg}%") ';
        $data = $user->where($map)->field('ZX,ZF,cf_name,cf_tree,explain')->select();
        $this->ajaxReturn($data);
    }
    //页面3 ajax 点击证型 改变处方 
    public function yesanajaxgaibianchufang(){
        $tjyouzhengxing = I('post.tjyouzhengxing');//接受ajax传过来的条件
        $user = M("bz_cf");
        $where['bz_cf.cfdm'] = $tjyouzhengxing;
        $data = $user->join('dict_drug_zy on dict_drug_zy.drug_code=bz_cf.ypdm')->where($where)->field('dict_drug_zy.drug_name,bz_cf.dw,bz_cf.sl,bz_cf.yf,bz_cf.serial_no')->select();
        $this->ajaxReturn($data);
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
        // $xy = M('xy_name');
        // $xyname = $xy->select();
        $pllist = $pl->select();
        $useage = $use->select();
        $this->assign('useage',$useage);
        $this->assign('usepl',$pllist);
        // $this->assign('xyname',$xyname);
        $this->display();
    }
    public function zyhome(){
        $dict = M('bz_cf');
        $where['bz_cf.cfdm'] = '1413.1001';
        $data = $dict->join('dict_drug_zy on dict_drug_zy.drug_code=bz_cf.ypdm')->where($where)->join('drug_dict on dict_drug_zy.drug_code=drug_dict.drug_code')->field('dict_drug_zy.drug_name,bz_cf.dw,dict_drug_zy.drug_code,drug_dict.xw1')->select();
        // dump($data);die;
        $cfTree = M('tcd_szjj');
        $szjj = $cfTree->where("CF_TREE='1002.1006'")->select();
        // var_dump($data);die;
        $this->assign('zy_yp',$data);
        $this->assign('szjj',$szjj);
        $this->display();
    }
}