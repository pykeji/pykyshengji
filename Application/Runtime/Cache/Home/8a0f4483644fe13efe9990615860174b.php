<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>患者预约</title>
    <link rel="stylesheet" href="/zysystem1/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zysystem1/Public/css/yuyue.css">
    <script type="text/javascript" src="/zysystem1/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zysystem1/Public/muban/assets/js/bootstrap.js"></script>
    <script src="/zysystem1/Public/js/jeDate/jedate.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div class="bg">
    <div class="title">患者预约</div>
    <div class="content center">
        <div style="background-color:#d7d715;border-radius:10px 10px 0px 0px">
            <div class="title2 center">
                <div class="titLeft">
                    <div>
                        <img src="/zysystem1/Public/img/reg.png" alt="图片加载失败！">
                    </div>
                    <div class="modfont">
                        患者基本信息
                    </div>
                </div>
                <div class="titRight">
                    <div>
                        <img src="/zysystem1/Public/img/037.png" alt="图片加载失败！">
                    </div>
                    <div class="modfont">
                        当天已预约情况
                    </div>
                </div>
            </div>
        </div>
        <div class="inf center">
            <div class="bodyLeft">
                <table border="0" class="mbt">
                    <tr>
                        <td width="15%">病历号：</td>
                        <td width="35%"><input type="text" readonly="readonly"></td>
                        <td width="15%"></td>
                        <td width="35%"></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" id="userName2"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="sex2" checked="checked"><span>男</span></label>
                            <label><input type="radio" name="sex2"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text"></td>
                        <td>出生年月：</td>
                        <td><input type="text" placeholder="请选择日期！" id="datebut" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td><input type="text"></td>
                        <td>电话：</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>传真：</td>
                        <td><input type="text"></td>
                        <td>E-Mail：</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input type="text"></td>
                        <td>传真：</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><textarea name="comp" id="comp" class="lontext"></textarea></td>
                    </tr>
                    <tr>
                        <td>预约日期：</td>
                        <td><input type="text" class="yyrq"></td>
                        <td colspan="2">注：本日期是一个时间段，前后15分钟</td>
                    </tr>
                </table>
            </div>
            <div class="bodyRight">
                <div class="brtop">
                    <table border="0" class="rtable">
                        <tr>
                            <td width="40%">预约人姓名</td>
                            <td width="60%">预约时间</td>
                        </tr>
                    </table>
                </div>
                <div class="brbottom">
                    <span>该时间段内：</span><span>没有病人预约</span>
                </div>
            </div>
        </div>
        <div class="but">
            <div class="butt">
                <button type="button" class="btn btn-warning">退出</button>
            </div>
            <div class="butt">
                <button type="button" class="btn btn-warning">预约</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jeDate.skin('gray');
</script>
</body>
</html>
<script src="/zysystem1/Public/js/shijian.js"></script>