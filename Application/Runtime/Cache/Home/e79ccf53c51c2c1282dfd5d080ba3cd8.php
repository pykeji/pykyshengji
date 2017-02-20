<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>患者登记</title>
    <link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zysystem/Public/css/dengji.css">
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
    <script src="/zysystem/Public/js/jeDate/jedate.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div class="bg">
    <div class="title">患者登记</div>
    <div class="content center">
        <div style="background-color:#d7d715;border-radius:10px 10px 0px 0px">
            <div class="title2 center">
                <div>
                    <img src="/zysystem/Public/img/reg.png" alt="图片加载失败！">
                </div>
                <div class="djfont">
                    患者基本信息
                </div>
                <span>
                    <b style="margin-left:40px;color: red; "><?php echo ($cwxinxi); ?></b>
                </span>
                <div class="djdate">
                    <span>日期：</span>
                    <span class="djrq"></span>
                </div>
            </div>
        </div>
        <form action="<?php echo U('Index/jiankang');?>" method="post">
            <div class="inf center">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table border="0" class="mbt center">
                    <tr>
                        <td width="15%">病历号：</td>
                        <td width="35%"><input type="text" value="<?php echo ($vo["br_id"]); ?>" name="br_id" readonly="readonly" id="blNum"></td>
                        <td width="15%"></td>
                        <td width="35%"></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" name="br_name" value="<?php echo ($vo["br_name"]); ?>" id="userName1"></td>
                        <td>性别：</td>
                        <td>
                        <?php if($data[0]['xb']=="女"){ ?>
                            <label><input type="radio" name="xb" value="男" ><span>男</span></label>
                                <label><input type="radio" name="xb" value="女" checked="checked"><span>女</span></label>
                        <?php }else{ ?>
                            <label><input type="radio" name="xb" value="男" checked="checked"><span>男</span></label>
                                <label><input type="radio" name="xb" value="女" ><span>女</span></label>
                        <?php } ?>

                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text" name="nl" value="<?php echo ($vo["nl"]); ?>" id="age1"></td>
                        <td>出生年月：</td>
                        <td><input type="text" name="cs_date" value="<?php echo ($vo["cs_date"]); ?>" placeholder="请选择时间！" id="datebut" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td><input type="text" name="pass" value="<?php echo ($vo["pass"]); ?>" id="idNum1"></td>
                        <td>电话：</td>
                        <td><input type="text" name="tel" value="<?php echo ($vo["tel"]); ?>" id="phone1"></td>
                    </tr>
                    <tr>
                        <td>传真：</td>
                        <td><input type="text" name="fax" value="<?php echo ($vo["fax"]); ?>" id="chuanzhen1"></td>
                        <td>E-Mail：</td>
                        <td><input type="text" name="e_mail" value="<?php echo ($vo["e_mail"]); ?>" id="mail1"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input type="text" name="ghf" value="<?php echo ($vo["ghf"]); ?>"></td>
                        <td width="15%">预约日期：</td>
                        <td width="35%"><input type="text" name="p_date" value="<?php echo ($vo["p_date"]); ?>" class="yyrq" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3">
                            <textarea name="dw" id="comp1"class="lontext">
                                <?php echo ($vo["dw"]); ?>
                            </textarea>
                        </td>
                    </tr>
                    <!-- 就诊时间 -->
                    <input type="hidden"  name="jz_date" class="yyrq">
                </table><?php endforeach; endif; else: echo "" ;endif; ?>
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
<script src="/zysystem/Public/js/shijian.js"></script>