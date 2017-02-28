<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>划价收费_中医健康管理系统</title>
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/huajia.css">
	<!-- <script src="/zysystem/Public/js/jeDate/jedate.js"></script> -->
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.easyui.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<form id="shoufei" name="shoufei" method="post" action="<?php echo U('Huajia/huajia',array('flag' => 1));?>">
	<div class="tool">
		<input type="button" name="sf" onClick="sub()" value="¥ 收费">
		<input type="button" name="tf" data-toggle="modal" data-target="#myModal" value="✍ 退费">
		<input type="button" name="sc" value="✘ 删除" onClick="doFun('doShow')">
		<p id="demo"></p>
	</div>
	
	<div class="top">
		<span>病历号:<input type="text" name="sf_blh" value="<?php echo ($_SESSION['id']); ?>" readonly></span>
		<span>姓名:<input type="text" name="sf_brname" value="<?php echo ($data["0"]["br_name"]); ?>" readonly></span>
		<span>性别:<input type="text" name="sf_brsex" value="<?php echo ($data["0"]["xb"]); ?>" readonly></span>
		<span>年龄:<input type="text" name="sf_brnl" value="<?php echo ($data["0"]["nl"]); ?>" readonly></span>
		<span>就诊日期:<input type="text" name="sf_brjzdate" value="<?php echo ($data["0"]["jz_date"]); ?>" readonly></span>
	</div>
	<div class="center">
		<div class="center_t">
			<table class="tab1">
				<tr>
					<td class="tab1_l">
						<img src="/zysystem/Public/muban/assets/img/chufang.png" width="23" height="23">
						<font size="+1">收费项目</font>
					</td>
					<td class="tab1_r">
						<h4>
							<font color="#DDAA00">票据号:</font>
							<input type="text" name="sf_pjh" value="<?php echo ($pjh); ?>" readonly>
						</h4>
					</td>
				</tr>
			</table>
	</form>
			<table class="tab2">
				<tr>
					<th width="25%">费用名称</th>
					<th width="15%">规格</th>
					<th width="15%">单位</th>
					<th width="15%">单价</th>
					<th width="15%">数量</th>
					<th width="15%">金额</th>
				</tr>
				<tr>
					<td><!-- 通过选择名称在数据库查询其他信息 -->
						<input id="name" class="easyui-combogrid" data-options="
							panelWidth: 710,
							idField: 'name',
							textField: 'name',
							url: '/zysystem/Public/muban/assets/css/datagrid_data.json',
							columns: [[
								{field:'name',title:'名称',width:215,align:'left'},
								{field:'guige',title:'规格',width:130,align:'center'},
								{field:'danwei',title:'单位',width:100,align:'center'},
								{field:'danjia',title:'单价',width:100,align:'right'},
								{field:'pym',title:'拼音码',width:165,align:'center'},
							]],
							fitColumns: true,
							onChange: function(rowIndex,rowData){
					   			var nval = $('#name').combogrid('getValue');
					   			ajaxFun();
							}
						" >
					</td>
					<td><input type="text" id="guige" name="guige" value="" readonly></td>
					<td><input type="text" id="danwei" name="danwei" value="" readonly></td>
					<td><input type="text" id="danjia" name="danjia" value=".00"></td>
					<td><input type="text" id="number" name="number" value=".00" onChange="zh()"></td>
					<td><input type="text" id="jine" name="jine" value=".00" readonly></td>
				</tr>
			</table>
		</div>
		<div class="center_c">
			<table class="tab3">
				<tr>
					<td width="60%" class="tab3_l">
						<img src="/zysystem/Public/muban/assets/img/iconpng.png" width="23" height="23">
						<font size="+1">收费列表</font>
					</td>
					<td width="20%" align="right"><font color='red'><b>合计金额：</b></font></td>
					<td width="20%" align="right"><font color='red' size="+1"><b>￥0.00</b></font></td>
				</tr>
			</table>
			<div class="table4">
				<table id="tab4" class="tab4">
					<tr>
						<th width="15%">序号</th>
						<th width="25%">项目名称</th>
						<th width="15%">单位</th>
						<th width="15%">单价</th>
						<th width="15%">数量</th>
						<th width="15%">金额</th>
					</tr>
					<!--中药处方 -->
					<?php if(is_array($zykf)): $i = 0; $__LIST__ = $zykf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="sty1" name="tableSty" id="<?php echo ($vo["presc_no"]); ?>">
							<td><input type="hidden" id="xuhao" name="xuhao[<?php echo $key+1;?>]" value="<?php echo $key+1;?>"><?php echo $key+1;?></td>
							<td class="left"><input type="hidden" id="xmname" name="xmname[<?php echo $key+1;?>]" value="中草药">中草药</td>
							<td class="left"><input type="hidden" id="danwei" name="danwei[<?php echo $key+1;?>]" value="<?php echo ($zyyp["drug_units"]); ?>"><?php echo ($zyyp["drug_units"]); ?></td>
							<td><input type="hidden" id="danjia" name="danjia[<?php echo $key+1;?>]" value="<?php echo ($zyyp["price"]); ?>"><?php echo ($zyyp["price"]); ?></td>
							<td><input type="hidden" id="number" name="number[<?php echo $key+1;?>]" value="<?php echo ($zykf["0"]["dose"]); ?>"><?php echo number_format($zykf[0][dose],2);?></td>
							<td><input type="hidden" id="jine" name="jine[<?php echo $key+1;?>]" value="<?php echo ($zyyp["costs"]); ?>"><?php echo ($zyyp["costs"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					<!--西药处方 -->
					<?php if(is_array($xydrug)): $i = 0; $__LIST__ = $xydrug;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$te): $mod = ($i % 2 );++$i;?><tr class="sty1" name="tableSty" id="<?php echo ($te["cf_id"]); ?>">
							<td><input type="hidden" id="xuhao" name="xuhao[<?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?>]" value="<?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?>"><?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?></td>
							<td class="left"><input type="hidden" id="xmname" name="xmname[<?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?>]" value="<?php echo ($te["xmname"]); ?>"><?php echo ($te["xmname"]); ?></td>
							<td class="left"><input type="hidden" id="danwei" name="danwei[<?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?>]" value="/">/</td>
							<td><input type="hidden" id="danjia" name="danjia[<?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?>]" value="<?php echo ($te["price"]); ?>"><?php echo ($te["price"]); ?></td>
							<td><input type="hidden" id="number" name="number[<?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?>]" value="<?php echo ($te["amount"]); ?>"><?php echo ($te["amount"]); ?></td>
							<td><input type="hidden" id="jine" name="jine[<?php if(count($zykf) == 0){echo $key+1;}else{echo $key+2;}?>]" value="<?php echo ($te["costs"]); ?>"><?php echo ($te["costs"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
			</div>
		</div>
	</div>
	<!-- 退费 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	        	<a class="close" data-dismiss="modal" style="margin-right:30px; margin-top:10px; color:red;">✘</a>
	        	<iframe src="<?php echo U('Huajia/tuifei');?>" width="100%" height="100%" style="border:none;"></iframe>
	        </div>
	    </div>
	</div>

	<!-- 双击弹框 -->
	<div class="dbdiv" id="dbdiv" style="display:none;">
		<div class="dbexit"><input type="button" id="close" value="✘ 关闭" onClick="close()"></div>
		<table id="dbtab"></table>
	</div>

	<!-- 删除按钮 -->
	<div id="Dshow" style="display:none;">
		<div class="box">
    		<h3>提示</h3>
        	<p class="info">确定要删除选中项目？</p>
        	<p class="btnX"><input type="button" value="确定" onClick="doFun('doClose')" /><input type="button" value="取消" onClick="doFun('returnFalse')" /></p>
    	</div>
	</div>
</body>
</html>
<script type="text/javascript" src="/zysystem/Public/muban/assets/js/huajia.js"></script>
<script>
		//收费页面收费列表
		function ajaxFun(){
			$.ajax({
				type:"post",
				url:"/zysystem/index.php/Home/Huajia/ajax",
				dataType:"json",
				data:{
					"name":$("#name").val(),
				},
				success:function(sfxmdata){
					var guige = "";
					var danwei = "";
					var danjia = "";
					for(var i=0;i<sfxmdata.length;i++){
						$("#guige").val(sfxmdata[i].item_spec);
						$("#danwei").val(sfxmdata[i].units_code);
						$("#danjia").val(sfxmdata[i].price);
					}
				}
			})
		}


		//生成总金额
		$(document).ready(function(){
			var zje = 0.00;
			$(".tab4 tr").not(":first").each(function(){
				obj = $(this).find("td:last").text();
				zje = (Number(zje) + Number(obj)).toFixed(2);
			});
			$(".tab3 tr td:last").text('￥'+zje);
			$(".tab3 tr td:last").css("color","red");
			$(".tab3 tr td:last").css("font-weight","bold");
			$(".tab3 tr td:last").css("font-size","20px");
		});

		//中药or西药双击事件
		$(".sty1").dblclick(function(){
			$(".dbdiv").css('display','block');
			$(".dbdiv").css('width',(window.screen.width)/2);
			$(".dbdiv").css('height',(window.screen.height)/2);  
        	$(".dbdiv").fadeTo('slow', 0.99); 
			var id = $(this).attr("id");
			var len = $(this).attr("id").length;
			$.ajax({
				type:"post",
				url:"/zysystem/index.php/Home/Huajia/yplist",
				dataType:"json",
				data:{"id":id,
					"len":len
				},
				success:function(sfdetail){
					var str = "<thead><tr><th width='5%'></th><th width='20%'>项目名称</th><th width='15%'>数量</th><th width='15%'>单位</th><th width='15%'>剂数</th><th width='15%'>零售价</th><th width='15%'>金额</th></tr></thead>";
					var zcosts = 0;
					for(var i=0;i<sfdetail.length;i++){
						str += "<tr><td>"+sfdetail[i]['id']+"</td><td align='left'>"+sfdetail[i]['xmname']+"</td><td align='right'>"+sfdetail[i]['amount']+"</td><td>"+sfdetail[i]['units']+"</td><td align='right'>"+sfdetail[i]['dose']+"</td><td align='right'>"+sfdetail[i]['price']+"</td><td align='right'>"+sfdetail[i]['costs']+"</td></tr>";
						var count = i;
						zcosts += parseFloat(sfdetail[i]['costs']);
					}
					str += "<tr><td colspan='4' align='left'>共<font color='red'><b>"+i+"</b></font>味药</td><td colspan='3' align='right'><font color='red'><b>合计金额："+zcosts.toFixed(2)+"</b></font></td></tr>";
					$("#dbtab").html(str);
				}
			})
		})

		$("#close").click(function(){
			$(".dbdiv").css('display','none');
		})
	</script>