<?php
namespace Home\Controller;
use Think\Controller;
class JianKangAjaxController extends Controller {
//    既往史
      public function jws(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=1 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=1')->field('name')->select();
            $this->ajaxReturn($list);
        }
      }
//    传染病史
    public function crbs(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=2 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=2')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    过敏史
    public function gms(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=3 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=3')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    忘神
    public function wangshen(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=4 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=4')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    忘色
    public function wangse(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=5 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=5')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    体态
    public function titai(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=6 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=6')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    体形
    public function tixing(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=7 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=7')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    睡眠质量
    public function shuimianzl(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=8 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=8')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    睡眠时间
    public function shuimiansj(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=9 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=9')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//食欲
    public function shiyu(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=10 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=10')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//口味
    public function kouwei(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=11 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=11')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    大便便次
    public function dbbc(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=12 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=12')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    大便便质
    public function dbbz(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=13 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=13')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    小便便次
    public function xbbc(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=14 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=14')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    小便便色
    public function xbbs(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=15 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=15')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    性情
    public function xingqing(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=16 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=16')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    性格
    public function xingge(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=17 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=17')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    舌色
    public function shezhen(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=18 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=18')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    舌体
    public function sheti(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=19 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=19')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    动态
    public function dongtai(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=20 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=20')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    苔质
    public function taizhi(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=21 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=21')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    苔色
    public function taise(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=22 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=22')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//    脉诊
    public function maizhen(){
        $val=I('post.value');
        $jkda=M("jkda_bl");
        if($val){
            $list=$jkda->where("typeId=23 and (name like '%".$val."%' or pym like '%".$val."%')")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->where('typeId=23')->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//中医诊断
    public function zhongyizd(){
        $val=I('post.value');
        $jkda=M("xy_name");
        if($val){
            $list=$jkda->where("name like '%".$val."%' or spell like '%".$val."%'")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
//西医诊断
    public function xiyizd(){
        $val=I('post.value');
        $jkda=M("xy_name");
        if($val){
            $list=$jkda->where("name like '%".$val."%' or spell like '%".$val."%'")->field('name')->select();
            $this->ajaxReturn($list);
        }else{
            $list=$jkda->field('name')->select();
            $this->ajaxReturn($list);
        }
    }
}