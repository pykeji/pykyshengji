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
	<script>
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
	</script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<form id="shoufei" method="post" action="/zysystem/index.php/Home/Huajia/huajia">
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
							<input type="text" name="sf_pjh" value="<?php echo ($pjh["0"]["piaojh"]); ?>" readonly>
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
					<tr class="sty1" name="tableSty">
						<td><input type="hidden" id="xuhao" name="xuhao" value="1">1</td>
						<td class="left"><input type="hidden" id="xmname" name="xmname" value="中草药">中草药</td>
						<td class="left"><input type="hidden" id="danwei" name="danwei" value="/">/</td>
						<td><input type="hidden" id="danjia" name="danjia" value="1.000">1.000</td>
						<td><input type="hidden" id="number" name="number" value="5.00">5.00</td>
						<td><input type="hidden" id="jine" name="jine" value="5.00">5.00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!-- 退费 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
	                	&times;
	                </button>
	                <h4 class="modal-title" id="myModalLabel">
	                	<img src="/zysystem/Public/muban/assets/ico/minus.png" class="modal-img">
	                	门诊退费
	                </h4>
	            </div>
	            <div class="modal-body">
					<div class="modal-body-left">
						<div class="modal-body-left-top">
							收费日期：<input type="text" name="sfdata" value="<?php echo ($sfrq); ?>" >
							<input type="button" name="query" value="✔ 查询">
							<br><br>
						</div>
						<div class="modal-body-left-con">
							<h4 class="tit"><img src="/zysystem/Public/muban/assets/img/014.png" class="body-img">
							发票信息</h4>
							<table class="tab5">
								<thead>
									<tr>
										<th width="30%">票据号</th>
										<th width="20%">姓名</th>
										<th width="20%">收费金额</th>
										<th width="30%">病历号</th>
									</tr>
								</thead>
								<tbody>
									<?php if(is_array($sfls)): $i = 0; $__LIST__ = $sfls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
											<td><?php echo ($vo["invoice_no"]); ?></td>
											<td><?php echo ($data["0"]["br_name"]); ?></td>
											<td align="right"><?php echo ($czjine); ?></td>
											<td><?php echo ($data["0"]["br_id"]); ?></td>
										</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="modal-body-right">
						<div class="modal-body-right-con">
							<h4 class="tit"><img src="/zysystem/Public/muban/assets/img/iconpng.png" class="body-img">
							收费明细</h4>
							<table class="tab6">
								<thead>
									<tr>
										<th width="12%">序号</th>
										<th width="38%">项目名称</th>
										<th width="12%">单位</th>
										<th width="12%">单价</th>
										<th width="12%">数量</th>
										<th width="12%">金额</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>B超费</td>
										<td>次</td>
										<td align="right">20.00</td>
										<td align="right">1.00</td>
										<td align="right">20.00</td>
									</tr>
									<tr class="hj">
										<td colspan="3">合计：</td>
										<td colspan="3">20.00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
	            </div>
	            <div class="modal-footer">
		            <input type="button" name="exit" data-dismiss="modal" value="✘ 退出">
		            &nbsp;&nbsp;&nbsp;&nbsp;
		            <input type="button" name="tf" value="✍ 退费">
	            </div>
	        </div>
	    </div>
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
<script type="text/javascript">
    jeDate.skin('gray');
</script>