<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>划价收费_中医健康管理系统</title>
	<link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/zySystem/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zySystem/Public/muban/assets/css/huajia.css">
	<link rel="stylesheet" href="/zySystem/Public/muban/assets/css/chaxun.css">
	<script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.easyui.min.js"></script>
	<script>
		function ajaxFun(){
			$.ajax({
				type:"post",
				url:"/zySystem/index.php/Home/Huajia/ajax",
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
		var zje = 0;
		function zh(){
			if($("#name").val() == ''){
				return false;
			}else{
				var number = $("#number").val();
				var price = $("#danjia").val();
				var zh = (number*price).toFixed(2);
				$("#jine").val(zh);
				var flag = false;
				$('#number').keypress(function(event){
				    var keycode = (event.keyCode ? event.keyCode : event.which);
				    if(keycode == '13'){
				    	if(!flag == true){
				    		var id = $(".tab4").find("tr").length;
			                var name = $("#name").val();
			                var danwei = $("#danwei").val();
			                var danjia = $("#danjia").val();
			                var number = $("#number").val();
			                var jine = $("#jine").val();
			                zje = (Number(zje) + Number(jine)).toFixed(2);
			                if(id-1 == 0){
			                	$(".tab4").append("<tr><td>"+id+"</td><td class=left>"+name+"</td><td class=left>"+danwei+"</td><td>"+danjia+"</td><td>"+number+"</td><td>"+jine+"</td></tr><tr><td colspan='3'><font color='red'><b>合计金额：</b></font></td><td colspan='3' class='right'><font color='red'><b>"+zje+"</b></font></td></tr>");
			                }else{
			                	if(!flag == true){
			                		var id = id - 1;
			                		$(".tab4 tr:last").before("<tr><td>"+id+"</td><td class=left>"+name+"</td><td class=left>"+danwei+"</td><td>"+danjia+"</td><td>"+number+"</td><td>"+jine+"</td></tr>");
			                		$(".tab4 tr td:last").text(zje);
			                		$(".tab4 tr td:last").css("color","red");
			                		$(".tab4 tr td:last").css("font-weight","bold");
			                	}
			                }
			                flag = true;

			                //清空上方数据
			                $("#name").val('');
				    		$("#guige").val('');
			                $("#danwei").val('');
			                $("#danjia").val('.00');
			                $("#number").val('.00');
			                $("#jine").val('.00');
				    	}else{
				    		return false;
				    	}
				    }  
				});
			}
		}
	</script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<div class="tool">
		<input type="button" name="sf" value="¥ 收费">
		<input type="button" name="tf" data-toggle="modal" data-target="#myModal" value="✍ 退费">
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
						<img src="/zySystem/Public/muban/assets/img/chufang.png" width="23" height="23">
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
						<input id="name" class="easyui-combogrid" data-options="
							panelWidth: 710,
							idField: 'name',
							textField: 'name',
							url: '/zySystem/Public/muban/assets/css/datagrid_data.json',
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
					<td><input type="text" id="guige" name="guige" value="" disabled></td>
					<td><input type="text" id="danwei" name="danwei" value="" disabled></td>
					<td><input type="text" id="danjia" name="danjia" value=".00"></td>
					<td><input type="text" id="number" name="number" value=".00" onChange="zh()"></td>
					<td><input type="text" id="jine" name="jine" value=".00" disabled></td>
				</tr>
			</table>
		</div>
		<div class="center_c">
			<table class="tab3">
				<tr>
					<td class="tab3_l">
						<img src="/zySystem/Public/muban/assets/img/iconpng.png" width="23" height="23">
						<font size="+1">收费列表</font>
					</td>
				</tr>
			</table>
			<div class="table4">
				<table class="tab4">
					<tr>
						<th width="15%">序号</th>
						<th width="25%">项目名称</th>
						<th width="15%">单位</th>
						<th width="15%">单价</th>
						<th width="15%">数量</th>
						<th width="15%">金额</th>
					</tr>
				</table>
			</div>
		</div>
	</div> 
	<!-- 模态框（Modal） -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
	                	&times;
	                </button>
	                <h4 class="modal-title" id="myModalLabel">
	                	<img src="/zySystem/Public/muban/assets/ico/minus.png" class="modal-img">
	                	门诊退费
	                </h4>
	            </div>
	            <div class="modal-body">
					<div class="modal-body-left">
						<div class="modal-body-left-top">
							收费日期：<input type="text" name="sfdata" value="2017-02-14">
							<input type="button" name="query" value="✔ 查询">
							<br><br>
						</div>
						<div class="modal-body-left-con">
							<h4 class="tit"><img src="/zySystem/Public/muban/assets/img/014.png" class="body-img">
							发票信息</h4>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>票据号</th>
										<th>姓名</th>
										<th>收费金额</th>
										<th>病历号</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tanmay</td>
										<td>Bangalore</td>
										<td>560001</td>
										<td>Tanmay</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="modal-body-right">
						<div class="modal-body-right-con">
							<h4 class="tit"><img src="/zySystem/Public/muban/assets/img/iconpng.png" class="body-img">
							收费明细</h4>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="10%">序号</th>
										<th width="50%">项目名称</th>
										<th width="10%">单位</th>
										<th width="10%">单价</th>
										<th width="10%">数量</th>
										<th width="10%">金额</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tanmay</td>
										<td>Bangalore</td>
										<td>560001</td>
										<td>Tanmay</td>
										<td>560001</td>
										<td>Tanmay</td>
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
</body>
</html>