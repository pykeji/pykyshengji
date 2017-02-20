<?php
namespace Home\Controller;
use Think\Controller;
class YuyueController extends Controller {
	//预约人数ajax
	public function ajaxrsyy(){
        $date =I('get.date');//获取页面预约日期
        // $b = strtotime($date);
        // $this->ajaxReturn($b);
        $user = M('station_p');
        // 获取数据库预约日期
        $shujuku = $user->where("reserve=2")->field('p_date')->select(); 
        // 转换为一维数组  便利每一个数据
       
        foreach ($shujuku as $v) {
        	foreach ($v as $value) {
        		$a[] .= abs(strtotime($date)-strtotime($value));
        		// $a[] .= $value." ";
        	}
        }
         // 设置当前有多少人预约
        $dangqyrs = 0 ;
        foreach ($a as $val) {
        	if ($val<900) {
        		$dangqyrs++;
        	}
        }
        $this->ajaxReturn($dangqyrs,'json');
	}
	// 患者预约
    public function yuyue(){
      $station = M('station_p');
      // echo 1;die;
      //判断是否是复诊
      $br_id = I('post.br_id');
      // 查出就诊几次
      $pdfuzhen = $station->where("br_id=$br_id")->count();
      // 加一为当前就诊次数
      $dangqingjiuzhengcishu = $pdfuzhen+1;
      // dump($dangqingjiuzhengcishu);die;
      $data = I('post.');//获取数据
      // dump($data);die;
      $data['xh'] = $dangqingjiuzhengcishu;
      // dump($data);die;
      $station->data($data)->add();//添加数据
      $this->redirect('Index/jiezhen');//重定向到接诊区
    }
}