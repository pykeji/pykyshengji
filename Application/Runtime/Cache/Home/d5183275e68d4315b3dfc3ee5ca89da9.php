<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>划价收费_中医健康管理系统</title>
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/huajia.css">
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.easyui.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<div class="tool">
		<input type="button" name="sf" value="¥ 收费">
		<input type="button" name="tf" value="✍ 退费">
		<input type="button" name="sc" value="✘ 删除">
		<p id="demo"></p>
	</div>
	<div class="top">
		<span>病历号:<b><?php echo ($_SESSION['id']); ?></b></span>
		<span>姓名:<b><?php echo ($data["0"]["br_name"]); ?></b></span>
		<span>性别:<b><?php echo ($data["0"]["xb"]); ?></b></span>
		<span>年龄:<b><?php echo ($data["0"]["nl"]); ?></b></span>
		<span>就诊日期:<b><?php echo ($data["0"]["jz_date"]); ?></b></span>
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
							<font color="#C63300">201701090001</font>
						</h4>
					</td>
				</tr>
			</table>
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
						<input class="easyui-combogrid" data-options="
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
							fitColumns: true
						">
					</td>
					<td><input type="text" name="guige" value="" disabled></td>
					<td><input type="text" name="danwei" value="" disabled></td>
					<td><input type="text" name="danjia" value="" disabled></td>
					<td><input type="text" name="number" value=".00"></td>
					<td><input type="text" name="jine" value="" disabled></td>
				</tr>
			</table>
		</div>
		<div class="center_c">
			<table class="tab3">
				<tr>
					<td class="tab3_l">
						<img src="/zysystem/Public/muban/assets/img/iconpng.png" width="23" height="23">
						<font size="+1">收费列表</font>
					</td>
				</tr>
			</table>
			<div class="table4">
				<table class="tab4">
					<tr>
						<th>序号</th>
						<th width="300">项目名称</th>
						<th>单位</th>
						<th>单价</th>
						<th>数量</th>
						<th>金额</th>
					</tr>
					<tr>
						<td>1</td>
						<td class="left">西药</td>
						<td></td>
						<td>4.00</td>
						<td>1.00</td>
						<td>4.00</td>
					</tr>
					<tr>
						<td>2</td>
						<td class="left">中草药</td>
						<td></td>
						<td>12.60</td>
						<td>1.00</td>
						<td>12.60</td>
					</tr>
					<tr>
						<td>3</td>
						<td class="left">西药</td>
						<td></td>
						<td>3.00</td>
						<td>3.00</td>
						<td>9.00</td>
					</tr>
					<tr>
						<td>4</td>
						<td class="left">中草药</td>
						<td></td>
						<td>5.60</td>
						<td>4.00</td>
						<td>22.40</td>
					</tr>
					<tr>
						<td colspan='2'><font color="red"><b>合计金额：</b></font></td>
						<td colspan="4"><font color="red"><b>48.00</b></font></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>