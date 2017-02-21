<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>收费综合查询_中医健康管理系统</title>
	<link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zySystem/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zySystem/Public/muban/assets/css/chaxun.css">
	<script type="text/javascript" src="/zySystem/Public/muban/assets/jedate/jedate.js"></script>
	<script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.easyui.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<form action="<?php echo U('Chaxun/sfzonghe');?>" method="post">
		<div class="tool">
			<input type="button" id="jstijiaoform" name="query" value="✔ 查询">
			<input type="button" name="print" value="℗ 打印">
			<p id="demo"></p>
		</div>
		<div class="sfzh_top">
			<img src="/zySystem/Public/muban/assets/img/chaxun.png" width="30" height="30">
			<div class="h">查询条件:</div>
		</div>
		<div class="cxtj">
			<table>
				<tr>
					<td width="40%">
						<span>日期范围:</span>
						<input type="text" name="p_datekai" class="ghrq" id="datebut1" onClick="jeDate({dateCell:'#datebut1',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"> <b>至</b>
						<input type="text" name="p_datezhong" class="ghrq" id="datebut2" onClick="jeDate({dateCell:'#datebut2',isTime:true,format:'YYYY-MM-DD'})" onfocus="new Calendar().show(this)" readonly="readonly">
					</td>
					<td width="20%">
						<span>操&nbsp;&nbsp;作&nbsp;员:</span>
						<select name="operator_code">
							<option value="">全部</option>
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($vo["username"]); ?>"><?php echo ($vo["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</td>
					<td width="25%">
						<span>发票号:</span>
						<input type="text" name="invoice_no" value="<?php echo ($chaxuntiaojian["invoice_no"]); ?>">
					</td>
					<td width="15%"></td>
				</tr>
				<tr height="10"></tr>
				<tr>
					<td>
						<span>病人姓名:</span>
						<input type="text" name="br_name" value="">
					</td>
					<td>
						<span>收费类型:</span>
						<select name="bill_status">
							<option value="">全部</option>
							<option value="1">收费</option>
							<option value="2">退费</option>
						</select>
					</td>
					<td>
						<span>病历号:</span>
						<input type="text" name="clinic_num" value="">
					</td>
					<td>
						<span class="checkbox pull-left"><label><input type="checkbox" name="sf_bfghf" value="yes">不含挂号费</label></span>
					</td>
				</tr>
			</table>
		</div>
	</form>
	<div class="sfzh_center">
		<table class="table table-striped">
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
				<?php if(is_array($dodata)): $i = 0; $__LIST__ = $dodata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dovo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($dovo["charge_date"]); ?></td>
					<td><?php echo ($dovo["invoice_no"]); ?></td>
					<td><?php echo ($dovo["clinic_num"]); ?></td>
					<td><?php echo ($dovo["br_name"]); ?></td>
					<td><?php echo ($dovo["item_code"]); ?></td>
					<td><?php echo ($dovo["unit_price"]); ?></td>
					<td><?php echo ($dovo["amount"]); ?></td>
					<td><?php echo ($dovo["total"]); ?></td>
					<td><?php echo ($dovo["operator_code"]); ?></td>
					<td><?php echo ($dovo["return_date"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
	<script type="text/javascript">
    	jeDate.skin('gray');
	</script>
	<!-- js提交form表单 -->
	<script type="text/javascript">
		$("#jstijiaoform").click(function(){
			$("form").submit();
		});
	</script>
	<script src="/zySystem/Public/js/shijian.js"></script>
</body>
</html>