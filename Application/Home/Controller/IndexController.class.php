<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $a = I('get.aa');
        // var_dump($a);
        if($a == 1){
           $this->assign('msg','<b style="color:red">用户名或密码错误</b>');
           $this->display();
        }elseif($a == 2){
            $this->assign('msg','<b style="color:red">您的账号已登录</b>');
           $this->display();
        }else{
            $this->display();
        }
        
    }
     public function forget(){
        $this->display();
    }
    public function home($rev){
//        $blh=session(id);
//        $xh=session(xh);
//        $peo = M('station_p');//患者信息表
//        if($blh && $peo){
//            $user=$peo->where("br_id=$blh and xh=$xh")->find();
//            $this->assign('age',$user[nl]);
//        }
        $this->assign('rev',$rev);
        $this->display();
    }
    //接诊区
    public function jiezhen(){
        // 法一自己写的附带样式
        $rect = M('station_p');
        $count = $rect->where('jz_flag=1')->count();// 查询满足要求的总记录数 $map表示查询条件
        $page = getpage($count,9);//控制页面显示条数
        $show = $page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        //以上是分页 ， 以下是数据
        $data =  $rect->where('jz_flag=1')->order('p_date')->limit($page->firstRow.','.$page->listRows)->select();//查询数据（未完成就诊的）$Page->firstRow 起始条数 $Page->listRows 获取多少条
        // dump($data);die;
        $this->assign('data',$data);// 赋值模板变量
        $this->display();
        // 法二官方写的不带样式
        // $User = M('station_p'); // 实例化User对象
        // $count      = $User->where('jz_flagjz=1')->count();// 查询满足要求的总记录数
        // $page = getpage($count,5);
        // // $page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        // $show       = $page->show();// 分页显示输出
        // // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        // $data = $User->where('jz_flagjz=1')->order('p_date')->limit($page->firstRow.','.$page->listRows)->select();
        // $this->assign('data',$data);// 赋值数据集
        // $this->assign('page',$show);// 赋值分页输出
        // $this->display(); // 输出模板
    }
    // 接诊区详情 ajax接诊详情参数
    public function jiezhenxiangqajax(){
        $id = I('get.id');
        $user = M('station_p');
        $data = $user->where("br_id={$id}")->select();
       $this->ajaxReturn($data,'json');
    }
    // 接诊区修改 ajax参数
    public function jiezhenxiugaiajax(){
        $id = I('get.id');
        $user = M('station_p');// 实例化Data数据模型
        $data = $user->where("br_id={$id}")->select();
       $this->ajaxReturn($data,'json');
    }
    //执行修改 接诊区
    public function dojiezhenajaxxiugai(){
        $id = I('post.br_id');//修改条件
        $user = I('post.');//修改信息
        $data = M('station_p');// 实例化Data数据模型
        $data->where("br_id={$id}")->save($user);//执行修改
        $this->redirect("Index/jiezhen");//重定向
    }
    //患者登记
    public function dengji(){
        // 判断病例号id是否存在（存在是从查询处跳转过来的）
        $getid =  I('get.id');
        $xh = I('get.xh');
        if (!empty($getid)) {
            $user = M('station_p');// 实例化Data数据模型
            $data = $user->where("br_id={$getid} and xh={$xh}")->select();
            $this->assign('data',$data);//设置编号
            // dump($data);die;
        }else{
            $user = M('station_p');// 实例化Data数据模型
            $br_id = $user->field('br_id')->select();
            foreach ($br_id as $v) {
                foreach ($v as $value) {
                    $qb[]=substr($value, 0,8);
                }
            }
            $a=array_count_values($qb);//计算出现次数
            $b=$a[date('Ymd')];
            if (!empty($b)) {
                //判断数值在哪个范围
                if ($b<10) {
                    $d =$b+1;
                    // 规定格式前面加几个0
                    $c = "0000".$d; 
                    // dump($c);die;
                }else if($b>=10 && $b<100){
                    $d =$b+1;
                    $c = "000".$d; 
                }else if($b>=100 && $b<1000){
                    $d =$b+1;
                    $c = "00".$d; 
                }else if($b>=1000 && $b<10000){
                    $d =$b+1;
                    $c = "0".$d; 
                }
                // $c = $b+1;
                $br_id = date('Ymd').$c;
                // dump($br_id);die;
            }else{
                $br_id = date('Ymd')."00001";
            }
            $data[0]['br_id']=$br_id;
            $this->assign('data',$data);//设置编号
        }
        //拼接错误信息    
        $cwxinxi = I('get.cwxinxi');
        $this->assign('cwxinxi',$cwxinxi);//设置编号
        $this->display();
    }
    //患者保存
    public function hzbc(){
        $ghf = I('post.ghf');
        // dump($ghf);die;
        $cs_date = I('post.cs_date');
        //判断挂号费
        if(empty($ghf)){
            //重定向到登记
            $this->redirect('Index/dengji', array('cwxinxi' => "挂号费未填写"));
        }else{
            //判断出生年月int(1)
            if(empty($cs_date)){
                //重定向到登记
                $this->redirect('Index/dengji', array('cwxinxi' => "出生年月未填写"));
            }else{
                $station = M('station_p');
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
            
    }
    //患者预约
    public function yuyue(){
        //左侧病历号
        $getid =  I('get.id');
        $xh = I('get.xh');
        $user = M('station_p');// 实例化Data数据模型
        if (!empty($getid)) {
            $datazuo = $user->where("br_id={$getid} and xh={$xh}")->select();
            $this->assign('datazuo',$datazuo);//设置编号
            // dump($data);die;
        }else{
            $br_id = $user->field('br_id')->select();
            foreach ($br_id as $v) {
                foreach ($v as $value) {
                    $qb[]=substr($value, 0,8);
                }
            }
            $a=array_count_values($qb);//计算出现次数
            $b=$a[date('Ymd')];
            if (!empty($b)) {
                //判断数值在哪个范围
                if ($b<10) {
                    $d =$b+1;
                    // 规定格式前面加几个0
                    $c = "0000".$d; 
                    // dump($c);die;
                }else if($b>=10 && $b<100){
                    $d =$b+1;
                    $c = "000".$d; 
                }else if($b>=100 && $b<1000){
                    $d =$b+1;
                    $c = "00".$d; 
                }else if($b>=1000 && $b<10000){
                    $d =$b+1;
                    $c = "0".$d; 
                }
                // $c = $b+1;
                $br_id = date('Ymd').$c;
                // dump($br_id);die;
            }else{
                $br_id = date('Ymd')."1";
            }
            $datazuo[0]['br_id']=$br_id;
            
            $this->assign('datazuo',$datazuo);//设置编号
        }
           
        // $this->assign('data',$data);// 赋值数据集
        // 右侧预约情况
        // 获取当前时间
        $yuyuedtime = date("Y-m-d");
        // dump($yuyuedtime);die;
        //获取数据->where("p_date like '". $times."%'")
        $data = $user->where("reserve=2 and p_date like '".$yuyuedtime."%' ")->field('p_date,br_name')->select();
        // dump($data);die;
        //是一个方法 直接调用（把二维数组 以一个字段为条件 升序排列）
        if (! function_exists('list_sort_by'))
        {
            function list_sort_by($list, $field, $sortby = 'asc')
            {
                if (is_array($list))
                {
                    $refer = $resultSet = array();
                    foreach ($list as $i => $data)
                    {
                        $refer[$i] = &$data[$field];
                    }
                    switch ($sortby)
                    {
                        case 'asc': // 正向排序
                            asort($refer);
                            break;
                        case 'desc': // 逆向排序
                            arsort($refer);
                            break;
                        case 'nat': // 自然排序
                            natcasesort($refer);
                            break;
                    }
                    foreach ($refer as $key => $val)
                    {
                        $resultSet[] = &$list[$key];
                    }
                    return $resultSet;
                }
                return false;
            }
        }
        // 调用方法判断（将数组升序）
        $shuju = list_sort_by($data, 'p_date', 'asc');
        // dump($shuju);die;
        $this->assign('data',$shuju);
        $this->display();
    }
    //患者查询
    public function chaxun(){
        //链接数据库
        $rect = M('station_p');
        //第一步判断是否有病历号(病例号是主键唯一的)
        $br_id = I('post.br_id');//获取病例号
        if(!empty($br_id)){
            $data = $rect->where("br_id='{$br_id}'")->select();
            // dump($data);die;
            $this->assign('data',$data);
            $this->display();
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
                            $a[]=$k;
                            $b[]=$v;
                        }
                    }
                } 
            }
            //把值存在的数据 整合成一个数组 （建对应值的一个数组）
            $com=array_combine($a,$b);
            // dump($com);
             //病例号不存在   获取时间拼接where条件
            $p_datekai = I('post.p_datekai');//获取开始日期
            $p_datezhong = I('post.p_datezhong');//获取终止日期
            //拼接最后条件
            $com['p_date'] =array('between',"$p_datekai 00:00:00,$p_datezhong 23:59:59");
            // dump($com);
                $data = $rect->where($com)->select();
                $this->assign('data',$data);
                $this->display();
        }  
    }
    //查询详细信息
    public function chaxunxiangxi(){
        $id = I('get.id');
        $user = M('station_p');
        $data = $user->where("br_id={$id}")->select();
        $this->ajaxReturn($data,'json');
    }
    //健康档案
    public function jiankang(){
        //接受从患者登记处传值（post方式）
        $station = M('station_p');//链接数据库
        if (IS_POST){
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
//            $user = M('station_p'); //二次链接数据库
//            $data = $user->where("br_id={$br_id} and xh={$dangqingjiuzhengcishu}")->select();
            // dump($xh);die;
//            $this->assign('data',$data);// 模板变量赋值
            session(id,$br_id);//设置病历号存入session
            session(xh,$dangqingjiuzhengcishu);//设置序号存入session
            // dump($data);die;
        //接受接诊区传值(get方式)    
        }else if(IS_GET){
            // 判断get.id是否存在
            if (isset($_GET['id'])){
                $id = I('get.id');//获取条件
                $xh = I('get.xh');
//                $user = M('station_p');
//                $data = $station->where("br_id={$id} and xh={$xh}")->select();
//                $this->assign('data',$data);// 模板变量赋值
                session(id,$id);//设置编号存入session
                session(xh,$xh);//设置编号存入session
            }
        }
        $blh=session(id);
        $xh=session(xh);
        $userInf=$station->where("br_id=$blh and xh=$xh")->select();//查询出患者信息
//        将时间中的时分秒去掉
        $userInf[0]['jz_date']=substr($userInf[0]['jz_date'],0,10);
        $userInf[0]['cs_date']=substr($userInf[0]['cs_date'],0,10);
        $this->assign('data',$userInf);//将患者信息传递到前端界面
        // $this->assign('data',$data);// 模板变量赋值
        $this->display();
    }
