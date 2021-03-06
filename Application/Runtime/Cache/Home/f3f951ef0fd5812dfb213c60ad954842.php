<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>健康档案</title>
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zySystem/Public/css/jkda.css">
    <link rel="stylesheet" href="/zySystem/Public/css/jiankang.css">
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
    <script src="/zySystem/Public/js/jeDate/jedate.js"></script>
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
                                            <input type="text" ondblclick="douCli('jws','jws1','jws1inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="jws">
                                        </span>
                                        <div class="jws1">
                                            <div class="div1">
                                                <input type="text" id="jws1inp" style="border:1px solid #ccc;" placeholder="既往病史（多选）">
                                                <input type="button" value="提交" id="jws1tj" onclick="sub('jws','jws1','jws1inp')">
                                                <input type="button" value="关闭" class="clo">
                                            </div>
                                            <div class="div2">
                                                <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 1): ?><label><input type="checkbox" name="jws" class="jiwangshi1" onclick="checked2('jiwangshi1','jws1inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </div>,
                                        <span>确认时间：</span>
                                        <span>
                                            <!-- <input type="date" name="" style="width:130px;"> -->
                                            <input type="text" id="qrsj1" style="width:80px;" onClick="jeDate({dateCell:'#qrsj1',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly">
                                        </span>
                                        <span>
                                            <input type="text" ondblclick="douCli('crbs','jws2','jws2inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="crbs">
                                        </span>
                                        <div class="jws2">
                                            <div class="div1">
                                                <input type="text" id="jws2inp" style="border:1px solid #ccc;" placeholder="传染病史（多选）">
                                                <input type="button" value="提交" id="jws2tj" onclick="sub('crbs','jws2','jws2inp')">
                                                <input type="button" value="关闭" class="clo">
                                            </div>
                                            <div class="div2">
                                                <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 2): ?><label><input type="checkbox" name="crbs" class="jiwangshi2" onclick="checked2('jiwangshi2','jws2inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </div>,
                                        <span>确认时间：</span>
                                        <span>
                                            <input type="text" id="qrsj2" style="width:80px;" onClick="jeDate({dateCell:'#qrsj2',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly">
                                        </span>
                                </td>
                            </tr>
                            <tr style="position:relative;">
                                <th rowspan="2"><label for="yw1">家庭史</label></th>
                                <td colspan="5">
                                    <span><label for="yw1">父亲：</label></span>
                                        <!--<span>-->
                                            <!--<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="fq">-->
                                        <!--</span>-->
                                        <span>[
                                            <input type="text" ondblclick="douCli('yw1','jtsFar','jtsFarinp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw1">]
                                        </span>/
                                        <span>
                                            <input type="text" ondblclick="douCli('jtsFQ','jts11','jts11inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="jtsFQ">
                                        </span>
                                </td>
                                <div class="jtsFar">
                                    <div class="div1">
                                        <input type="text" id="jtsFarinp" style="border:1px solid #ccc;" placeholder="有无（单选）">
                                        <input type="button" value="提交" id="jtsFartj" onclick="sub('yw1','jtsFar','jtsFarinp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <label><input type="radio" name="jtsyw1" class="jtscheck" value="无" onclick="checked1('jtscheck','jtsFarinp')"><span>无</span></label>
                                        <label><input type="radio" name="jtsyw1" class="jtscheck" value="有" onclick="checked1('jtscheck','jtsFarinp')"><span>有</span></label>
                                    </div>
                                </div>
                                <div class="jts11">
                                    <div class="div1">
                                        <input type="text" id="jts11inp" style="border:1px solid #ccc;" placeholder="既往病史（多选）">
                                        <input type="button" value="提交" id="jts11tj" onclick="sub('jtsFQ','jts11','jts11inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 1): ?><label><input type="checkbox" name="jtsFQ" class="gmcheck11" onclick="checked2('gmcheck11','jts11inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <td colspan="3">
                                    <span><label for="yw2">母亲：</label></span>
                                        <!--<span>-->
                                            <!--<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mq">-->
                                        <!--</span>-->
                                        <span>[
                                            <input type="text" ondblclick="douCli('yw2','jtsMother','jtsMotherInp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw2">]
                                        </span>/
                                        <span>
                                            <input type="text" ondblclick="douCli('jtsMQ','jts22','jts22Inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>6?this.value.length:6);" size="6" id="jtsMQ">
                                        </span>
                                </td>
                                <div class="jtsMother">
                                    <div class="div1">
                                        <input type="text" id="jtsMotherInp" style="border:1px solid #ccc;" placeholder="有无（单选）">
                                        <input type="button" value="提交" id="jtsMotherTj" onclick="sub('yw2','jtsMother','jtsMotherInp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <label><input type="radio" name="jtsyw2" class="jtscheck2" value="无" onclick="checked1('jtscheck2','jtsMotherInp')"><span>无</span></label>
                                        <label><input type="radio" name="jtsyw2" class="jtscheck2" value="有" onclick="checked1('jtscheck2','jtsMotherInp')"><span>有</span></label>
                                    </div>
                                </div>
                                <div class="jts22">
                                    <div class="div1">
                                        <input type="text" id="jts22inp" style="border:1px solid #ccc;" placeholder="既往病史（多选）">
                                        <input type="button" value="提交" id="jts22tj" onclick="sub('jtsMQ','jts22','jts22inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 1): ?><label><input type="checkbox" name="jtsMQ" class="gmcheck22" onclick="checked2('gmcheck22','jts22inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <span><label for="yw3">兄弟姐妹：</label></span>
                                        <!--<span>-->
                                            <!--<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xdjm">-->
                                        <!--</span>-->
                                        <span>[
                                            <input type="text" ondblclick="douCli('yw3','jts3','jts3Inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw3">]
                                        </span>/
                                        <span>
                                            <input type="text" ondblclick="douCli('jtsXD','jts33','jts33Inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="jtsXD">
                                        </span>
                                </td>
                                <div class="jts3">
                                    <div class="div1">
                                        <input type="text" id="jts3Inp" style="border:1px solid #ccc;" placeholder="有无（单选）">
                                        <input type="button" value="提交" id="jts3Tj" onclick="sub('yw3','jts3','jts3Inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <label><input type="radio" name="jtsyw3" class="jtscheck3" value="无" onclick="checked1('jtscheck3','jts3Inp')"><span>无</span></label>
                                        <label><input type="radio" name="jtsyw3" class="jtscheck3" value="有" onclick="checked1('jtscheck3','jts3Inp')"><span>有</span></label>
                                    </div>
                                </div>
                                <div class="jts33">
                                    <div class="div1">
                                        <input type="text" id="jts33inp" style="border:1px solid #ccc;" placeholder="既往病史（多选）">
                                        <input type="button" value="提交" id="jts33tj" onclick="sub('jtsXD','jts33','jts33inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 1): ?><label><input type="checkbox" name="jtsXD" class="gmcheck33" onclick="checked2('gmcheck33','jts33inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <td colspan="3">
                                    <span><label for="yw4">子女：</label></span>
                                    <!--<span>-->
                                        <!--<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="zn">-->
                                    <!--</span>-->
                                    <span>[
                                        <input type="text" ondblclick="douCli('yw4','jts4','jts4Inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw4">]
                                    </span>/
                                    <span>
                                        <input type="text" ondblclick="douCli('jtsZN','jts44','jts44Inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>6?this.value.length:6);" size="6" id="jtsZN">
                                    </span>
                                </td>
                                <div class="jts4">
                                    <div class="div1">
                                        <input type="text" id="jts4Inp" style="border:1px solid #ccc;" placeholder="有无（单选）">
                                        <input type="button" value="提交" id="jts4Tj" onclick="sub('yw4','jts4','jts4Inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <label><input type="radio" name="jtsyw4" class="jtscheck4" value="无" onclick="checked1('jtscheck4','jts4Inp')"><span>无</span></label>
                                        <label><input type="radio" name="jtsyw4" class="jtscheck4" value="有" onclick="checked1('jtscheck4','jts4Inp')"><span>有</span></label>
                                    </div>
                                </div>
                                <div class="jts44">
                                    <div class="div1">
                                        <input type="text" id="jts44inp" style="border:1px solid #ccc;" placeholder="既往病史（多选）">
                                        <input type="button" value="提交" id="jts44tj" onclick="sub('jtsZN','jts44','jts44inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 1): ?><label><input type="checkbox" name="jtsZN" class="gmcheck44" onclick="checked2('gmcheck44','jts44inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr style="position:relative;">
                                <th><label for="gms">过敏史</label></th>
                                <td colspan="6" style="width:395px;">
                                    <span>
                                        <input type="text" ondblclick="douCli('gms','gm','gmsinp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>10?this.value.length:10);" size="30" id="gms">
                                    </span>
                                </td>
                                <div class="gm">
                                    <div class="div1">
                                        <input type="text" id="gmsinp" style="border:1px solid #ccc;" placeholder="过敏史（多选）">
                                        <input type="button" value="提交" id="gmstj" onclick="sub('gms','gm','gmsinp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 3): ?><label><input type="checkbox" name="gm" class="gmcheck" onclick="checked2('gmcheck','gmsinp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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
                                            <input type="text" size="1" id="tw">
                                        </span>
                                    <span>℃</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="mb">脉搏:</label></span>
                                        <span>
                                            <input type="text" size="1" id="mb">
                                        </span>
                                    <span>次/分</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="hx">呼吸:</label></span>
                                        <span>
                                            <input type="text" size="1" id="hx">
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
                                        <input type="text" ondblclick="douCli('wshen','zt1','zt1inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="wshen">
                                    </span>
                                </td>
                                <div class="zt1">
                                    <div class="div1">
                                        <input type="text" id="zt1inp" style="border:1px solid #ccc;" placeholder="忘神（单选）">
                                        <input type="button" value="提交" id="zt1tj" onclick="sub('wshen','zt1','zt1inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 4): ?><label><input type="radio" name="wshen" class="zhengti1" onclick="checked1('zhengti1','zt1inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="wse">忘色</label></th>
                                <td colspan="7">
                                    <span>
                                        <input type="text" ondblclick="douCli('wse','zt2','zt2inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="wse">
                                    </span>
                                </td>
                                <div class="zt2">
                                    <div class="div1">
                                        <input type="text" id="zt2inp" style="border:1px solid #ccc;" placeholder="忘色（单选）">
                                        <input type="button" value="提交" id="zt2tj" onclick="sub('wse','zt2','zt2inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 5): ?><label><input type="radio" name="wse" class="zhengti2" onclick="checked1('zhengti2','zt2inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th width="5%"><label for="tt">忘形</label></th>
                                <th width="5%"><label for="tt">体态</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('tt','zt3','zt3inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="tt">
                                    </span>
                                </td>
                                <div class="zt3">
                                    <div class="div1">
                                        <input type="text" id="zt3inp" style="border:1px solid #ccc;" placeholder="体态（单选）">
                                        <input type="button" value="提交" id="zt3tj" onclick="sub('tt','zt3','zt3inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 6): ?><label><input type="radio" name="tt" class="zhengti3" onclick="checked1('zhengti3','zt3inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th colspan="2"><label for="tx">体形</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('tx','zt4','zt4inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="tx">
                                    </span>
                                </td>
                                <div class="zt4">
                                    <div class="div1">
                                        <input type="text" id="zt4inp" style="border:1px solid #ccc;" placeholder="体形（单选）">
                                        <input type="button" value="提交" id="zt4tj" onclick="sub('tx','zt4','zt4inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 7): ?><label><input type="radio" name="tx" class="zhengti4" onclick="checked1('zhengti4','zt4inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th rowspan="5"><label for="zl">现在状况</label></th>
                                <th><label for="zl">睡眠</label></th>
                                <th><label for="zl">质量</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('zl','xz1','xz1inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="zl">
                                    </span>
                                </td>
                                <div class="xz1">
                                    <div class="div1">
                                        <input type="text" id="xz1inp" style="border:1px solid #ccc;" placeholder="睡眠质量（多选）">
                                        <input type="button" value="提交" id="xz1tj" onclick="sub('zl','xz1','xz1inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 8): ?><label><input type="checkbox" name="zl" class="xianzai1" onclick="checked2('xianzai1','xz1inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th colspan="2"><label for="sj">时间</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('sj','xz2','xz2inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="sj">
                                    </span>
                                </td>
                                <div class="xz2">
                                    <div class="div1">
                                        <input type="text" id="xz2inp" style="border:1px solid #ccc;" placeholder="睡眠时间（单选）">
                                        <input type="button" value="提交" id="xz2tj" onclick="sub('sj','xz2','xz2inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 9): ?><label><input type="radio" name="sj" class="xianzai2" onclick="checked1('xianzai2','xz2inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="sy">食欲</label></th>
                                <td colspan="7">
                                    <span>
                                        <input type="text" ondblclick="douCli('sy','xz3','xz3inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="sy">
                                    </span>
                                </td>
                                <div class="xz3">
                                    <div class="div1">
                                        <input type="text" id="xz3inp" style="border:1px solid #ccc;" placeholder="食欲（单选）">
                                        <input type="button" value="提交" id="xz3tj" onclick="sub('sy','xz3','xz3inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 10): ?><label><input type="radio" name="sy" class="xianzai3" onclick="checked1('xianzai3','xz3inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="kw">口味</label></th>
                                <td colspan="7">
                                        <span>
                                            <input type="text" ondblclick="douCli('kw','xz4','xz4inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="kw">
                                        </span>
                                </td>
                                <div class="xz4">
                                    <div class="div1">
                                        <input type="text" id="xz4inp" style="border:1px solid #ccc;" placeholder="口味（多选）">
                                        <input type="button" value="提交" id="xz4tj" onclick="sub('kw','xz4','xz4inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 11): ?><label><input type="checkbox" name="kw" class="xianzai4" onclick="checked2('xianzai4','xz4inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="dbc">大便</label></th>
                                <th><label for="dbc">便次</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('dbc','xz5','xz5inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="dbc">
                                    </span>
                                </td>
                                <div class="xz5">
                                    <div class="div1">
                                        <input type="text" id="xz5inp" style="border:1px solid #ccc;" placeholder="大便便次（单选）">
                                        <input type="button" value="提交" id="xz5tj" onclick="sub('dbc','xz5','xz5inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 12): ?><label><input type="radio" name="dbc" class="xianzai5" onclick="checked1('xianzai5','xz5inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th colspan="2"><label for="bz">便质</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('bz','xz6','xz6inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="bz">
                                    </span>
                                </td>
                                <div class="xz6">
                                    <div class="div1">
                                        <input type="text" id="xz6inp" style="border:1px solid #ccc;" placeholder="大便便质（单选）">
                                        <input type="button" value="提交" id="xz6tj" onclick="sub('bz','xz6','xz6inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 13): ?><label><input type="radio" name="bz" class="xianzai6" onclick="checked1('xianzai6','xz6inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="xbc">小便</label></th>
                                <th><label for="xbc">便次</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('xbc','xz7','xz7inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="xbc">
                                    </span>
                                </td>
                                <div class="xz7">
                                    <div class="div1">
                                        <input type="text" id="xz7inp" style="border:1px solid #ccc;" placeholder="小便便次（单选）">
                                        <input type="button" value="提交" id="xz7tj" onclick="sub('xbc','xz7','xz7inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 14): ?><label><input type="radio" name="xbc" class="xianzai7" onclick="checked1('xianzai7','xz7inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th colspan="2"><label for="bs">便色</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('bs','xz8','xz8inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="bs">
                                    </span>
                                </td>
                                <div class="xz8">
                                    <div class="div1">
                                        <input type="text" id="xz8inp" style="border:1px solid #ccc;" placeholder="小便便色（单选）">
                                        <input type="button" value="提交" id="xz8tj" onclick="sub('bs','xz8','xz8inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 15): ?><label><input type="radio" name="bs" class="xianzai8" onclick="checked1('xianzai8','xz8inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="xq">情致</label></th>
                                <th><label for="xq">性情</label></th>
                                <td colspan="3">
                                    <span>
                                        <input type="text" ondblclick="douCli('xq','qz1','qz1inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="xq">
                                    </span>
                                </td>
                                <div class="qz1">
                                    <div class="div1">
                                        <input type="text" id="qz1inp" style="border:1px solid #ccc;" placeholder="情致（单选）">
                                        <input type="button" value="提交" id="qz1tj" onclick="sub('xq','qz1','qz1inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 16): ?><label><input type="radio" name="xq" class="qingzhi1" onclick="checked1('qingzhi1','qz1inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th colspan="2"><label for="xg">性格</label></th>
                                <td colspan="2">
                                    <span>
                                        <input type="text" ondblclick="douCli('xg','qz2','qz2inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="xg">
                                    </span>
                                </td>
                                <div class="qz2">
                                    <div class="div1">
                                        <input type="text" id="qz2inp" style="border:1px solid #ccc;" placeholder="性格（单选）">
                                        <input type="button" value="提交" id="qz2tj" onclick="sub('xg','qz2','qz2inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 17): ?><label><input type="radio" name="xg" class="qingzhi2" onclick="checked1('qingzhi2','qz2inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="xj">心悸</label></th>
                                <td colspan="8">[
                                    <input type="text" ondblclick="douCli('xj','xj1','xj1inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="xj">]
                                </td>
                                <div class="xj1">
                                    <div class="div1">
                                        <input type="text" id="xj1inp" style="border:1px solid #ccc;" placeholder="有无（单选）">
                                        <input type="button" value="提交" id="xj1tj" onclick="sub('xj','xj1','xj1inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <label><input type="radio" name="xj" class="xinji1" onclick="checked1('xinji1','xj1inp')" value="有"><span>有</span></label>
                                        <label><input type="radio" name="xj" class="xinji1" onclick="checked1('xinji1','xj1inp')" value="无"><span>无</span></label>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th rowspan="2"><label for="ss">舌诊</label></th>
                                <th><label for="ss">舌色</label></th>
                                <td>
                                        <span>
                                            <input type="text" ondblclick="douCli('ss','sz1','sz1inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="ss">
                                        </span>
                                </td>
                                <div class="sz1">
                                    <div class="div1">
                                        <input type="text" id="sz1inp" style="border:1px solid #ccc;" placeholder="舌诊-舌色（单选）">
                                        <input type="button" value="提交" id="sz1tj" onclick="sub('ss','sz1','sz1inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 18): ?><label><input type="radio" name="ss" class="shezhen1" onclick="checked1('shezhen1','sz1inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th><label for="st">舌体</label></th>
                                <td colspan="2">
                                        <span>
                                            <input type="text" ondblclick="douCli('st','sz2','sz2inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="st">
                                        </span>
                                </td>
                                <div class="sz2">
                                    <div class="div1">
                                        <input type="text" id="sz2inp" style="border:1px solid #ccc;" placeholder="舌诊-舌体（单选）">
                                        <input type="button" value="提交" id="sz2tj" onclick="sub('st','sz2','sz2inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 19): ?><label><input type="radio" name="st" class="shezhen2" onclick="checked1('shezhen2','sz2inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th colspan="2"><label for="dt">动态</label></th>
                                <td>
                                    <span>
                                        <input type="text" ondblclick="douCli('dt','sz3','sz3inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="dt">
                                    </span>
                                </td>
                                <div class="sz3">
                                    <div class="div1">
                                        <input type="text" id="sz3inp" style="border:1px solid #ccc;" placeholder="舌诊-动态（单选）">
                                        <input type="button" value="提交" id="sz3tj" onclick="sub('dt','sz3','sz3inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 20): ?><label><input type="radio" name="dt" class="shezhen3" onclick="checked1('shezhen3','sz3inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="tz">苔质</label></th>
                                <td>
                                    <span>
                                        <input type="text" ondblclick="douCli('tz','sz4','sz4inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tz">
                                    </span>
                                </td>
                                <div class="sz4">
                                    <div class="div1">
                                        <input type="text" id="sz4inp" style="border:1px solid #ccc;" placeholder="舌诊-苔质（单选）">
                                        <input type="button" value="提交" id="sz4tj" onclick="sub('tz','sz4','sz4inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 21): ?><label><input type="radio" name="tz" class="shezhen4" onclick="checked1('shezhen4','sz4inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                                <th><label for="ts">苔色</label></th>
                                <td colspan="5">
                                    <span>
                                        <input type="text" ondblclick="douCli('ts','sz5','sz5inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="ts">
                                    </span>
                                </td>
                                <div class="sz5">
                                    <div class="div1">
                                        <input type="text" id="sz5inp" style="border:1px solid #ccc;" placeholder="舌诊-苔色（单选）">
                                        <input type="button" value="提交" id="sz5tj" onclick="sub('ts','sz5','sz5inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 22): ?><label><input type="radio" name="ts" class="shezhen5" onclick="checked1('shezhen5','sz5inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="mz">脉诊</label></th>
                                <td colspan="8">
                                    <span>
                                        <input type="text" ondblclick="douCli('mz','mz1','mz1inp')" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>8?this.value.length:8);" size="8" id="mz">
                                    </span>
                                </td>
                                <div class="mz1">
                                    <div class="div1">
                                        <input type="text" id="mz1inp" style="border:1px solid #ccc;" placeholder="脉诊（多选）">
                                        <input type="button" value="提交" id="mz1tj" onclick="sub('mz','mz1','mz1inp')">
                                        <input type="button" value="关闭" class="clo">
                                    </div>
                                    <div class="div2">
                                        <?php if(is_array($bls)): $i = 0; $__LIST__ = $bls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['typeid'] == 23): ?><label><input type="checkbox" name="mz" class="maizhen1" onclick="checked2('maizhen1','mz1inp')" value="<?php echo ($vo["name"]); ?>"><span><?php echo ($vo["name"]); ?></span></label><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <th><label for="tzbs">体质辨识</label></th>
                                <td colspan="8">
                                    <span>
                                        [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>65?this.value.length:65);" size="65" id="tzbs" value="体质辨识" style="text-align: center;">]
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
                                            <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>20?this.value.length:20);" size="20">
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
<script src="/zySystem/Public/js/bingshi.js"></script>