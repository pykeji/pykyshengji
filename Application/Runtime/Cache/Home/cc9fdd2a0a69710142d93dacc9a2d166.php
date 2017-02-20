<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>中药诊治统计查询_中医健康管理系统</title>
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/chaxun.css">
	<script type="text/javascript" src="/zysystem/Public/muban/assets/jedate/jedate.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.easyui.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<div class="tool">
		<span class="sm">说明：本统计只针对已完成就诊的病人</span>
		<input type="button" name="query" value="✔ 统计">
		<input type="button" name="print" value="℗ 打印">
		<!-- <input type="button" name="exit" value="✘ 退出"> -->
		<p id="demo"></p>
	</div>
	<div class="zyzz_top">
		<img src="/zysystem/Public/muban/assets/img/chaxun.png" width="30" height="30">
		<div class="h">查询条件:</div>
	</div>
	<div class="zyzz_cxtj">
		<span>日期范围:</span>
			<input id="start" name="zyzz_start" type="text" readonly onClick="jeDate({dateCell:'#start',format:'YYYY-MM-DD'})"> <b>至</b>
			<input id="end" name="zyzz_end" type="text" readonly onClick="jeDate({dateCell:'#end',format:'YYYY-MM-DD'})">
			&nbsp;&nbsp;
			<label><input type="checkbox" name="zyzz_nld" value="zyzz_nld">&nbsp;按年龄段</label>
			&nbsp;&nbsp;
			<label><input type="checkbox" name="zyzz_sex" value="zyzz_sex">&nbsp;按性别</label>
			<br><br>
			<span class="sm">提示信息：双击列标题可进行排序</span>
	</div>
	<div class="zyzz_center">
		<ul id="myTab" class="nav nav-tabs">
			<li class="active"><a href="#bingming" data-toggle="tab">按病名统计</a></li>
			<li><a href="#zhengxing" data-toggle="tab">按证型统计</a></li>
			<li><a href="#zhifa" data-toggle="tab">按治法统计</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade in active" id="bingming">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>年龄段</th>
							<th>性别</th>
							<th>中医病名</th>
							<th>人数</th>
							<th>例数</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tanmay</td>
							<td>Bangalore</td>
							<td>560001</td>
							<td>Uma</td>
							<td>Pune</td>
						</tr>
						<tr>
							<td>Sachin</td>
							<td>Mumbai</td>
							<td>400003</td>
							<td>Tanmay</td>
							<td>Bangalore</td>
						</tr>
						<tr>
							<td>Uma</td>
							<td>Pune</td>
							<td>411027</td>
							<td>Mumbai</td>
							<td>400003</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="zhengxing">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>年龄段</th>
							<th>性别</th>
							<th>中医病名</th>
							<th>人数</th>
							<th>例数</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sachin</td>
							<td>Mumbai</td>
							<td>400003</td>
							<td>Tanmay</td>
							<td>Bangalore</td>
							
						</tr>
						<tr>
							<td>Tanmay</td>
							<td>Bangalore</td>
							<td>560001</td>
							<td>Uma</td>
							<td>Pune</td>
						</tr>
						<tr>
							<td>Uma</td>
							<td>Pune</td>
							<td>411027</td>
							<td>Mumbai</td>
							<td>400003</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade" id="zhifa">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>年龄段</th>
							<th>性别</th>
							<th>中医病名</th>
							<th>人数</th>
							<th>例数</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Uma</td>
							<td>Pune</td>
							<td>411027</td>
							<td>Mumbai</td>
							<td>400003</td>
							
						</tr>
						<tr>
							<td>Sachin</td>
							<td>Mumbai</td>
							<td>400003</td>
							<td>Tanmay</td>
							<td>Bangalore</td>
						</tr>
						<tr>
							<td>Tanmay</td>
							<td>Bangalore</td>
							<td>560001</td>
							<td>Uma</td>
							<td>Pune</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript">
    	jeDate.skin('gray');
	</script>
</body>
</html>