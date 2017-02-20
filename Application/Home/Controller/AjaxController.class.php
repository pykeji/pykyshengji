<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
      public function power($power){
        $pow = M('power-name');
        $list = $pow->where("pid=$power")->select();
        $this->ajaxReturn($list);
      }
      public function upload($id){
      	$user = M('user-info-dict');
      	$userinfo = $user->where("id=$id")->select();
      	$this->ajaxReturn($userinfo);
      }
      public function drugWest($htm){
        $durg = M('drug_dict');
        $where['input_code'] = array('like',"{$htm}%");
        $list = $durg->where($where)->field('drug_name')->select();
        $this->ajaxReturn($list);
      }
      public function sele(){
        // $a = $_POST['list'];
        $drug = M('drug_dict');
        $ke = M('sys_dm_jldw');
        $list = $drug->where("drug_name='$_POST[list]'")->find();
        $hlcode = $list['hl_unit'];
        if($list['hl_unit']){
          $hlcode = $list['hl_unit'];
        }else{
           $hlcode = '9583';
        }
        $danwei = $ke->where("dwdm=$hlcode")->field('dw')->select();
        $bzdwcode = $list['bzdw1'];
        $bzdw =  $ke->where("dwdm=$bzdwcode")->field('dw')->select();;
        $list['hl'] = $list['hl'].$danwei[0]['dw'];
        $list['bzsl2'] = $list['bzsl2'].$bzdw[0]['dw'];
        $this->ajaxReturn($list);
      }

      //西药处方处理
      public function Chufang(){
        $bianma = $_POST[bianma];
        $mingcheng = $_POST[mingcheng];
        $guige = $_POST[guige];
        $hanliang = $_POST[hanliang];
        $baozhuang = $_POST[baozhuang];
        $shuliang = $_POST[shuliang];
        $zongliang = $_POST[zongliang];
        $tujing = $_POST[tujing];
        $yongliang = $_POST[yongliang];
        $shuliang = $_POST[shuliang];
        $cishu = $_POST[cishu];
        $tsyf = $_POST[tsyf];
        $tianshu = $_POST[tianshu];

        $abianma = explode(',',$_POST[bianma]);
        $amingcheng = explode(',',$_POST[mingcheng]);
        $aguige = explode(',',$_POST[guige]);
        $ahanliang = explode(',',$_POST[hanliang]);
        $abaozhuang = explode(',',$_POST[baozhuang]);
        $ashuliang = explode(',',$_POST[shuliang]);
        $azongliang = explode(',',$_POST[zongliang]);
        $atujing = explode(',',$_POST[tujing]);
        $ayongliang = explode(',',$_POST[yongliang]);
        $ashuliang = explode(',',$_POST[shuliang]);
        $acishu = explode(',',$_POST[cishu]);
        $atsyf = explode(',',$_POST[tsyf]);
        $atianshu = explode(',',$_POST[tianshu]);

        $num = count(explode(',',$bianma))-1;
        
          $xydict = M('xydrugcf_detial');

          $day = date('Ymd');
          //获取当日处方最大的ID
          $where['cf_id'] = array('like',"{$day}%");
          $mustId = $xydict->where($where)->order("cf_id desc")->Field('cf_id')->find();
          $newId = $mustId['cf_id']+1;
          if($newId == 1){
            $newId = $day.'00001';
          }
          $today = date("Y-m-d H:i:s");
          $brId = $_SESSION['id'];
          for($i = 0; $i < $num; $i++){
          $list[$i]['doctor_id'] = $_SESSION['wh_userId'];
          $list[0]['cfbz'] = $_POST[bz];
          $list[$i]['cf_id'] = $newId;
          $list[$i]['cf_date'] = $today;
          $list[$i]['BR_ID'] = $brid;
          $list[$i]['yp_code'] = $abianma[$i+1];
          $list[$i]['yp_name'] = $amingcheng[$i+1];
          $list[$i]['yp_spec'] = $aguige[$i+1];
          $list[$i]['rl'] = $ahanliang[$i+1];
          // $list[$i]['baozhuang'] = $abaozhuang[$i+1];
          $list[$i]['yp_total_amount'] = $ashuliang[$i+1];
          $list[$i]['zl'] = $azongliang[$i+1];
          $list[$i]['tujing'] = $atujing[$i+1];
          $list[$i]['yongliang'] = $ayongliang[$i+1];
          // $list[$i]['shuliang'] = $ashuliang[$i+1];
          $list[$i]['cishu'] = $acishu[$i+1];
          $list[$i]['yongfa'] = $atsyf[$i+1];
          // $list[$i]['tianshu'] = $atianshu[$i+1];
          $list[$i]['BR_ID'] = session(id);
          $list[$i]['xy_name'] = $_POST[xybm];
        }

          for($j = 0; $j < $num; $j++){
            $xydict->data($list[$j])->add();
          }
          $this->ajaxReturn(1);
      }

      public function westBing(){
          $val = $_POST[val];
          $xy = M('xy_name');
        if(preg_match("/^[a-z]/i", $val)){
          $where['spell'] = array('like',"{$val}%");
          $list = $xy->where($where)->select();
        }else{
          $where['name'] = array('like',"{$val}%");
          $list = $xy->where($where)->select();
        };
         $this->ajaxReturn($list);
      }
}