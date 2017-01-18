<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>接诊区_中医健康管理系统</title>
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zySystem/Public/css/jiezhen.css">
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div class="bg">
    <div class="title center">接诊区</div>
    <div class="yuyue">
        <div>
            <!--<img src="/zySystem/Public/img/014.png" alt="图片加载失败！">-->
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
                        <span data-toggle="modal" data-target="#myModal">详细信息</span>
                        <span>就诊</span>
                        <span data-toggle="modal" data-target="#myModal2">修改</span>
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
                        <span data-toggle="modal" data-target="#myModal">详细信息</span>
                        <span>就诊</span>
                        <span data-toggle="modal" data-target="#myModal2">修改</span>
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
<!--患者详细信息模态框-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">患者详细信息</h4>
            </div>
            <div class="modal-body">
                <table border="0" class="mbt">
                    <tr>
                        <td>病历号：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="sex" checked="checked" disabled="disabled"><span>男</span></label>
                            <label><input type="radio" name="sex" disabled="disabled"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>出生年月：</td>
                        <td><input type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td colspan="3"><input type="text" class="lontext" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><input type="text" class="lontext" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>电话：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>E-Mail：</td>
                        <td><input type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>传真：</td>
                        <td><input type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>预约日期：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <!--<button type="button" class="btn btn-primary">提交更改</button>-->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--患者信息修改模态框-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel2">患者信息修改</h4>
            </div>
            <div class="modal-body">
                <table border="0" class="mbt">
                    <tr>
                        <td>病历号：</td>
                        <td><input type="text"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="sex1"><span>男</span></label>
                            <label><input type="radio" name="sex1"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text"></td>
                        <td>出生年月：</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td colspan="3"><input type="text" class="lontext"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><input type="text" class="lontext"></td>
                    </tr>
                    <tr>
                        <td>电话：</td>
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
                        <td>预约日期：</td>
                        <td><input type="text"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary">提交更改</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
</body>
</html>
<script src="/zySystem/Public/js/shijian.js"></script>
<script src="/zySystem/Public/js/tr.js"></script>