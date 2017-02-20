<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>患者预约</title>
    <link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zysystem/Public/css/yuyue.css">
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
    <script src="/zysystem/Public/js/jeDate/jedate.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div class="bg">
    <div class="title">患者预约</div>
    <div class="content center">
        <div style="background-color:#d7d715;border-radius:10px 10px 0px 0px">
            <div class="title2 center">
                <div class="titLeft">
                    <div>
                        <img src="/zysystem/Public/img/reg.png" alt="图片加载失败！">
                    </div>
                    <div class="modfont">
                        患者基本信息
                    </div>
                </div>
                <div class="titRight">
                    <div>
                        <img src="/zysystem/Public/img/037.png" alt="图片加载失败！">
                    </div>
                    <div class="modfont">
                        当天已预约情况
                    </div>
                </div>
            </div>
        </div>
        <form action="<?php echo U('Yuyue/yuyue');?>" method="post">
        <div class="inf center">
            <div class="bodyLeft">
            <?php if(is_array($datazuo)): $i = 0; $__LIST__ = $datazuo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vozuo): $mod = ($i % 2 );++$i;?><table border="0" class="mbt">
                    <tr>
                        <td width="15%">病历号：</td>
                        <td width="35%"><input type="text" value="<?php echo ($vozuo["br_id"]); ?>" name="br_id" readonly="readonly"></td>
                        <td width="15%">姓名</td>
                        <td width="35%"><input type="text" name="br_name" value="<?php echo ($vozuo["br_name"]); ?>" id="userName2"></td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text" name="nl" value="<?php echo ($vozuo["nl"]); ?>"></td>
                        <td>性别：</td>
                        <td>
                        <?php if($datazuo[0]['xb']=="女"){ ?>
                            <label><input type="radio" name="xb" value="男" ><span>男</span></label>
                                <label><input type="radio" name="xb" value="女" checked="checked"><span>女</span></label>
                        <?php }else{ ?>
                            <label><input type="radio" name="xb" value="男" checked="checked"><span>男</span></label>
                                <label><input type="radio" name="xb" value="女" ><span>女</span></label>
                        <?php } ?>

                        </td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td><input type="text" name="pass" value="<?php echo ($vozuo["pass"]); ?>"></td>
                        <td>电话：</td>
                        <td><input type="text" name="tel" value="<?php echo ($vozuo["tel"]); ?>"></td>
                    </tr>
                    <tr>
                        <td>传真：</td>
                        <td><input type="text" name="fax" value="<?php echo ($vozuo["fax"]); ?>"></td>
                        <td>E-Mail：</td>
                        <td><input type="text" name="e_mail" value="<?php echo ($vozuo["e_mail"]); ?>"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input type="text" name="ghf" value="<?php echo ($vozuo["ghf"]); ?>"></td>
                        <td>出生年月：</td>
                        <td><input type="text" name="cs_date" value="<?php echo ($vozuo["cs_date"]); ?>" placeholder="请选择日期！" id="datebut" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3">
                            <textarea name="dw"  id="comp" class="lontext">
                                <?php echo ($vozuo["dw"]); ?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>预约日期：</td>
                        <td><input type="text" name="p_date" value="<?php echo ($vozuo["p_date"]); ?>" placeholder="请选择日期！" id="datebut1" onClick="jeDate({dateCell:'#datebut1',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})" readonly="readonly"></td>
                        <td colspan="2">注：本日期是一个时间段，前后15分钟</td>
                    </tr>
                    <!-- 就诊时间 -->
                    <input type="hidden"  name="jz_date" class="yyrq">
                    <!-- 区分是否为就诊 -->
                    <input type="hidden" name="reserve" value="2">
                </table><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="bodyRight">
                <div class="brtop">
                    <table border="0" class="rtable">
                        <tr>
                            <td width="40%">预约人姓名</td>
                            <td width="60%">预约时间</td>
                        </tr>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="text-align: center;">
                            <td width="40%">
                            	<?php echo ($vo["br_name"]); ?>
                            </td>
                            <td width="60%"> <?php echo ($vo["p_date"]); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
                <div class="brbottom">
                    <span>该时间段内有：
                    	<span type="text" class="dqyuyuexianshiren"></span>
                    </span><span>病人预约</span>
                </div>
            </div>
        </div>
        <div class="but">
            <div class="butt">
                <button type="button" id="chakanyuyuerenshu" class="btn btn-warning">查看</button>
                <button type="submit" class="btn btn-warning">预约</button>
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
	// 查看预约人数
	$("#chakanyuyuerenshu").click(function(){
		//预约时间
		// var yuyueshijzhenshi = $("#datebut1").val();
		$.ajax({
			type:'get',
            url:'<?php echo U("Yuyue/ajaxrsyy");?>',
            data:{"date":$("#datebut1").val()},
            dataType:'json',
            success:function(dd)
            {
            	
                $date = dd;//当前预约人数
				// alert($date);
				$(".dqyuyuexianshiren").html($date);
            	// console.log(dd);
            },
            error:function()
            {
                alert(Ajax请求失败);
            }
		});
	});
	//框内改变事件 
	$(document).on("input",".yuyueriqiyincang",function(){
		// alert(123);
	})
</script>
<script src="/zysystem/Public/js/shijian.js"></script>