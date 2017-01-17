<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>费用汇总查询_中医健康管理系统</title>
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/chaxun.css">
	<script type="text/javascript" src="/zysystem/Public/muban/assets/jedate/jedate.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.easyui.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<div class="fyhz_top">
		<img src="/zysystem/Public/muban/assets/img/chaxun.png" width="30" height="30">
		<div class="h">查询条件:</div>
	</div>
	<div class="fyhz_cxtj">
		<span>日期范围:</span>
			<input id="start" name="start" type="text" readonly onClick="jeDate({dateCell:'#start',format:'YYYY-MM-DD'})"> <b>至</b>
			<input id="end" name="end" type="text" readonly onClick="jeDate({dateCell:'#end',format:'YYYY-MM-DD'})">
			&nbsp;&nbsp;
			<label><input type="radio" name="data" value="year">&nbsp;按年</label>
			&nbsp;&nbsp;
			<label><input type="radio" name="data" value="month">&nbsp;按月</label>
			&nbsp;&nbsp;
			<label><input type="radio" name="data" value="day">&nbsp;按日</label>
	</div>
	<div class="fyhz_center">
		<table class="table table-striped">
			<caption>费用汇总统计</caption>
			<caption>查询日期：</caption>
			<thead>
				<tr>
					<th>日期</th>
					<th>项目名称</th>
					<th>合计</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
				</tr>
				<tr>
					<td>Sachin</td>
					<td>Mumbai</td>
					<td>400003</td>
				</tr>
				<tr>
					<td>Uma</td>
					<td>Pune</td>
					<td>411027</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="fyhz_bottom">
		<div class="fyhz_bottom_c">
			<span class="btn btn-success"><p>统计</p></span>
			<span class="btn btn-warning"><p>打印</p></span>
			<span class="btn btn-warning"><p>清除</p></span>
			<span class="btn btn-danger"><p>退出</p></span>
			<p class=""></p>
		</div>
	</div>
	<script type="text/javascript">
    	jeDate.skin('gray');
	</script>
</body>
</html>