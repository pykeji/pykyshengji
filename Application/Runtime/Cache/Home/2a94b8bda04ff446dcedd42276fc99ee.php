<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>中医健康管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.min.js"></script>
    <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/loader-style.css">
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/signin.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/zySystem/Public/muban/assets/ico/minus.png">
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<!-- Preloader -->
<div id="preloader">
    <div id="status">
        &nbsp;
    </div>
</div>
<div class="container">
    <div class="" id="login-wrapper">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:10%;">
                <div id="logo-login">
                    <center><h1>中医健康管理系统</h1></center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-box">
                    <form role="form" action="<?php echo U('Login/Login');?>" method="post">
                        <div class="form-group">
                            <!--a href="#" class="pull-right label-forgot">Forgot email?</a-->
                            <label for="inputUsernameEmail">用户名</label>
                            <input type="text" id="inputUsernameEmail" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <!--a href="#" class="pull-right label-forgot">Forgot password?</a-->
                            <label for="inputPassword">密码</label>
                            <input type="password" id="inputPassword" class="form-control" name="password" value="">
                        </div>
                        <div>
                        <?php if(isset($msg)){ echo $msg; }else{ echo ''; } ?>
                        </div>
                        <div class="checkbox pull-left">
                        <a href="<?php echo U('index/forget');?>" style="margin-left:-15px">忘记密码</a>
                        </div>
                        <button class="btn btn btn-primary pull-right" type="submit">
                            登 录
                        </button>
                    </form>
                    <a class="forgotLnk" href="index.html"></a>
                    <div class="row-block">
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <h5>
            <!-- Copyright(C)2016 --> pengyukeji.com All Rights Reserved<br/><br/>
            河北鹏宇科技有限公司 版权所有
        </h5>
    </center>
</div>
<!-- 背景 -->
<div id="test1" class="gmap3">
    <!-- <img src="/zySystem/Public/" alt="background"> -->
</div>
<!--  END OF PAPER WRAP -->
<!-- MAIN EFFECT -->
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/preloader.js"></script>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/app.js"></script>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/load.js"></script>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/main.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/map/gmap3.js"></script>

</body>
</html>