<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>收费综合查询_中医健康管理系统</title>
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/chaxun.css">
	<script type="text/javascript" src="/zysystem/Public/muban/assets/jedate/jedate.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.easyui.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<div class="sfzh_top">
		<img src="/zysystem/Public/muban/assets/img/chaxun.png" width="30" height="30">
		<div class="h">查询条件:</div>
	</div>
	<div class="cxtj">
		<table>
			<tr>
				<td width="40%">
					<span>日期范围:</span>
					<input id="start" name="sf_start" type="text" readonly onClick="jeDate({dateCell:'#start',format:'YYYY-MM-DD'})"> <b>至</b>
					<input id="end" name="sf_end" type="text" readonly onClick="jeDate({dateCell:'#end',format:'YYYY-MM-DD'})">
				</td>
				<td width="20%">
					<span>操&nbsp;&nbsp;作&nbsp;员:</span>
					<select name="sf_caozuoy">
						<option value="0">全部</option>
						<option value="1">管理员</option>
						<option value="2">用户</option>
					</select>
				</td>
				<td width="25%">
					<span>发票号:</span>
					<input type="text" name="sf_fapiaoh" value="">
				</td>
				<td width="15%"></td>
			</tr>
			<tr height="10"></tr>
			<tr>
				<td>
					<span>病人姓名:</span>
					<input type="text" name="sf_brname" value="">
				</td>
				<td>
					<span>收费类型:</span>
					<select name="sf_caozuoy">
						<option value="0">全部</option>
						<option value="1">现金</option>
						<option value="2">农合</option>
					</select>
				</td>
				<td>
					<span>病历号:</span>
					<input type="text" name="sf_binglih" value="">
				</td>
				<td>
					<span class="checkbox pull-left"><label><input type="checkbox" name="sf_bfghf" value="yes">不含挂号费</label></span>
				</td>
			</tr>
		</table>
	</div>
	<div class="sfzh_center">
		<table class="table table-striped">
			<caption>查询日期：</caption>
			<thead>
				<tr>
					<th>操作日期</th>
					<th>发票号</th>
					<th>病历号</th>
					<th>病人姓名</th>
					<th>收费项目</th>
					<th>单价</th>
					<th>数量</th>
					<th>金额</th>
					<th>操作员</th>
					<th>退费日期</th>
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
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
					<td>Tanmay</td>
				</tr>
				<tr>
					<td>Sachin</td>
					<td>Mumbai</td>
					<td>400003</td>
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
					<td>Tanmay</td>
				</tr>
				<tr>
					<td>Uma</td>
					<td>Pune</td>
					<td>411027</td>
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
					<td>Tanmay</td>
					<td>Bangalore</td>
					<td>560001</td>
					<td>Tanmay</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="sfzh_bottom">
		<div class="sfzh_bottom_c">
			<span class="btn btn-success"><p>查询</p></span>
			<span class="btn btn-warning"><p>打印</p></span>
			<span class="btn btn-success"><p>刷新</p></span>
			<span class="btn btn-danger"><p>退出</p></span>
			<p class=""></p>
		</div>
	</div>
	<script type="text/javascript">
    	jeDate.skin('gray');
	</script>
</body>
</html>