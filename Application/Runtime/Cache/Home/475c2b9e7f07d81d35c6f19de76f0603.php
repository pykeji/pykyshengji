<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>退费_中医健康管理系统</title>
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zysystem/Public/muban/assets/css/huajia.css">
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
	<script src="/zysystem/Public/js/jeDate/jedate.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<div class="modal-header" style="margin-top:-1%">
		<h4 class="modal-title" id="myModalLabel">
	        <img src="/zysystem/Public/muban/assets/ico/minus.png" class="modal-img">
	        门诊退费
	    </h4>
	</div>
	<div class="modal-body">
	    <div class="modal-body-left">
	        <div class="modal-body-left-top">
	        <form id="chaxun" method="post" action="<?php echo U('Huajia/tuifei');?>">
	            收费日期：
	            <input type="text" name="sf_date" value="<?php echo ($sfrq); ?>" placeholder="请选择时间！" id="datebut" onClick="jeDate({dateCell:'#datebut',format:'YYYY-MM-DD'})" readonly="readonly" style="height:30px;">
	            <input type="button" name="query" onClick="chaxun()" value="✔ 查询">
	            <br><br>
	        </form>
	        </div>
	        <div class="modal-body-left-con">
	            <h4 class="tit"><img src="/zysystem/Public/muban/assets/img/014.png" class="body-img">发票信息</h4>
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
	            		<?php if(is_array($sfls)): $i = 0; $__LIST__ = $sfls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="trc" id="<?php echo ($vo["invoice_no"]); ?>">
	            				<td><?php echo ($vo["invoice_no"]); ?></td>
	            				<td><?php echo ($data["0"]["br_name"]); ?></td>
	            				<td align="right"><?php echo ($arr["$key"]["total"]); ?></td>
	            				<td><?php echo ($data["0"]["br_id"]); ?></td>
	            			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	            	</tbody>
	            </table>
	        </div>
	    </div>
	    <div class="modal-body-right">
	        <div class="modal-body-right-con">
	            <h4 class="tit"><img src="/zysystem/Public/muban/assets/img/iconpng.png" class="body-img">收费明细</h4>
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
	            	</tbody>
	            </table>
	        </div>
	    </div>
	</div>
	<div class="modal-footer">
	<form name="tf" id="tuifei" method="post" action="<?php echo U('Huajia/tuifei2');?>">
		<input type="hidden" id="checked_pjh" name="checked_pjh" value="">
	    <input type="button" id="tf" name="tf" onClick="tuifei()" value="✍ 退费">
	</form>
	</div>
	<!-- 双击弹框 -->
	<div class="dbdiv1" id="dbdiv1">
		<div class="dbexit"><input type="button" id="close" value="✘ 关闭" onClick="close()"></div>
		<table id="dbtab"></table>	
	</div>
</body>
</html>
<script type="text/javascript" src="/zysystem/Public/muban/assets/js/huajia.js"></script>
<script>
	//退费页面左边发票信息单击事件
	$(".trc").click(function(){
		$("#checked_pjh").val(this.children[0].innerHTML);
		var id = $(this).attr("id");
		$(this).toggleClass("trsty1");
		$(".trsty1").not(this).attr("class","trsty");
		$.ajax({
			type:"post",
			url:"/zysystem/index.php/Home/Huajia/tuifei1",
			dataType:"json",
			data:{"invoice_no":id},
			success:function(sflbarr){
				var str = "<thead><tr><th width='12%'>序号</th><th width='38%'>项目名称</th><th width='12%'>单位</th><th width='12%'>单价</th><th width='12%'>数量</th><th width='12%'>金额</th></tr></thead>";
				var ztotal = 0;
				for(var i=0;i<sflbarr.length;i++){
					str += "<tr class='sty2' name='tableSty' id='"+sflbarr[i]['id']+"'><td align='right'>"+sflbarr[i]['serial_no']+"</td><td align='left'>"+sflbarr[i]['item_name']+"</td><td>"+sflbarr[i]['units']+"</td><td align='right'>"+sflbarr[i]['unit_price']+"</td><td align='right'>"+sflbarr[i]['amount']+"</td><td align='right'>"+sflbarr[i]['total']+"</td></tr>";
						ztotal += parseFloat(sflbarr[i]['total']);
				}
				str += "<tr><td colspan='3' align='right'><font color='red'><b>合计金额：</b></font></td><td colspan='3' align='right'><font color='red'><b>"+ztotal.toFixed(2)+"</b></font></td></tr>";
				$(".tab6").html(str);
				}
			})
		})

		//中药or西药双击事件
		$(document).on('dblclick','.sty2',function(){
			$(".dbdiv1").css('display','block');
			$(".dbdiv1").css('width',(window.screen.width)/2);
			$(".dbdiv1").css('height',(window.screen.height)/2);
        	$(".dbdiv1").fadeTo('slow', 0.99); 
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
			$(".dbdiv1").css('display','none');
		})

		$("#tf").click(function(){
			if($("#checked_pjh").val() == ''){
				return false;
			}else{
				$("#tuifei").submit();
			}
		})
</script>
<script type="text/javascript">
	jeDate.skin('gray');
</script>