//    体质辨识答题界面
    public function tizhi(){
        $blh=session(id);
        $xh=session(xh);
        //读取界面
        $tzti=M('tz_question');
        $ti=$tzti->select();//题目信息检索
        //题目数组切割成为3*11
        $ti1=array_slice($ti,0,11);
        $ti2=array_slice($ti,11,11);
        $ti3=array_slice($ti,22,11);
        $this->assign('ti1',$ti1);//1到11题序号
        $this->assign('ti2',$ti2);//12到22题序号
        $this->assign('ti3',$ti3);//23到33题序号
        $this->assign('ti',$ti);
        //界面读取结束
        //判断保存按钮是否能用
        $this->assign(flag,session(flag));
        $this->assign(save,session(save));
        $tzbs=I("get.");
        //判断患者是否登记
        if($blh && $xh){
            $user=M('tz_jbxx');//患者的答题记录表
            $jieguo=M('tz_jieguo');//结果表
            $userInf=$user->where('tz_jbxx.id='.$xh.' and tz_jbxx.bianhao='.$blh)->find();//患者的选项信息
            $data=$jieguo->join('station_p on tz_jieguo.id=station_p.xh and tz_jieguo.bianhao=station_p.br_id')->where('tz_jieguo.id='.$xh.' and tz_jieguo.bianhao='.$blh)->find();//患者的个人信息和答题结果
//            print_r($data);
//            判断患者是否保存答题信息
            if($userInf && $data){
//                日期去掉时分秒
                $data['jz_date']=substr($data['jz_date'],0,10);
                $this->assign(res1,$data);//患者的答题结果
                $this->assign(userCheckedInf,$userInf);//患者的个人信息和答案信息
                //体质辨识结果生成部分
                $tz=array();
                if($data[tzjg] != '否'){
                    $tz[] = $data[tzname]."-".$data[tzjg];
                }
                if($data[tzjg1] != '否'){
                    $tz[] = $data[tzname1]."-".$data[tzjg1];
                }
                if($data[tzjg2] != '否'){
                    $tz[] = $data[tzname2]."-".$data[tzjg2];
                }
                if($data[tzjg3] != '否'){
                    $tz[] = $data[tzname3]."-".$data[tzjg3];
                }
                if($data[tzjg4] != '否'){
                    $tz[] = $data[tzname4]."-".$data[tzjg4];
                }
                if($data[tzjg5] != '否'){
                    $tz[] = $data[tzname5]."-".$data[tzjg5];
                }
                if($data[tzjg6] != '否'){
                    $tz[] = $data[tzname6]."-".$data[tzjg6];
                }
                if($data[tzjg7] != '否'){
                    $tz[] = $data[tzname7]."-".$data[tzjg7];
                }
                if($data[tzjg8] != '否'){
                    $tz[] = $data[tzname8]."-".$data[tzjg8];
                }
                //$tz结果内容
                $this -> assign('baoj',$tz);
                $this->display();
            }else{
                //将传过来的数据分成两个数组
                $res1=array_slice($tzbs,0,36);
                $res2=array_slice($tzbs,36);
//              print_r($tzbs);
                $this->assign('res1',$res1);
                $this->assign('baoj',$res2);
                $this->display();
            }
        }else{
            $this->display();
        }

    }

    /**
     * 答题完成生成相应的答题结果并保存相应的信息
     *$data患者的相关信息以及对应的九种体制信息
     * $tz患者对应的体制类型
     *session(userXXInf)患者的选项信息
     * session(res1)患者的九种体制信息（$data截取获得）
     * session(tzbsInf)患者信息，九种体制信息，患者对应的体制信息（$data与$tz合并获得）
     * session(flag)=1已提交状态；=0未提交状态
     */
    public function tizhiSub(){
        $blh=isset($_SESSION['id'])?$_SESSION['id']:"";
        $xh=isset($_SESSION['xh'])?$_SESSION['xh']:"";
        $user=M('station_p');
//        根据序号查出患者信息
        $userInf=$user->where('xh='.$xh.' and br_id='.$blh)->find();
        //体质辨识算法开始
        //气虚质
        $qxz = $_POST['xx2']+$_POST['xx3']+$_POST['xx4']+$_POST['xx14'];
        //阳虚质
        $yangxz = $_POST['xx11']+$_POST['xx12']+$_POST['xx13']+$_POST['xx29'];
        //阴虚质
        $yinxz = $_POST['xx10']+$_POST['xx21']+$_POST['xx26']+$_POST['xx31'];
        //痰湿质
        $tsz = $_POST['xx9']+$_POST['xx16']+$_POST['xx28']+$_POST['xx32'];
        //湿热质
        $srz = $_POST['xx23']+$_POST['xx25']+$_POST['xx27']+$_POST['xx30'];
        //血瘀质
        $xyz = $_POST['xx19']+$_POST['xx22']+$_POST['xx24']+$_POST['xx33'];
        //气郁质
        $qyz = $_POST['xx5']+$_POST['xx6']+$_POST['xx7']+$_POST['xx8'];
        //特禀质
        $tbz = $_POST['xx15']+$_POST['xx17']+$_POST['xx18']+$_POST['xx20'];

        //保存结果
        $data = array();
        $data['id'] = $xh;
        $data['bianhao'] = $blh;
        $data['br_name'] = $userInf['br_name'];
        $data['xb'] =$userInf['xb'];
//        $data['birth'] = $userInf['cs_date'];
        $data['nl'] = $userInf['nl'];
        $data['pass'] = $userInf['pass'];
        $data['tel'] = $userInf['tel'];
        $data['dw'] = $userInf['dw'];
        $data['jz_date']=substr($userInf['jz_date'],0,10);
//        $data['date'] = substr($blh,0,4)."-".substr($blh,4,2)."-".substr($blh,6,2);
        //气虚质
        if($qxz<=8){$data['tzname'] = '气虚质'; $data['tzfs'] = $qxz; $data['tzjg'] = '否';}
        if($qxz>=9 && $qxz<=10){$data['tzname'] = '气虚质'; $data['tzfs'] = $qxz; $data['tzjg'] = '倾向是';}
        if($qxz>=11){$data['tzname'] = '气虚质'; $data['tzfs'] = $qxz; $data['tzjg'] = '是';}
        //阳虚质
        if($yangxz<=8){$data['tzname1'] = '阳虚质'; $data['tzfs1'] = $yangxz; $data['tzjg1'] = '否';}
        if($yangxz>=9 && $yangxz<=10){$data['tzname1'] = '阳虚质'; $data['tzfs1'] = $yangxz; $data['tzjg1'] = '倾向是';}
        if($yangxz>=11){$data['tzname1'] = '阳虚质'; $data['tzfs1'] = $yangxz; $data['tzjg1'] = '是';}
        //阴虚质
        if($yinxz<=8){$data['tzname2'] = '阴虚质'; $data['tzfs2'] = $yinxz; $data['tzjg2'] = '否';}
        if($yinxz>=9 && $yinxz<=10){$data['tzname2'] = '阴虚质'; $data['tzfs2'] = $yinxz; $data['tzjg2'] = '倾向是';}
        if($yinxz>=11){$data['tzname2'] = '阴虚质'; $data['tzfs2'] = $yinxz; $data['tzjg2'] = '是';}
        //痰湿质
        if($tsz<=8){$data['tzname3'] = '痰湿质'; $data['tzfs3'] = $tsz; $data['tzjg3'] = '否';}
        if($tsz>=9 && $tsz<=10){$data['tzname3'] = '痰湿质'; $data['tzfs3'] = $tsz; $data['tzjg3'] = '倾向是';}
        if($tsz>=11){$data['tzname3'] = '痰湿质'; $data['tzfs3'] = $tsz; $data['tzjg3'] = '是';}
        //湿热质
        if($srz<=8){$data['tzname4'] = '湿热质'; $data['tzfs4'] = $srz; $data['tzjg4'] = '否';}
        if($srz>=9 && $srz<=10){$data['tzname4'] = '湿热质'; $data['tzfs4'] = $srz; $data['tzjg4'] = '倾向是';}
        if($srz>=11){$data['tzname4'] = '湿热质'; $data['tzfs4'] = $srz; $data['tzjg4'] = '是';}
        //血瘀质
        if($xyz<=8){$data['tzname5'] = '血瘀质'; $data['tzfs5'] = $xyz; $data['tzjg5'] = '否';}
        if($xyz>=9 && $xyz<=10){$data['tzname5'] = '血瘀质'; $data['tzfs5'] = $xyz; $data['tzjg5'] = '倾向是';}
        if($xyz>=11){$data['tzname5'] = '血瘀质'; $data['tzfs5'] = $xyz; $data['tzjg5'] = '是';}
        //气郁质
        if($qyz<=8){$data['tzname6'] = '气郁质'; $data['tzfs6'] = $qyz; $data['tzjg6'] = '否';}
        if($qyz>=9 && $qyz<=10){$data['tzname6'] = '气郁质'; $data['tzfs6'] = $qyz; $data['tzjg6'] = '倾向是';}
        if($qyz>=11){$data['tzname6'] = '气郁质'; $data['tzfs6'] = $qyz; $data['tzjg6'] = '是';}
        //特禀质
        if($tbz<=8){$data['tzname7'] = '特禀质'; $data['tzfs7'] = $tbz; $data['tzjg7'] = '否';}
        if($tbz>=9 && $tbz<=10){$data['tzname7'] = '特禀质'; $data['tzfs7'] = $tbz; $data['tzjg7'] = '倾向是';}
        if($tbz>=11){$data['tzname7'] = '特禀质'; $data['tzfs7'] = $tbz; $data['tzjg7'] = '是';}
        //反向计分
        //平和质
        if($_POST['xx2'] == 1){
            $_POST['xx2'] = 5;
        }else if($_POST['xx2'] == 2){
            $_POST['xx2'] = 4;
        }else if($_POST['xx2'] == 4){
            $_POST['xx2'] = 2;
        }else if($_POST['xx2'] == 5){
            $_POST['xx2'] = 1;
        }

        if($_POST['xx4'] == 1){
            $_POST['xx4'] = 5;
        }else if($_POST['xx4'] == 2){
            $_POST['xx4'] = 4;
        }else if($_POST['xx4'] == 4){
            $_POST['xx4'] = 2;
        }else if($_POST['xx4'] == 5){
            $_POST['xx4'] = 1;
        }

        if($_POST['xx5'] == 1){
            $_POST['xx5'] = 5;
        }else if($_POST['xx5'] == 2){
            $_POST['xx5'] = 4;
        }else if($_POST['xx5'] == 4){
            $_POST['xx5'] = 2;
        }else if($_POST['xx5'] == 5){
            $_POST['xx5'] = 1;
        }

        if($_POST['xx13'] == 1){
            $_POST['xx13'] = 5;
        }else if($_POST['xx13'] == 2){
            $_POST['xx13'] = 4;
        }else if($_POST['xx13'] == 4){
            $_POST['xx13'] = 2;
        }else if($_POST['xx13'] == 5){
            $_POST['xx13'] = 1;
        }

        $phz = $_POST['xx1']+$_POST['xx2']+$_POST['xx4']+$_POST['xx5']+$_POST['xx13'];
        if($phz>=17 && $qxz<=10 && $yangxz<=10 && $yinxz<=10 && $tsz<=10 && $srz<=10 && $xyz<=10 && $qyz<=10 && $tbz<=10){
            if($phz>=17 && $qxz<=8 && $yangxz<=8 && $yinxz<=8 && $tsz<=8 && $srz<=8 && $xyz<=8 && $qyz<=8 && $tbz<=8){
                $data['tzname8'] = '平和质'; $data['tzfs8'] = $phz; $data['tzjg8'] = '是';
            }else{
                $data['tzname8'] = '平和质'; $data['tzfs8'] = $phz; $data['tzjg8'] = '基本是';
            }
        }else{
            $data['tzname8'] = '平和质'; $data['tzfs8'] = $phz; $data['tzjg8'] = '否';
        }
        //体质辨识算法结束
        session(userXXInf,$_POST);//保存患者选项信息
        //$data患者的相关信息以及对应的九种体制信息
        $res1=array_slice($data,9,27);
        session(res1,$res1);//保存患者的答题结果（九种体质类型信息）
//        体质辨识结果生成部分
        $tz=array();
        if($data[tzjg] != '否'){
            $tz[] = $data[tzname]."-".$data[tzjg];
        }
        if($data[tzjg1] != '否'){
            $tz[] = $data[tzname1]."-".$data[tzjg1];
        }
        if($data[tzjg2] != '否'){
            $tz[] = $data[tzname2]."-".$data[tzjg2];
        }
        if($data[tzjg3] != '否'){
            $tz[] = $data[tzname3]."-".$data[tzjg3];
        }
        if($data[tzjg4] != '否'){
            $tz[] = $data[tzname4]."-".$data[tzjg4];
        }
        if($data[tzjg5] != '否'){
            $tz[] = $data[tzname5]."-".$data[tzjg5];
        }
        if($data[tzjg6] != '否'){
            $tz[] = $data[tzname6]."-".$data[tzjg6];
        }
        if($data[tzjg7] != '否'){
            $tz[] = $data[tzname7]."-".$data[tzjg7];
        }
        if($data[tzjg8] != '否'){
            $tz[] = $data[tzname8]."-".$data[tzjg8];
        }
//      $tz结果内容（患者对应的体制类型）
        $this -> assign('baoj',$tz);
        $tzbs=array_merge_recursive($data,$tz);
        session(tzbsInf,$tzbs);
        session(flag,1);
        $this->redirect('Index/tizhi',$tzbs);
    }
