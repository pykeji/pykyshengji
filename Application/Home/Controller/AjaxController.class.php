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
        if(preg_match("/^[a-z]/i", $htm)){
          $where['input_code'] = array('like',"{$htm}%");
          $list = $durg->where($where)->field('drug_name')->select();
      }else{
          $where2['drug_name'] = array('like',"{$htm}%");
          $list = $durg->where($where2)->field('drug_name')->select();
      }
       
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
          $list[$i]['XH'] = session(xh);
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

      //用户密码重置
      
      public function reset(){
        $id = $_POST[id];
        $user = M('user-info-dict');
        $data['passWord'] = '123456';
        $user->where("id=$id")->save($data);
        $this->ajaxReturn(1);
      }

      //个人信息修改
      public function updateU(){
        $id = $_POST[id];
        $user = M('user-info-dict');
        $list = $user->where("id=$id")->find();
        $this->ajaxReturn($list);
      }

      //信息修改操作
      public function updateUser(){
        $id = $_POST[id];
        $name = $_POST[name];
        $phone = $_POST[phone];
        $pass = $_POST[pass];
        $user = M('user-info-dict');
        $data['userName'] = $name;
        $data['userPhone'] = $phone;
        $data['passWord'] = $pass;
        $user->where("id=$id")->save($data);
        $this->ajaxReturn(1);

      }
      //中医药品查询
      public function zysele(){
        $val = $_POST[val];
         $durg = M('drug_dict');
        if(preg_match("/^[a-z]/i", $val)){
          $where['input_code'] = array('like',"{$val}%");
          $where['drug_indicator'] = 2;
          $list = $durg->where($where)->where("drug_indicator=2")->field('drug_name')->select();
      }else{
          $where2['drug_name'] = array('like',"{$val}%");
          $where2['drug_indicator'] = 2;
          $list = $durg->where($where2)->field('drug_name')->select();
      }
       
        $this->ajaxReturn($list);
      }
      //加药
      public function jia(){
        $name = $_POST['val'];
        $drug = M('drug_dict');
        $list = $drug->where("drug_name='$name'")->Field("drug_code,xw1")->find();
        $this->ajaxReturn($list);
      }

      //检查是不是孕妇
      public function women(){
        $codeList = $_POST[val];
        for($i = 0;$i<count($codeList);$i++){
          $code[$i] = $codeList[$i];
        }
        $whe['drug_code'] = array('in',$code);
        $dict = M('dict_drug_zy');
        $list = $dict->where($whe)->Field('drug_name,pregnant_women')->select();
        $this->ajaxReturn($list);
      }
      //检查18反19畏
      public function fanwei(){
        $codeLista = $_POST[val];
        for($i = 0;$i<count($codeLista);$i++){
          $code[$i] = $codeLista[$i];
        }
        $dict = M('jy');
        $nn = 0;
        // $where['YP1'] = array('in',$code);
        // $list = $dict->where($where)->Field('YP2')->select();
       for ($q=0; $q <count($code) ; $q++) { 
          $a = $code[$q];
            for ($w=0; $w <count($code) ; $w++) { 
              $b = $code[$w];
              // $where['YP1'] = $a;
              // $where['YP2'] = $b;
              // $where['_logic'] = 'or';
              // $map['_complex'] = $where;
              // $map['YP1'] = $b;
              // $map['YP2'] = $a;
              
              $data = $dict->query("select * from jy where (YP1 =$a and YP2 = $b) or (YP1=$b and YP2=$a) ");
              // $ss = "select * from jy where (YP1 =$a and YP2 = $b) or (YP1=$b and YP2=$a) ";
              if(count($data)>0){
                  $ret[$nn] = $data[0];
                  $nn++;
              }

            }
       }
        
        // // $num = 0;
        // // for($j=0;$j<count($code);$j++){
        // //   for($z=0;$z<count($list);$z++){
        // //     if($code[$j] == $list[$z]['yp2']){
        // //       $arr[$num] = $code[$j];
        // //       $arr2[$num] = $list[$z]['yp2'];
        // //       $num++;
        // //     }
            
        // //   }
        // // }
        // // for($x=0;$x<count($arr);$x++){
        // //   $where['YP1'] = arr[$x];
        // //   $where['YP2'] = arr2[$x];
        // //   $fw[$x] = $arr2[$x];
        // // }
        // for($j=0;$j<count($list);$j++){
        //   $yp2list[$j] = $list[$j]['yp2'];
        // }
        // $whe['YP2'] = array('in',$yp2list);
        // $yp1list = $dict->where($whe)->Field('YP1')->select();
        // for($a=0;$a<count($yp1list);$a++){
        //   for($b=0;$b<count($yp2list);$b++){
        //     if($yp1list[$a] == $yp2list[$b]){
              
        //     }
        //   }
        // }
        $this->ajaxReturn($ret);
      }

      //中医处方保存
      public function zyBaocun(){
        $cf_dict = M('prescription');
        $cf_info = M('prescription_detail');
        $ypxuhao = $_POST[ypxuhao];
        $zycode = $_POST[zycode];
        $yaoming = $_POST[yaoming];
        $ypkg = $_POST[ypkg];
        $jianfa = $_POST[jianfa];
        $dw = $_POST[dw];
        $day = date('ymd');
          //获取当日处方最大的ID
          $where['presc_no'] = array('like',"{$day}%");
          $mustId = $cf_dict->where($where)->order("presc_no desc")->Field('presc_no')->find();
          $newId = $mustId['presc_no']+1;
          if($newId == 1){
            $newId = $day.'00001';
          }
          $num = count($yaoming);
          for ($i=0; $i <$num ; $i++) { 
            $data[$i]['presc_no'] = $newId;
            $data[$i]['drug_no'] = $ypxuhao[$i];
            $data[$i]['drug_code'] = $zycode[$i];
            $data[$i]['drug_name'] = $yaoming[$i];
            $data[$i]['amount'] = $ypkg[$i];
            $data[$i]['usage'] = $jianfa[$i];
            $data[$i]['drug_units'] = $dw[$i];
          }

          for($j = 0; $j < $num; $j++){
            $cf_info->data($data[$j])->add();
          }
          $newData['presc_no'] = $newId;
          $newData['patient_id'] = $_SESSION[id];
          $newData['presc_date'] = date("Y-m-d H:i:s");
          $newData['operator'] = $_SESSION[wh_userName];
          $newData['pregnant_woman'] = $_POST[yunfu];
          $newData['dose'] = $_POST[jiliang];
          $newData['order_text'] = $_POST[yizhu];
          $newData['cf_tree'] = $_POST[cftree];
          $newData['xh'] = $_SESSION[xh];
          $newData['presc_name'] = $_POST[cfname];
          $newData['zy_name'] = '中医名';
          $newData['usage'] = '使用方法'; 

          $cf_dict->data($newData)->add();

          $this->ajaxReturn(1);
      }
      
}