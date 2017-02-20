<?php
namespace Home\Controller;
use Think\Controller;
class ChaxunController extends Controller {
    //收费综合查询
    public function sfzonghe(){
        if (IS_GET) {
            $user = M('user-info-dict');
            $data = $user->select();
            // dump($data);die;
            $this->assign('data',$data);
        }else if (IS_POST) {
            $invoice_no  = I('post.invoice_no');//获取页面以post方式传递的发票号
            $clinic_num  = I('post.clinic_num');//获取页面以post方式传递的病历号
            $br_name = I('post.br_name');//获取页面以post方式传递的姓名
            // 判断发票号是否存在(发票号为主键)
            if(!empty($invoice_no)){
                // dump($invoice_no);die;
                $user = M('g_outp_bill_item');
                $dodata = $user->join('station_p ON station_p.br_id=g_outp_bill_item.clinic_num')->where("g_outp_bill_item.invoice_no=$invoice_no")->select();
                //查询的条件带到页面 
                // dump($invoice_no);die;
                $chaxuntiaojian['invoice_no'] = $invoice_no;
                // dump($chaxuntiaojian);die;         
                $this->assign("chaxuntiaojian",$chaxuntiaojian);
                $this->assign("dodata",$dodata);
                // 判断病历号是否存在
            }else if (!empty($clinic_num)) {
                $user = M('g_outp_bill_item');
                $dodata = $user->join('station_p ON station_p.br_id=g_outp_bill_item.clinic_num')->where("g_outp_bill_item.clinic_num=$clinic_num")->select();
                // dump($dodata);die;
                $this->assign("dodata",$dodata);
                //判断病人姓名是否存在
            }else if (!empty($br_name)) {
                $user = M('g_outp_bill_item');
                $dodata = $user->join('station_p ON station_p.br_id=g_outp_bill_item.clinic_num')->where("station_p.br_name='$br_name'")->select();
                // dump($dodata);die;
                $this->assign("dodata",$dodata);
                // 当病历号，发票号，姓名都不存在时
            }else{
                // 获取其他信息 拼接where条件
                $suoyoutj = I('post.');
                // var_dump($suoyoutj);
                foreach ($suoyoutj as $k => $v) {
                    //当键值等于开始时间 不算入where条件内
                    if($k !="p_datekai" ){
                        //当键值等于终止时间 不算入where条件内
                        if($k!="p_datezhong"){
                            //判断值不为空
                            if(!empty($v)){
                                $a[]='g_outp_bill_item.'.$k;
                                $b[]=$v;
                            }
                        }
                    } 
                }
                //把值存在的数据 整合成一个数组 （建对应值的一个数组）
                $com=array_combine($a,$b);
                 //  获取时间拼接where条件
                $p_datekai = I('post.p_datekai');//获取开始日期
                $p_datezhong = I('post.p_datezhong');//获取终止日期
                //拼接最后条件
                $com['g_outp_bill_item.charge_date'] =array('between',"$p_datekai 00:00:00,$p_datezhong 23:59:59");
                // dump($com);die;
                $user = M('g_outp_bill_item');
                $dodata = $user->join('station_p ON station_p.br_id=g_outp_bill_item.clinic_num')->where($com)->select();
                // dump($dodata);die;
                $this->assign('dodata',$dodata);
            }  
            //当有查询条件（post）查询后 也要进行一次传值
            $user = M('user-info-dict');
            $data = $user->select();
            // dump($data);die;
            $this->assign('data',$data);
        }
        $this->display();
    }
    public function fyhuizong(){
        $this->display();
    }
    public function yptongji(){
        $this->display();
    }
    public function blchaxun(){
        $this->display();
    }
    public function zyzzchaxun(){
        $this->display();
    }
    public function xyzzchaxun(){
        $this->display();
    }
}