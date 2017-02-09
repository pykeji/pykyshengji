<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<head>
	<link rel="stylesheet" href="/zysystem1/Public/css/xykf.css">
	<link rel="stylesheet" href="/zysystem1/Public/css/bootstrap.css">
	<script type="text/javascript" src="/zysystem1/Public/jq/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/zysystem1/Public/js/xykf.js"></script>
	<style type="text/css">
		html,body{
			height:100%;
			width:100%;
		}
	</style>
	</head>
	<body  oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<!-- 最外围大div -->
	<div id="big">
		<div id="title">
			处方信息录入
		</div>
		<div id="content">
			<div id="inter">
				<table id="ttab">
					<tr class="tr1">
						<th class="th1">
							编号
						</th>
						<th class="th1">
							药品编码
						</th>
						<th class="th1">
							药品名称
						</th>
						<th class="th1">
							药品规格
						</th>
						<th class="th1">
							药品含量
						</th>
						<th class="th1">
							最小包装
						</th>
						<th class="th1">
							数量
						</th>
						<th class="th1">
							总量
						</th>
						<th class="th1">
							给药途径
						</th>
						<th class="th1">
							次用量
						</th>
						<th class="th1">
							日次数
						</th>
						<th class="th1">
							特殊用法
						</th>
						<th class="th1">
							处方天数
						</th>
					</tr>
					<tr class="tr2">
						<td class="td1">
							<b class="b1">1</b>
						</td>
						<td class="td1">
							<input type="text" class="textlon">
						</td>
						<td class="td1">
							<input type="text"  class="ypname">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<select class="textlon"><option value="1">静滴</option></select>
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00">
						</td>
						<td class="td1">
							<select class="textlon"><option value="1">1次/日</option></select>
						</td>
						<td class="td1">
							<input type="radio" name="tsyf">无<input type="radio" name="tsyf">皮试<input type="radio" name="tsyf">小壶
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
					</tr>

				</table>
				<div id="aja">
					
				</div>
				<button class="btn btn-success" id="jia">加一味药</button><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
		</div>
			<div id="bzz">
				备注
			</div>
			<div id="bzy">
				<textarea id="bztext"></textarea>
				
			</div>
			<button class="btn btn-info" id="qdcf">确定此方</button>
			<button class="btn btn-danger" id="ys">预审</button>
	</body>
</html>