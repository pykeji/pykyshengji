<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
  //图像上传
    public function uploadify()
    {
        if (!empty($_FILES)) {
            //图片上传设置
            $config = array(   
                'maxSize'    =>    3145728, 
                'savePath'   =>    '',  
                'saveName'   =>    md5(uniqid()), 
                'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),  
                'autoSub'    =>    true,   
                'subName'    =>    array('date','Ymd'),
            );
<<<<<<< HEAD
=======
            $b = '20'.date('ymd');
>>>>>>> 2c33002989b94e03d184eb00c0203b568881180a
            $upload = new \Think\Upload($config);// 实例化上传类
            $images = $upload->upload();
            $a = $images['Filedata']['savename'];
            $user = M('user-info-dict');
            $id = $_SESSION['wh_userId'];
            $data['userPhoto'] = $a;
<<<<<<< HEAD
            $user->where("id=$id")->save($data);
=======
            $data['photoPath'] = $b;
            $user->where("id=$id")->save($data);
            $_SESSION['photo'] = $a;
>>>>>>> 2c33002989b94e03d184eb00c0203b568881180a
            //判断是否有图
            if($images){
                $info=$images['Filedata']['savepath'].$images['Filedata']['savename'];
                //返回文件地址和名给JS作回调用
                echo $info;
            }
            else{
                //$this->error($upload->getError());//获取失败信息
            }
        }
    }
}