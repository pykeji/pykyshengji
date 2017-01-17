<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>接诊区_中医健康管理系统</title>
    <link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zysystem/Public/css/jiezhen.css">
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div class="bg">
    <div class="title center">接诊区</div>
    <div class="yuyue">
        <div>
            <!--<img src="/zysystem/Public/img/014.png" alt="图片加载失败！">-->
        </div>
        <div class="yyfont">
            预约病人列表
        </div>
        <div class="yychecked">
            <select name="yydate">
                <option value="today">当日</option>
                <option value="tomorrow">明日</option>
                <option value="afterTomo">后日</option>
                <option value="all">全部</option>
                <option value="lastWeek">上周内未完成就诊</option>
            </select>
        </div>
        <div class="nowdate">
            <span>当前日期：</span>
            <span id="dqrq"></span>
        </div>
    </div>
    <div class="yyinf center">
        <div class="yytab">
            <table border="0" width="100%">
                <tr>
                    <th width="10%">预约日期</th>
                    <th width="5%">姓名</th>
                    <th width="3%">性别</th>
                    <th width="4%">年龄</th>
                    <!--<th width="8%">出生日期</th>-->
                    <!--<th width="10%">身份证号</th>-->
                    <th width="8%">电话</th>
                    <!--<th width="20%">单位</th>-->
                    <!--<th width="10%">传真</th>-->
                    <!--<th width="12%">E-Mail</th>-->
                    <th width="12%">操作</th>
                </tr>
                <tr class="sty1" name="tableSty">
                    <td>2016-11-28 11:03:03</td>
                    <td>阿布</td>
                    <td>男</td>
                    <td>36岁</td>
                    <!--<td>1980-01-01</td>-->
                    <!--<td>130185111111111111</td>-->
                    <td>18333333333</td>
                    <!--<td>河北省石家庄市睿和中心河北鹏宇电子科技有限公司</td>-->
                    <!--<td>86519-85125379</td>-->
                    <!--<td>xmr93213@qq.com</td>-->
                    <td>
                        <span>详细信息</span>
                        <span>就诊</span>
                        <span>修改</span>
                        <span>收费</span>
                    </td>
                </tr>
                <tr class="sty1" name="tableSty">
                    <td>2016-11-28 11:03:03</td>
                    <td>阿布</td>
                    <td>男</td>
                    <td>36岁</td>
                    <td>18333333333</td>
                    <td>
                        <span>详细信息</span>
                        <span>就诊</span>
                        <span>修改</span>
                        <span>收费</span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="yytj">
            <span>共<span id="sickNum">0</span>位病人登记</span>
            <span>当前第1/N页</span>
            <span>上一页</span>
            <span>下一页</span>
        </div>
    </div>
</div>
</body>
</html>
<script src="/zysystem/Public/js/shijian.js"></script>