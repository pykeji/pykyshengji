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
<body>
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
        <form action="#" method="post">
            <div class="inf center">
                <table border="0" class="mbt center">
                    <tr>
                        <td width="15%">病历号：</td>
                        <td width="35%"><input type="text" readonly="readonly" id="blNum"></td>
                        <td width="15%"></td>
                        <td width="35%"></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" id="userName1"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="sex1" checked="checked"><span>男</span></label>
                            <label><input type="radio" name="sex1"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text" id="age1"></td>
                        <td>出生年月：</td>
                        <td><input type="text" placeholder="请选择时间！" id="datebut" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td><input type="text" id="idNum1"></td>
                        <td>电话：</td>
                        <td><input type="text" id="phone1"></td>
                    </tr>
                    <tr>
                        <td>传真：</td>
                        <td><input type="text" id="chuanzhen1"></td>
                        <td>E-Mail：</td>
                        <td><input type="text" id="mail1"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input type="text"></td>
                        <td width="15%">预约日期：</td>
                        <td width="35%"><input type="text" class="yyrq" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><textarea name="comp" id="comp1"class="lontext"></textarea></td>
                    </tr>
                </table>
            </div>
        </form>
        <div class="but">
            <div class="butt">
                <button type="button" class="btn btn-warning first">保存</button>
            </div>
            <div class="butt">
                <button type="button" class="btn btn-warning last">就诊</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jeDate.skin('gray');
</script>
</body>
</html>
<script src="/zySystem/Public/js/shijian.js"></script>