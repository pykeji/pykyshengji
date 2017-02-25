<?php
namespace Home\Controller;
use Think\Controller;
class HuajiaController extends Controller {
    public function huajia(){
        //病人信息
        $br_id = session('id');
        $jbxx = M('station_p');//病人基本信息
        $where['br_id'] = $br_id;
        $xh = $jbxx -> where($where) -> max('xh');
        $where['xh'] = $xh;
        $data = $jbxx -> where($where) -> select();

        //收费列表信息(审核处方之后)
        if($_POST){
            if($_GET['flag'] == 1){
                $flag = 1;//收费
            }else{
                $flag = 2;
            }
            $shouf = M('g_outp_bill_item');
            $len = count($_POST[xuhao]);
            for($i=1;$i<=$len;$i++){
                $arr = array();
                $it_code = M('p_price_list');//查询项目代码
                $name = $_POST[xmname][$i];
                $code = $it_code -> field('ITEM_CODE') -> where("item_name = '$name'") -> select();
                if($code[0][item_code] != 01 && $code[0][item_code] != 02 && $code[0][item_code] != 03 ){
                    $arr[BILL_CODE] = ' ';
                    $arr[SERIAL_NO] = $i;
                }else{
                    if($code[0][item_code] == 01){//西药
                        $xy = M('xydrugcf_detial');
                        $xh = $xy -> where("br_id = '$br_id'") -> max(xh);
                        $xy_ic = $xy -> field('cf_id') -> where("br_id = '$br_id' and xh = '$xh'") -> select();
                        $arr[BILL_CODE] = $xy_ic[0][cf_id];
                        $arr[SERIAL_NO] = $i;
                    }
                    if($code[0][item_code] == 03){//中草药
                        $zcy = M('prescription');
                        $xh = $zcy -> where("patient_id = '$br_id'") -> max(xh);
                        $zcy_ic = $zcy -> field('presc_no') -> where("patient_id = '$br_id' and xh = '$xh'") -> select();
                        $arr[BILL_CODE] = $zcy_ic[0][presc_no];
                        $arr[SERIAL_NO] = $i;
                    }
                }
                //$arr[BILL_CODE] = '';//处方号
                $arr[ITEM_CODE] = $code[0][item_code];//项目代码
                $arr[CLINIC_NUM] = $_POST['sf_blh'];//病人ID
                $arr[xh] = $data[0]['xh'];//挂号序号
                $date = date('Y-m-d H:i:s');
                $arr[CHARGE_DATE] = $date;//收费日期
                $arr[UNIT_PRICE] = $_POST[danjia][$i];//单价
                $arr[AMOUNT] = $_POST[number][$i];//数量
                $arr[UNITS] = $_POST[danwei][$i];//单位
                $arr[TOTAL] = $_POST[jine][$i];//金额
                $arr[OPERATOR_CODE] = $_SESSION['wh_userId'];//操作员编码
                $arr[BILL_STATUS] = $flag;//收费状态
                //$arr[SERIAL_NO] = '$i';//项目收费序号
                $arr[RETURN_DATE] = '';//退费日期
                $arr[INVOICE_NO] = $_POST['sf_pjh'];//发票号
                //dump($arr);die;
                $res = $shouf -> add($arr);
                if($res){
                    //收费成功后需将收费标识(indicate和cf_flag)更改为1
                    if($arr[ITEM_CODE] == '03'){
                        $zcy -> where("patient_id = '$br_id' and xh = '$xh'") -> setField('indicate','1');
                    }
                    if($arr[ITEM_CODE] == '01'){
                        $xy -> where("br_id = '$br_id' and xh = '$xh'") -> setField('cf_flag','1');
                    }
                }
            }
            if($res){
                $this -> success('病人收费成功！',U('Huajia/huajia?return='.CURRENT_URL),1);
            }else{
                $this -> error('系统异常，收费失败！',U('Huajia/huajia?return='.CURRENT_URL),2);
            }
        }else{
            $br_id = session('id');
            $jbxx = M('station_p');//病人基本信息
            $where['br_id'] = $br_id;
            $xh = $jbxx -> where("br_id = '$br_id'") -> max('xh');
            $data = $jbxx -> where("br_id = '$br_id' and xh = '$xh'") -> select();
            $sfrq = date('Y-m-d');

            $shouf = M('g_outp_bill_item');//收费信息 票据号
            //生成票据号
            $piaojuhao = $shouf -> field('invoice_no') -> max('invoice_no');
            $strpjh = substr($piaojuhao,0,8);
            $date = date('Ymd');
            if( $strpjh == $date){
                $piaojuhao = $piaojuhao + 1;
            }else{
                $piaojuhao = $date.'00001';
            }


            //查询当前病人历史收费情况(退费页面)
            $sfls = $shouf -> distinct(true) -> order('invoice_no') -> field('invoice_no') -> where("CLINIC_NUM = '$br_id' and xh = '$xh'") -> select();//票据号
            //$fph =  $sfls[0][invoice_no];
            //消费总额
            $arr = array();
            for($i=0;$i<count($sfls);$i++){
                $czjine = 0;
                $pjuhao = $sfls[$i][invoice_no];
                $zjine = $shouf -> field('total') -> where("invoice_no = '$pjuhao'") -> select();
                for($j=0;$j<count($zjine);$j++){
                    $czjine = $czjine + $zjine[$j][total];
                }
                $arr[$i]['total'] = number_format($czjine,2);
            }

            //查看已开处方
            $zy = M('prescription');//历史处方表
            $zy_detail = M('prescription_detail');//处方明细表
            $xy = M('xydrugcf_detial');//西药处方表
            $xy_detail = M('drug_dict');//西药药品明细表
            $zyxh = $zy -> where("patient_id = '$br_id'") -> max('xh');
            $zyxh = $zyxh[0][xh];//查看当前病人信息(indicate为0表示未收费，为1表示已收费)
            $zykf = $zy -> where("patient_id = '$br_id' and xh = '$zyxh' and indicate = 0") -> select();
            $presc_no =  $zykf[0][presc_no];//查询该病人未收费的项目
            $zykf1 = $zy_detail -> where("presc_no = '$presc_no'") -> select();
            $zyyp = array();
            $zylen = count($zykf1);
            //循环生成页面数据：单位、单价、数量、金额
            for($i=0;$i<$zylen;$i++){
                $zyyp['amount'] += $zykf1[$i][amount];
                $zyyp['drug_units'] = '克';
                $zyyp['price'] += $zykf1[$i][costs];
                $zyyp['costs'] += $zykf1[$i][costs];
            }
            $zyyp['costs'] = $zyyp['costs'] * $zykf[0][dose];
            //小数位
            $zyyp['amount'] = number_format($zyyp['amount'],2);
            $zyyp['price'] = number_format($zyyp['price'],2);
            $zyyp['costs'] = number_format($zyyp['costs'],2);

            //西药处方
            $xyxh = $xy -> where("br_id = '$br_id'") -> max('xh');
            $xyxh = $xyxh[0][xh];//查看当前病人信息(cf_flag为0表示未收费，为1表示已收费)
            $xykf = $xy -> where("br_id = '$br_id' and xh = '$xyxh' and cf_flag = 0") -> select();
            $xylen = count($xykf);
            $xyyp = array();
            //循环生成页面数据：单位、单价、数量、金额
            for($i=0;$i<$xylen;$i++){
                //查询该病人未收费的项目
                $drug_code = $xykf[$i][yp_code];
                $xykf1 = $xy_detail -> where("drug_code = '$drug_code'") -> select();
                if($i != 0){
                    $j = 0;
                    $xyyp[$i]['drug_name'] = $xykf1[$j][drug_name];
                    $xyyp[$i]['amount'] = $xykf[$j][yp_total_amount];//药品总量
                    $xyyp[$i]['price'] = $xykf[$i][price];
                    $xyyp[$i]['costs'] = number_format($xyyp[$i]['amount'] * $xyyp[$i]['price'],2);
                }else{
                    $xyyp[$i]['drug_name'] = $xykf1[$i][drug_name];
                    $xyyp[$i]['amount'] = $xykf[$i][yp_total_amount];//药品总量
                    $xyyp[$i]['price'] = $xykf[$i][price];
                    $xyyp[$i]['costs'] = number_format($xyyp[$i]['amount'] * $xyyp[$i]['price'],2);
                }
            }
            //前台模板页面显示效果
            if($xylen == 0){

            }else{
                $xydrug = array();
                $xydrug[0]['cf_id'] = $xykf[0]['cf_id'];
                $xydrug[0]['xmname'] = '西药';
                $xydrug[0]['danwei'] = '';
                for($k=0;$k<count($xyyp);$k++){
                    $xydrug[0]['price'] += $xyyp[$k]['price'];
                    $xydrug[0]['amount'] = $k+1;
                    $xydrug[0]['costs'] = $xydrug[0]['price'] * $xydrug[0]['amount'];
                }
                $xydrug[0]['price'] = number_format($xydrug[0]['price'],2);
                $xydrug[0]['amount'] = number_format($xydrug[0]['amount'],2);
                $xydrug[0]['costs'] = number_format($xydrug[0]['costs'],2);
            }      
            

            $this -> assign('arr',$arr);
            $this -> assign('zyyp',$zyyp);
            $this -> assign('xydrug',$xydrug);
            $this -> assign('czjine',$czjine);
            $this -> assign('sfls',$sfls);
            $this -> assign('pjh',$piaojuhao);
            $this -> assign('sfrq',$sfrq);
            $this -> assign('data',$data);
            $this -> assign('zykf',$zykf);
            $this->display();
        }
    }
    public function ajax(){
    	$sfxm = M('p_price_list');//收费项目列表
		$name = $_POST['name'];
    	$sfxmdata = $sfxm -> where("item_name = '$name'") -> select();
    	$this -> ajaxReturn($sfxmdata,'json');
    }
    public function tuifei(){
        $sf = M('g_outp_bill_item');//收费表
        $invoice_no = $_POST['invoice_no'];
        $sflb = $sf -> where("invoice_no = '$invoice_no'") -> select();
        $sflbarr = array();
        $xm = M('p_price_list');
        for($i=0;$i<count($sflb);$i++){
            $sflbarr[$i]['serial_no'] = $sflb[$i]['serial_no'];
            $item_code = $sflb[$i]['item_code'];
            $xmname = $xm -> field("item_name") -> where("item_code = '$item_code'") -> select();
            $sflbarr[$i]['item_name'] = $xmname[0]['item_name'];
            $sflbarr[$i]['units'] = $sflb[$i]['units'];
            $sflbarr[$i]['unit_price'] = number_format($sflb[$i]['unit_price'],2);
            $sflbarr[$i]['amount'] = number_format($sflb[$i]['amount'],2);
            $sflbarr[$i]['total'] = $sflbarr[$i]['unit_price'] * $sflbarr[$i]['amount'];
            $sflbarr[$i]['total'] = number_format($sflbarr[$i]['total'],2);
            $sflbarr[$i]['ztotal'] += $sflbarr[$i]['total'];
            $sflbarr[$i]['ztotal'] = number_format($sflbarr[$i]['ztotal'],2);
        }
        $this -> ajaxReturn($sflbarr,'json');
    }
    public function yplist(){
        $sf = M('g_outp_bill_item');//收费表
        $price = M('p_price_list');//价格表
        $zy = M('prescription');//中药表
        $zymx = M('prescription_detail');//中药明细表
        $xy = M('xydrugcf_detial');//西药表
        $id = $_POST['id'];

        $zyid = $zy -> where("presc_no =  '$id'") -> select();
        $xyid = $xy -> where("cf_id = '$id'") -> select();
        $sfdetail = array();
        if(count($zyid) != 0){
            for($i=0;$i<count($zyid);$i++){
                $presc_no = $zyid[$i]['presc_no'];
                $zymx_d = $zymx -> where("presc_no = '$presc_no'") -> select();
                for($j=0;$j<count($zymx_d);$j++){
                    $sfdetail[$j]['id'] = $j;
                    $sfdetail[$j]['xmname'] = $zymx_d[$j]['drug_name'];
                    $sfdetail[$j]['amount'] = $zymx_d[$j]['amount'];
                    $sfdetail[$j]['units'] = $zymx_d[$j]['drug_units'];
                    $sfdetail[$j]['dose'] = number_format($zyid[0]['dose'],2);
                    $sfdetail[$j]['price'] = $zymx_d[$j]['price'];
                    $sfdetail[$j]['costs'] = $sfdetail[$j]['amount'] * $sfdetail[$j]['dose'] * $sfdetail[$j]['price'];
                    $sfdetail[$j]['costs'] = number_format($sfdetail[$j]['costs'],2);
                }
            }
        }
        if(count($xyid) != 0){
            for($i=0;$i<count($xyid);$i++){
                $sfdetail[$i]['id'] = $i;
                $sfdetail[$i]['xmname'] = $xyid[$i]['ypname'];
                $sfdetail[$i]['amount'] = $xyid[$i]['yp_total_amount'];
                $sfdetail[$i]['units'] = $xyid[$i]['yp_spec'];
                $sfdetail[$i]['dose'] = '1';
                $sfdetail[$i]['price'] = $xyid[$i]['price'];
                $sfdetail[$i]['costs'] = $sfdetail[$i]['amount'] * $sfdetail[$i]['dose'] * $sfdetail[$i]['price'];
                $sfdetail[$i]['costs'] = number_format($sfdetail[$i]['costs'],2);
            }
        }
        $this -> ajaxReturn($sfdetail,'json');
    }
}