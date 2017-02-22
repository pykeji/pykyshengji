<?php
namespace Home\Controller;
use Think\Controller;
class HuajiaController extends Controller {
    public function huajia(){
    	$br_id = session('id');
    	$jbxx = M('station_p');//病人基本信息
    	$data = $jbxx -> where("br_id = '$br_id'") -> select();
        $sfrq = date('Y-m-d');
        //收费列表信息(审核处方之后)
        if($_POST){
            dump($_POST);
            $arr = array();
            $arr[BILL_CODE] = '';//处方号
            $arr[ITEM_CODE] = $_POST['sf_brname'];//项目代码
            $arr[CLINIC_NUM] = $_POST['sf_blh'];//病人ID
            $arr[xh] = $data[0]['xh'];//挂号序号
            $date = date('Y-m-d H:i:s');
            $arr[CHARGE_DAT] = $date;//收费日期
            $arr[UNIT_PRICE] = '';//单价
            $arr[AMOUNT] = '';//数量
            $arr[UNITS] = '';//单位
            $arr[TOTAL] = '';//金额
            $arr[OPERATOR_CODE] = $_SESSION['wh_userId'];//操作员编码
            $arr[BILL_STATUS] = '';//收费状态
            $arr[SERIAL_NO] = '';//项目收费序号
            $arr[RETURN_DATE] = '';//退费日期
            $arr[INVOICE_NO] = $_POST['sf_pjh'];//发票号
            dump($arr);
        }

        $shouf = M('g_outp_bill_item');//收费信息 票据号
        //生成票据号
        $piaojh = $shouf -> field('invoice_no') -> select();
        foreach ($piaojh as $v) {
            foreach ($v as $value) {
                $qb[] = substr($value, 0,8);
            }
        }
        $count = array_count_values($qb);//计算出现次数
        $date = $count[date('Ymd')];
        if (!empty($date)) {//判断数值在哪个范围
            if ($date < 10){
                $num = $date + 1;
                //规定格式前面加几个0
                $str = "0000".$num; 
            }else if($date >= 10 && $date < 100){
                $num = $date + 1;
                $str = "000".$num; 
            }else if($date >= 100 && $date < 1000){
                $num = $date +1 ;
                $str = "00".$num; 
            }else if($date >= 1000 && $date < 10000){
                $num = $date + 1;
                $str = "0".$num; 
            }
            $piaojh = date('Ymd').$str;
        }else{
            $piaojh = date('Ymd')."00001";
        }
        $pjh[0]['piaojh'] = $piaojh;//设置票据号

        //查询当前病人历史收费情况
        $sfls = $shouf -> distinct(true) ->field('invoice_no') -> where("CLINIC_NUM = '$br_id'") -> select();
        $fph =  $sfls[0][invoice_no];
        //消费总额
        $zjine = $shouf -> where("invoice_no = '$fph'") -> select();
        $czjine = 0;
        $count = count($zjine);
        for($i=0;$i<$count;$i++){
            $czjine = $czjine + $zjine[$i][total];
        }
        $this -> assign('czjine',$czjine);
        $this -> assign('sfls',$sfls);
        $this -> assign('pjh',$pjh);
        $this -> assign('sfrq',$sfrq);
    	$this -> assign('data',$data);
        $this->display();
    }
    public function ajax(){
    	$sfxm = M('p_price_list');//收费项目列表
		$name = $_POST['name'];
    	$sfxmdata = $sfxm -> where("item_name = '$name'") -> select();
    	$this -> ajaxReturn($sfxmdata,'json');
    }
}