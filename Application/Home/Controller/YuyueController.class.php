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
        $data = I('post.');//获取数据
        $station->data($data)->add();//添加数据
        $this->redirect('Index/jiezhen');//重定向到接诊区
		// // 以下为显示预约人数
  //   	// $data = I('post.');//获取数据
  //       // $sp_date =I('post.p_date');//获取页面预约日期
  //       $user = M('station_p');
  //       // 获取数据库预约日期
  //       $shujuku = $user->where("reserve=2")->field('p_date')->select(); 
  //       // 转换为一维数组  便利每一个数据
       
  //       foreach ($shujuku as $v) {
  //       	foreach ($v as $value) {
  //       		$a[] .= abs(strtotime($sp_date)-strtotime($value));
  //       		// $a[] .= $value." ";
  //       	}
  //       }
  //        // 设置当前有多少人预约
  //       $dangqyrs = 0 ;
  //       foreach ($a as $value) {
  //       	if ($value<900) {
  //       		$dangqyrs++;
  //       	}
  //       }
  //       dump($a);die;
    }
}