//    体质辨识提交ajax
    public function tizhiCheckedAjax(){
        $blh=session(id);
        $xh=session(xh);
//      判断能保存数据
        $flag=I('post.flag');
        session(flag,$flag);
        if($blh&&$xh){
//          可以继续答题
            $a=11;
            $this->ajaxReturn($a,'json');
        }else{
//          必须登记后才能进行答题
            $b=22;
            $this->ajaxReturn($b,'json');
        }
    }

    /**
     * 体质辨识结果存到数据库中
     * 如果没有该患者的记录，直接插入数据
     * 如果存在该患者的记录，询问是否要覆盖
     */
    public function tizhiSave(){
        $userXXInf=session(userXXInf);//患者选项信息
        $res1=session(res1);//患者体制信息
        $data = array();
        $data['id']=session(xh);
        $data['bianhao']=session(id);
        //平和质答题信息反向转换
        if($userXXInf['xx2'] == 1){
            $userXXInf['xx2'] = 5;
        }else if($userXXInf['xx2'] == 2){
            $userXXInf['xx2'] = 4;
        }else if($userXXInf['xx2'] == 4){
            $userXXInf['xx2'] = 2;
        }else if($userXXInf['xx2'] == 5){
            $userXXInf['xx2'] = 1;
        }
        if($userXXInf['xx4'] == 1){
            $userXXInf['xx4'] = 5;
        }else if($userXXInf['xx4'] == 2){
            $userXXInf['xx4'] = 4;
        }else if($userXXInf['xx4'] == 4){
            $userXXInf['xx4'] = 2;
        }else if($userXXInf['xx4'] == 5){
            $userXXInf['xx4'] = 1;
        }
        if($userXXInf['xx5'] == 1){
            $userXXInf['xx5'] = 5;
        }else if($userXXInf['xx5'] == 2){
            $userXXInf['xx5'] = 4;
        }else if($userXXInf['xx5'] == 4){
            $userXXInf['xx5'] = 2;
        }else if($userXXInf['xx5'] == 5){
            $userXXInf['xx5'] = 1;
        }
        if($userXXInf['xx13'] == 1){
            $userXXInf['xx13'] = 5;
        }else if($userXXInf['xx13'] == 2){
            $userXXInf['xx13'] = 4;
        }else if($userXXInf['xx13'] == 4){
            $userXXInf['xx13'] = 2;
        }else if($userXXInf['xx13'] == 5){
            $userXXInf['xx13'] = 1;
        }
        //平和质答题信息反向转换完毕
//      数组组合 $data患者病历号和序号 $res1患者的
        $userInf=array_merge($data,$userXXInf);
        $res=array_merge($data,$res1);
        $jbxx=M('tz_jbxx');  //存放患者选项信息的表
        $jieguo=M('tz_jieguo');  //存放答题结果信息表
        //根据序号和病历号查询病人的相关记录
        $userInf1=$jbxx->where("id=".$data['id']." and bianhao=".$data['bianhao'])->select();
        $jieguoInf1=$jieguo->where("id=".$data['id']." and bianhao=".$data['bianhao'])->select();
        //如果存在相关记录禁止插入，只能修改或X
        if($userInf1&&$jieguoInf1){
            $upUserInf=$jbxx->save($userInf);
            $upJG=$jieguo->save($jieguoInf1);
            if($upUserInf || $upJG){
                $this->success('更新成功！',U('Index/tizhi'),3);
            }else{
                $this->error('更新失败！',U('Index/tizhi'),3);
            }
        }else{
            session(save,1);
//          如果不存在相关记录则可以添加
            $addUserInf=$jbxx->add($userInf);
            $addJG=$jieguo->add($res);
            if($addUserInf && $addJG){
                $this->success('保存成功！',U('Index/tizhi'),3);
            }else{
                $this->error('保存失败！',U('Index/tizhi'),3);
            }
        }

    }
    public function saveAsTizhi(){
        $tzbs=session(tzbsInf);
        $res1=array_slice($tzbs,0,36);
        $res2=array_slice($tzbs,36);
        $this->assign('res1',$res1);
        $this->assign('baoj',$res2);
        $this->display();
    }
//    中医调养
    public function tiaoyang(){
        $this->display();
    }
    public function saveAsTy1(){
        $this->display();
    }
    public function saveAsTy2(){
        $this->display();
    }
    public function saveAsTy3(){
        $this->display();
    }
}