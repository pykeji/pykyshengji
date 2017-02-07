<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>药品使用统计查询_中医健康管理系统</title>
	<link rel="stylesheet" href="/zysystem1/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zysystem1/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zysystem1/Public/muban/assets/css/chaxun.css">
	<script type="text/javascript" src="/zysystem1/Public/muban/assets/jedate/jedate.js"></script>
	<script type="text/javascript" src="/zysystem1/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zysystem1/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zysystem1/Public/muban/assets/js/jquery.easyui.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<div class="tool">
		<input type="button" name="query" value="统计">
		<input type="button" name="print" value="打印">
		<input type="reset" name="clear" value="清除">
		<!-- <input type="button" name="exit" value="退出"> -->
		<p id="demo"></p>
	</div>
	<div class="ypsy_top">
		<img src="/zysystem1/Public/muban/assets/img/chaxun.png" width="30" height="30">
		<div class="h">查询条件:</div>
	</div>
	<div class="ypsy_cxtj">
		<span>日期范围:</span>
			<input id="start" name="start" type="text" readonly onClick="jeDate({dateCell:'#start',format:'YYYY-MM-DD'})"> <b>至</b>
			<input id="end" name="end" type="text" readonly onClick="jeDate({dateCell:'#end',format:'YYYY-MM-DD'})">
			&nbsp;&nbsp;
			<span>按药名:</span><input type="text" name="ypsy_ypname" value="">

	</div>
	<div class="ypsy_center">
		<table class="table table-striped">
			<caption>药品使用统计</caption>
			<caption>查询日期：</caption>
			<thead>
				<tr>
					<th>药品名称</th>
					<th>规格</th>
					<th>剂型</th>
					<th>数量</th>
					<th>单位</th>
					<th>金额</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
				</tr>
				<tr>
					<td>Sachin</td>
					<td>Mumbai</td>
					<td>400003</td>
					<td>Sachin</td>
					<td>Mumbai</td>
					<td>400003</td>
				</tr>
				<tr>
					<td>Uma</td>
					<td>Pune</td>
					<td>411027</td>
					<td>Uma</td>
					<td>Pune</td>
					<td>411027</td>
				</tr>
			</tbody>
		</table>
	</div>
	<script type="text/javascript">
    	jeDate.skin('gray');
	</script>
</body>
</html>