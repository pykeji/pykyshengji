<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>患者登记</title>
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zySystem/Public/css/dengji.css">
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
    <script src="/zySystem/Public/js/jeDate/jedate.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div class="bg">
    <div class="title">患者登记</div>
    <div class="content center">
        <div style="background-color:#d7d715;border-radius:10px 10px 0px 0px">
            <div class="title2 center">
                <div>
                    <img src="/zySystem/Public/img/reg.png" alt="图片加载失败！">
                </div>
                <div class="djfont">
                    患者基本信息
                </div>
                <div class="djdate">
                    <span>日期：</span>
                    <span class="djrq"></span>
                </div>
            </div>
        </div>
        <form action="<?php echo U('Index/jiankang');?>" method="post">
            <div class="inf center">
                <table border="0" class="mbt center">
                    <tr>
                        <td width="15%">病历号：</td>
                        <td width="35%"><input type="text" value="<?php echo (session('id')); ?>" name="br_id" readonly="readonly" id="blNum"></td>
                        <td width="15%"></td>
                        <td width="35%"></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" name="br_name" id="userName1"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="xb" value="男" checked="checked"><span>男</span></label>
                            <label><input type="radio" name="xb" value="女"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text" name="nl" id="age1"></td>
                        <td>出生年月：</td>
                        <td><input type="text" name="cs_date" placeholder="请选择时间！" id="datebut" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td><input type="text" name="pass" id="idNum1"></td>
                        <td>电话：</td>
                        <td><input type="text" name="tel" id="phone1"></td>
                    </tr>
                    <tr>
                        <td>传真：</td>
                        <td><input type="text" name="fax" id="chuanzhen1"></td>
                        <td>E-Mail：</td>
                        <td><input type="text" name="e_mail" id="mail1"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input type="text" name="ghf"></td>
                        <td width="15%">预约日期：</td>
                        <td width="35%"><input type="text" name="P_date" class="yyrq" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><textarea name="dw" id="comp1"class="lontext"></textarea></td>
                    </tr>
                    <!-- 就诊时间 -->
                    <input type="hidden"  name="jz_date" class="yyrq">
                </table>
            </div>
        <div class="but">
            <div class="butt">
                <!-- 通过js使form地址改变 -->
                <input type="button" id="jsPreservation" class="btn btn-warning first" value="保存">
                <!-- <button type="button" class="btn btn-warning first">保存</button> -->
            </div>
            <div class="butt">
                <input type="submit" class="btn btn-warning last" value="就诊" >
                <!-- <button type="button" class="btn btn-warning last">就诊</button> -->
            </div>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    jeDate.skin('gray');
</script>
</body>
</html>
<script type="text/javascript">
    $("#jsPreservation").click(function(){
        $("form").attr("action", "<?php echo U('Index/hzbc');?>" ).submit();

    });
    // var jsPreservation=document.getElementById('jsPreservation');

</script>
<script src="/zySystem/Public/js/shijian.js"></script>