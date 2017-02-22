<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>健康档案</title>
    <link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zysystem/Public/css/jkda.css">
    <link rel="stylesheet" href="/zysystem/Public/css/jiankang.css">
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
    <script src="/zysystem/Public/js/jeDate/jedate.js"></script>
</head>
<body  oncontextmenu=self.event.returnValue=false onselectstart="return false">
    <div class="bg">
        <!--病人基本信息-->
        <div class="baseInf" id="baseInf">病人基本信息</div>
        <div class="baseContent">
            <div class="baseTitle">病人基本信息：<button type="button" class="guanbi">&times;</button></div>
            <div class="baseTable">
                <table>
                    <tr>
                        <td><label for="blNumber">病历号：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["br_id"]); ?>" id="blNumber" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="name1">姓名：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["br_name"]); ?>" id="name1" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="sex1">性别：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["xb"]); ?>" id="sex1" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="age1">年龄：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["nl"]); ?>" id="age1" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="birth">出生日期：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["cs_date"]); ?>" id="birth" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="userID1">身份证号：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["pass"]); ?>" id="userID1" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="dw">单位：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["dw"]); ?>" id="dw" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="phone1">电话：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["tel"]); ?>" id="phone1" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="cz">传真：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["fax"]); ?>" id="cz" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="mail">E-Mail：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["e_mail"]); ?>" id="mail" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="yydate">预约日期：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["jz_date"]); ?>" id="yydate" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="ghcost">挂号费：</label></td>
                        <td><input type="text" value="<?php echo ($data["0"]["ghf"]); ?>" id="ghcost" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="jzcost">就诊费：</label></td>
                        <td><input type="text" value="不知道" id="jzcost" readonly></td>
                    </tr>
                </table>
            </div>
        </div>
        <!--历史完成就诊记录-->
        <div class="hisInf">历史完成就诊记录</div>
        <div class="hisContent">
            <div class="hisTitle">就诊日期（历次完成就诊记录）：<button type="button" class="guanbi">&times;</button></div>
            <div class="hisTable">
                <table>
                    <tr class="first-tr">
                        <td colspan="2">本次病历</td>
                    </tr>
                    <tr class="other-tr">
                        <td>2016-11-28 15:01:00</td>
                        <td width="75">
                            <div class="butt">
                                <button type="button" class="btn btn-warning">查看处方</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!--健康档案-->
        <div class="right">
            <!--健康档案-->
            <div class="right-center">
                <div class="health-file center">
                    <form action="#" method="post">
                        <table border="1" cellspacing="1" class="jkda-table">
                            <div class="title">中医健康档案</div>
                            <div class="title2">
                                <div>
                                    <span>就诊日期：</span>
                                    <span id="jzrq"><?php echo ($data["0"]["jz_date"]); ?></span>
                                </div>
                                <div>
                                    <span>病历号：</span>
                                    <span id="blnum"><?php echo ($data["0"]["br_id"]); ?></span>
                                </div>
                            </div>
                            <tr>
                                <th width="8%"><label for="name">姓名</label></th>
                                <td colspan="2" width="10%">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" value="<?php echo ($data["0"]["br_name"]); ?>" onkeyup="this.size=(this.value.length>3?this.value.length:3);" size="3" id="name">
                                        </span>
                                </td>
                                <th width="6%"><label for="sex">性别</label></th>
                                <td width="7%">
                                        <span>
                                            <input type="text" value="<?php echo ($data["0"]["xb"]); ?>" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sex">
                                        </span>
                                </td>
                                <th width="7%"><label for="age">年龄</label></th>
                                <td width="7%">
                                        <span>
                                            <input type="text" value="<?php echo ($data["0"]["nl"]); ?>" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="age">
                                        </span>
                                </td>
                                <th width="7%"><label for="birthday">出生日期</label></th>
                                <td width="11%">
                                        <span>
                                            <input type="text" value="<?php echo ($data["0"]["cs_date"]); ?>" style="width:80px;"  onClick="jeDate({dateCell:'#birthday',isTime:true,format:'YYYY-MM-DD'})" size="1" id="birthday">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="userID">身份证号</label></th>
                                <td colspan="3">
                                        <span>
                                            <input type="text" value="<?php echo ($data["0"]["pass"]); ?>" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>17?this.value.length:17);" size="17" id="userID">
                                        </span>
                                </td>
                                <th colspan="2"><label for="phone">联系方式</label></th>
                                <td colspan="3">
                                        <span>
                                            <input type="text" value="<?php echo ($data["0"]["tel"]); ?>" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>10?this.value.length:15);" size="10" id="phone">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="duo">工作单位</label></th>
                                <td colspan="8">
                                        <span>
                                            <!-- <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>20?this.value.length:20);" size="20" id="work"> -->
                                            <textarea name=""  id="duo" cols="70" rows="3"><?php echo ($data["0"]["dw"]); ?></textarea>
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="main">主诉</label></th>
                                <td colspan="8">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>30?this.value.length:30);" size="30" id="main">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="jws">既往史</label></th>
                                <td colspan="8">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="jws">
                                        </span>,
                                    <span>确认时间：</span>
                                        <span>
                                            <!-- <input type="date" name="" style="width:130px;"> -->
                                            <input type="text" id="qrsj1" style="width:80px;" onClick="jeDate({dateCell:'#qrsj1',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly">
                                        </span>
                                    <!-- <br/> -->
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
                                        </span>,
                                    <span>确认时间：</span>
                                        <span>
                                            <input type="text" id="qrsj2" style="width:80px;" onClick="jeDate({dateCell:'#qrsj2',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly">
                                        </span>
                                </td>
                            </tr>
                            <!-- <script>
                                $(".year").keydown(function(){
                                    if($(this).val().length>=4){
                                        $(this).parent().next().children().focus();
                                    }
                                })
                                $(".month").keydown(function(){
                                    if($(this).val().length>=2){
                                        $(this).parent().next().children().focus();
                                    }
                                })
                            </script> -->
                            <tr style="position:relative;">
                                <th rowspan="2"><label for="fq">家庭史</label></th>
                                <td colspan="5">
                                    <span><label for="fq">父亲：</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="fq">
                                        </span>
                                        <span>[
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw1">]
                                        </span>/
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
                                        </span>
                                </td>
                                <div class="jtsFar">
                                    <input type="text" id="jtsFarinp" style="border:1px solid #ccc;">
                                    <input type="button" value="提交" id="jtsFartj">
                                    <label><input type="radio" name="jt" class="jtscheck" value="无"><span>无</span></label>
                                    <label><input type="radio" name="jt" class="jtscheck" value="有"><span>有</span></label>
                                </div>
                                <td colspan="3">
                                    <span><label for="mq">母亲：</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mq">
                                        </span>
                                        <span>[
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw2">]
                                        </span>/
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
                                        </span>
                                </td>
                                <div class="jtsMother" style="display:none;">
                                    <input type="text" id="jtsMotherInp" style="border:1px solid #ccc;">
                                    <input type="button" value="提交" id="jtsMotherTj">
                                    <label><input type="radio" name="jt" class="jtscheck" value="无"><span>无</span></label>
                                    <label><input type="radio" name="jt" class="jtscheck" value="有"><span>有</span></label>
                                </div>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <span><label for="xdjm">兄弟姐妹：</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xdjm">
                                        </span>
                                        <span>[
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
                                        </span>/
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
                                        </span>
                                </td>
                                <td colspan="3">
                                    <span><label for="zn">子女：</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="zn">
                                        </span>
                                        <span>[
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
                                        </span>/
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
                                        </span>
                                </td>
                            </tr>
                            <tr style="position:relative;">
                                <th><label for="gms">过敏史</label></th>
                                <td colspan="6" style="width:395px;">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>15?this.value.length:15);" size="15" id="gms">
                                        </span>
                                </td>
                                <div class="gm">
                                    <div>
                                        <input type="text" id="gmsinp" style="border:1px solid #ccc;">
                                        <input type="button" value="提交" id="gmstj">
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="无"><span>无</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="否认药物及食物过敏史"><span>否认药物及食物过敏史</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="青霉素"><span>青霉素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="链霉素"><span>链霉素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="普鲁卡因"><span>普鲁卡因</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="血清"><span>血清</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="头孢菌素"><span>头孢菌素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="磺胺类药物"><span>磺胺类药物</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="海鲜"><span>海鲜</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="花粉"><span>花粉</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="鱼"><span>鱼</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="虾"><span>虾</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="蟹"><span>蟹</span></label>
                                    </div>
                                </div>
                                <th><label for="weight">体重</label></th>
                                <td>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="weight">
                                        </span>
                                    <span>KG</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tw">生命体征</label></th>
                                <td colspan="2">
                                    <span><label for="tw">体温:</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tw">
                                        </span>
                                    <span>℃</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="mb">脉搏:</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mb">
                                        </span>
                                    <span>次/分</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="hx">呼吸:</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="hx">
                                        </span>
                                    <span>次/分</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="xy">血压:</label></span>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xy">
                                        </span>/
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
                                        </span>
                                    <span>mmHg</span>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="3"><label for="wshen">整体状况</label></th>
                                <th><label for="wshen">忘神</label></th>
                                <td colspan="7">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="wshen">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="wse">忘色</label></th>
                                <td colspan="7">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="wse">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th width="5%"><label for="tt">忘形</label></th>
                                <th width="5%"><label for="tt">体态</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tt">
                                        </span>
                                </td>
                                <th colspan="2"><label for="tx">体形</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tx">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="5"><label for="zl">现在状况</label></th>
                                <th><label for="zl">睡眠</label></th>
                                <th><label for="zl">质量</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="zl">
                                        </span>
                                </td>
                                <th colspan="2"><label for="sj">时间</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sj">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="sy">食欲</label></th>
                                <td colspan="7">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sy">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="kw">口味</label></th>
                                <td colspan="7">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="kw">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="dbc">大便</label></th>
                                <th><label for="dbc">便次</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="dbc">
                                        </span>
                                </td>
                                <th colspan="2"><label for="bz">便质</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="bz">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xbc">小便</label></th>
                                <th><label for="xbc">便次</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xbc">
                                        </span>
                                </td>
                                <th colspan="2"><label for="bs">便色</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="bs">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xq">情致</label></th>
                                <th><label for="xq">性情</label></th>
                                <td colspan="3">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xq">
                                        </span>
                                </td>
                                <th colspan="2"><label for="xg">性格</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xg">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xj">心悸</label></th>
                                <td colspan="8">[
                                    <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="xj">]
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2"><label for="ss">舌诊</label></th>
                                <th><label for="ss">舌色</label></th>
                                <td>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="ss">
                                        </span>
                                </td>
                                <th><label for="st">舌体</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="st">
                                        </span>
                                </td>
                                <th colspan="2"><label for="dt">动态</label></th>
                                <td>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="dt">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tz">苔质</label></th>
                                <td>
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tz">
                                        </span>
                                </td>
                                <th><label for="ts">苔色</label></th>
                                <td colspan="5">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="ts">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="mz">脉诊</label></th>
                                <td colspan="8">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mz">
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tzbs">体质辨识</label></th>
                                <td colspan="8">
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="tzbs" value="体质辨识">]
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="zyzd">中医诊断</label></th>
                                <td colspan="4">
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zyzd" value="中医诊断">]
                                        </span>
                                </td>
                                <th><label for="xyzd">西医诊断</label></th>
                                <td colspan="3">
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="xyzd" value="西医诊断">]
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="zybz">辩证</label></th>
                                <td colspan="4">
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zybz" value="中医辩证">]
                                        </span>
                                </td>
                                <th><label for="zyzz">治则</label></th>
                                <td colspan="3">
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zyzz" value="中医治则">]
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th>处置</th>
                                <td colspan="8">
                                    <!-- <div>
                                        <span>[</span>
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="4" id="zycz" value="中医处置">]
                                        </span>
                                        <span>]</span>
                                    </div> -->
                                    <div class="chufang">
                                        <div>
                                            <span>【中药处方】：</span>
                                            <span>大青龙汤</span>
                                            <span>(<span>7</span><span>剂</span>)</span>
                                        </div>
                                        <div>
                                            <ul>
                                                <li><span>麻黄</span><span>6</span><span>克</span></li>
                                                <li><span>苦杏仁</span><span>6</span><span>克</span></li>
                                                <li><span>炙甘草</span><span>6</span><span>克</span></li>
                                                <li><span>生姜</span><span>6</span><span>克</span></li>
                                                <li><span>生石膏</span><span>15</span><span>克</span></li>
                                                <li><span>桂枝</span><span>6</span><span>克</span></li>
                                                <li><span>大枣</span><span>12</span><span>克</span></li>
                                            </ul>
                                        </div>
                                        <div style="clear:both;">
                                            <span>【医嘱】：<span></span></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>其他治疗计划</th>
                                <td colspan="8">
                                        <span>
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
                                        </span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <!--按钮-->
        <button class="btn btn-warning but1">
            <!--<i class="glyphicon glyphicon-floppy-disk"></i>-->
            保<br/>存
        </button>
        <button class="btn btn-warning but2">
            <!--<i class="glyphicon glyphicon-print"></i>-->
            打<br/>印
        </button>
    </div>
    <script type="text/javascript">
        jeDate.skin('gray');
    </script>
</body>
</html>
<script src="/zysystem/Public/js/bingshi.js"></script>