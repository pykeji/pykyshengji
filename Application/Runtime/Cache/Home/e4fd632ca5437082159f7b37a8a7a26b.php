<?php if (!defined('THINK_PATH')) exit();?><!-- <h2>用户id是：<b>
	<?php echo $_SESSION['wh_userId']; ?>
</b></h2><h2>所属机构编码是：<b>
	<?php echo $_SESSION['wh_code']; ?>
</b></h2><h2>职位是：<b>
	<?php echo $zhiwei; ?> -->
    <!-- <?php dump($_SESSION); ?> -->
</b></h2>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="/zySystem/Public/css/bootstrap.css">
<link rel="stylesheet" href="/zySystem/uploadify/uploadify.css">
<style type="text/css">
    #left{
        margin-top:60px;
        margin-left:50px;
        width:35%;
        height:500px;
        float:left;
    }
     #right{
        margin-top:60px;
        width:35%;
        height:500px;
        float:left;
        margin-left:10px;
    }
    .lediv{
        height:45px;
        margin-top:10px;
        font-size:20px;
    }
    .lediv input{
        height:35px;
    }
    .text{
        height:30px;
        margin-top:3px;
        display:block;
    }
</style>
</head>
<body>
            <!-- 信息修改模态框开始 -->
                <div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel2">个人信息修改</h4>
            </div>
            <form action="<?php echo U('User/uploadinfo');?>" method="post">
            <div class="modal-body" id="yscon" style="height:300px;">
              <b>姓　　名：</b><input type="text" value="" id="namein" class="text"><br/>
              <b>联系方式：</b><input type="text" value="" id="phonein" class="text"><br/>
              <b>密　　码：</b><input type="password" value="" id="passin" class="text"><br/>
              <b>再次输入密码：</b><span id="mmxt" style="color:red; display:none;">两次输入密码不同</span><input type="password" class="text" id="passout">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="exit2">关闭</button>
                <button type="button" class="btn btn-primary" id="qrxg" disabled="disabled">确认修改</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div></div>
            <!-- 模态结束 -->

<!-- <?php $day = date('ymd'); ?> -->
   <!--  <img id="img" src="<?php echo '/zySystem/Uploads/'.$_SESSION['wh_patha'].'/'.$_SESSION['wh_photo']; ?>" width="130" height="130" border="0" />
    <input id="file_upload" name="file_upload" type="file" multiple="true" value="" /> -->
    
   <!--  <h1><?php echo $_SESSION['wh_userName'] ?>的个人信息</h1>
    <b>用户姓名：</b><input type="text" value="<?php echo $_SESSION['wh_userName']; ?>"><br/>
    <b>所属机构：</b><input type="text" value="<?php echo $_SESSION['wh_code']; ?>"><br/>
    <b>职　　位：</b><input type="text" value="<?php echo $zhiwei; ?>"><br/>
    <b>联系方式：</b><input type="text" value="<?php echo $phone; ?>"><br/>
    <b>您的头像：</b><img id="img" src="<?php echo '/zySystem/Uploads/'.$_SESSION['wh_patha'].'/'.$_SESSION['wh_photo']; ?>" width="130" height="130" border="0" />  -->
    <center>
    <div id="left">
        <div class="lediv"><?php echo $_SESSION['wh_userName'] ?>的个人信息</div>
        <input type="hidden" value="<?php echo $_SESSION['wh_userId'] ?>" id="hid">
        <div class="lediv"><b>用户姓名：</b><input type="text" value="<?php echo $_SESSION['wh_userName']; ?>" readonly="readonly"></div>
        <div class="lediv"><b>所属机构：</b><input type="text" value="<?php echo $_SESSION['wh_code']; ?>" readonly="readonly"></div>
        <div class="lediv"><b>职　　位：</b><input type="text" value="<?php echo $zhiwei; ?>" readonly="readonly"></div>
        <div class="lediv"><b>联系方式：</b><input type="text" value="<?php echo $phone; ?>" readonly="readonly"></div>
        <br/>
        <div class="lediv"><button class="btn btn-primary btn-lg" id="update" data-toggle='modal' data-target='#myModal2' name=''  type="button">修改个人信息</button></div>
    </div>
    <div id="right">
        <div class="lediv">用户头像</div>
        <img id="img" src="<?php echo '/zySystem/Uploads/'.$_SESSION['wh_patha'].'/'.$_SESSION['wh_photo']; ?>" width="160" height="160" border="0" />
        <br/><br/>
         <input id="file_upload" name="file_upload" type="file" multiple="true" value="" /><br/>
         <button class="btn btn-danger btn-lg" id="mmcz">密码重置</button>
    </div>
    
    </center>
    


    

	<!---->
</body>

<script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/zySystem/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
//上传插件
$(function() {
    $('#file_upload').uploadify({
        'swf'      : '/zySystem/uploadify/uploadify.swf',
        'uploader' : '<?php echo U("News/uploadify");?>',
        'buttonText' : '点击修改',
        'onUploadSuccess' : function(file, data, response) {
            $('#img').attr('src','/zySystem/Uploads/'+ data);
            $('#images').val(data);
        },
    });
});
$('#mmcz').click(function(){
    if(confirm('确定要重置密码吗？')){
        var id = $('#hid').val();
        $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/reset');?>",
            data:{id:id},
            dataType:'json',
            success:function(dd)
            {
                $('#mmcz').html('密码已重置');
                $('#mmcz').attr("disabled", "disabled");
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
    }else{
        return false;
    }
});

    //个人信息修改
    $('#update').click(function(){
        var id = $('#hid').val();
        $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/updateU');?>",
            data:{id:id},
            dataType:'json',
            success:function(dd)
            {
                // alert(item.id+"号："+item.name);
                    $('#namein').val(dd.username);
                    $('#phonein').val(dd.userphone);
                    $('#passin').val(dd.password);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
    });

    //鼠标离开检查两次密码是否相同
    $('#passout').blur(function(){
        var str1 = $('#passin').val();
        var str2 = $('#passout').val();
        if(str1 == str2){
            $('#qrxg').attr("disabled", false);
            $('#mmxt').hide();
        }else{
            $('#qrxg').attr("disabled", "disabled");
            $('#mmxt').show();
        }
    });

    //修改个人信息
    $('#qrxg').click(function(){
        var id = $('#hid').val();
        var name = $('#namein').val();
        var phone = $('#phonein').val();
        var pass = $('#passin').val();

        $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/updateUser');?>",
            data:{id:id,name:name,phone:phone,pass:pass},
            dataType:'json',
            success:function(dd)
            {
               
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
    });
</script>

</html>