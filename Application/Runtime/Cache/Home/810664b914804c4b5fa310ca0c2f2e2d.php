<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zysystem/Public/yeMiancss/kaiFang5.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zysystem/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zysystem/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/zysystem/Public/bootstrap/js/bootstrap.min.js"></script>
    <style>
    	#fjmtab tr{
    		cursor:pointer;
    	}
		.py{
			background-color:#FFFFFF;color:red;margin-right:5px;
		}
		.text{
			width:100%;border:none;outline:none;
			height:100%;
		}
		.rtd{
			border-left:1px solid #ccc;height:35px;overflow:hidden;
			white-space:nowrap;
		}
		.trsty{
			border-bottom:1px solid #ccc;height:35px;
			line-height:35px;
		}
    </style>
</head>
<script>
$(document).on("input","#impid",function(){
	$.ajax({
			type:"post",
			url:"/zySystem/index.php/Home/Kaifang/aexpe",
			dataType:"json",
			data:{"pym":$('#impid').val()},
			success:function(e){
				var trd='<tr height="35"><th class="trdebingming">处方名称</th><th class="trdebingming1">主治</th></tr>';
				for(var i=0;i<e.length;i++){
					trd+='<tr class="trsty" id='+e[i]['id']+' onclick="rightcon(id)"><td>'+e[i]['name']+'</td><td class="rtd">'+e[i]['attending']+'<td></tr>';
				}
				$("#fjmtab").html(trd);
			}
		}); 
});
$(document).ready(function(){
	$('.py').click(function(){
		var ss=this.innerHTML;
		var kk=$('#impid').val();
		$('#impid').val(kk+ss);
		$.ajax({
			type:"post",
			url:"/zySystem/index.php/Home/Kaifang/aexpe",
			dataType:"json",
			data:{"pym":$('#impid').val()},
			success:function(e){
				var trd='<tr height="35"><th class="trdebingming">处方名称</th><th class="trdebingming1">主治</th></tr>';
				for(var i=0;i<e.length;i++){
					trd+='<tr class="trsty" id='+e[i]['id']+' onclick="rightcon(id)"><td>'+e[i]['name']+'</td><td class="rtd">'+e[i]['attending']+'<td></tr>';
				}
				$("#fjmtab").html(trd);
			}
		}); 
	});
	$('#fjmtab tr').click(function(){
		$(this).css("background-color","#FE9");
		$('#fjmtab tr').not(this).css("background-color","#fff");
	});
});
function rightcon(id){
	var thid=document.getElementById(id);
	$(thid).css("background-color","#FE9");
	$('#fjmtab tr').not(thid).css("background-color","#fff");
	var sl=$(thid).find('td:first').text();
	$('#rname').html(sl);
	$.ajax({
		type:"post",
		url:"/zySystem/index.php/Home/Kaifang/aexpe",
		dataType:"json",
		data:{"tree":id},
		success:function(e){
			var str='';
			for(var i=0;i<e.length;i++){
				str+='<div style="width:700px;"><div class="d1"><div class="d2">'+e[i]["serial_no"]+'</div><div class="d3">'+e[i]["yf"]+'</div><div class="d4">'+e[i]["drug_name"]+'</div><div class="d5">'+e[i]["sl"]+e[i]["dw"]+'</div></div></div>';
			}
			$('#fjtab').html(str);
		}
	});
	$.ajax({
		type:"post",
		url:"/zySystem/index.php/Home/Kaifang/fjcon",
		dataType:"json",
		data:{"tree":id},
		success:function(f){
			console.log(f);
		}
	}); 
}
</script>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<!-- 上 -->
	<div class="ka1dadekuang1">
		<fieldset class="ka1" >
			<legend class="ka11">
				点击按钮查询方剂名称
			</legend>
			<div class="kawenzi ">
				&nbsp;
<<<<<<< HEAD
				<img src="/zySystem/Public/img/tu1.jpg" style="margin-top:20px;width:40px; "  alt="图片加载中。。。。">
=======
				<img src="/zysystem/Public/img/tu1.jpg" style="margin-top: 20px;  width: 40px; "  alt="图片加载中。。。。">
>>>>>>> f845c563406bc435aafdcc24c8618eaa596116b8
				&nbsp;
				<div class="kuangneianniu">
					<button class="py">A</button>
					<button class="py">B</button>
					<button class="py">C</button>
					<button class="py">D</button>
					<button class="py">E</button>
					<button class="py">F</button>
					<button class="py">G</button>
					<button class="py">H</button>
					<button class="py">I</button>
					<button class="py">J</button>
					<button class="py">K</button>
					<button class="py">L</button>
					<button class="py">M</button>
					<button class="py">N</button>
					<button class="py">O</button>
					<button class="py">P</button>
					<button class="py">Q</button>
					<button class="py">R</button>
					<button class="py">S</button>
					<button class="py">T</button>
					<button class="py">U</button>
					<button class="py">V</button>
					<button class="py">W</button>
					<button class="py">X</button>
					<button class="py">Y</button>
					<button class="py">Z</button>
				</div>
			</div>
		</fieldset>
	</div>
	<!-- 下 -->
	<div style="width:100%;height:100%;">
		<!-- 下左 -->
		<div class="xiaZuo">
			<div  class="xiaZuosousuo">
				<div class="input-group ">  
			       <input type="text" class="form-control"placeholder="请输入病名" id="impid"/>  
		            <span class="input-group-btn">  
		                <button class="btn btn-info btn-search">
		               		<b style="color: #000000;">查找</b>
		               	</button>  
				</div>
			</div>
			<a href="/zySystem/index.php/Home/Kaifang/aexpe">test</a>
			<div class="xiaZuoshang">
				
				<div class="xiaZuoshang3 ">
					<button  class="btn  btn-info" data-toggle="modal" data-target="#tianjiachufang">
						<b style="color:#000000;font-size:14px;">添加处方</b>	
					</button>
					<button  class="btn btn-info">
						<b id="shanchuchufang" style="color:#000000;">删除处方</b>	
					</button>
					
				</div>
				<!-- 添加处方模态框开始 -->
				<div class="modal fade" id="tianjiachufang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			        <div class="modal-content">
<<<<<<< HEAD
			            <form action="/zySystem/index.php/Home/Kaifang/addsub" method="post">
=======
			            <form action="/zysystem/index.php/Home/Kaifang/jysub" method="post">
>>>>>>> f845c563406bc435aafdcc24c8618eaa596116b8
				            <div class="modal-header">
				                <input type="button" value="&times;" class="close" data-dismiss="modal" aria-hidden="true">
				                <input type="text" name="name" placeholder="此处填写处方名称">
				            </div>
				            <textarea class="modal-body text" name="Attending" placeholder="此处填写处方主治功能"> 
				            </textarea>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				                <button type="submit" class="btn btn-primary">确认添加</button>
				            </div>
			            </form>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal -->
			</div>
				<!-- 添加处方模态框结束 -->
			</div>
				<!-- 方剂列表 -->
				<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="xiaZuochufang">
					<table class="table table-condensed" id="fjmtab">
				 	<tr height="35">
				 		<th class="trdebingming">处方名称</th>
				 		<th class="trdebingming1">主治</th>
				 	</tr>
					<?php if(is_array($mcon)): foreach($mcon as $key=>$cn): ?><tr id="<?php echo ($cn["id"]); ?>" onclick="rightcon(id)">
							<td><?php echo ($cn["name"]); ?></td>
							<td class="rtd">
								<?php echo ($cn["attending"]); ?>
							</td>
						</tr><?php endforeach; endif; ?>
					</table>
				</div>
		</div>
		<!-- 下右 -->
		<div class="youchufang">
					<div class="xiaYou1">
						<!-- 左 -->
						<div class="xiaYou2" id="rname">
							处方名称
						</div>
						<!-- 右 -->
						<div style="  margin-top: -45px; margin-left:270px;">
							<!-- 详情按钮 -->
							<button  class="btn btn-info">
								<b style="color:#000;">保存处方</b>	
							</button>
							<button  class="btn btn-danger" data-toggle="modal" data-target="#myXiangQModal"  >
								<b style="color: #000000; ">药解</b>
							</button>
							<button id="shang" class="btn  btn-warning "  style="color: #000000; " >
								<!-- <span class=" glyphicon glyphicon-arrow-up"></span> -->
								<b style="color: #000000; ">上移</b>
							</button>
							<button  id="xia" class="btn  btn-warning "  style="color: #000000; " >
								<!-- <span class=" glyphicon glyphicon-arrow-down"></span> -->
								<b style="color: #000000; ">下移</b>
							</button>
							<button id="chuFangJiayao" class="btn  btn-warning  "  style="color: #000000; " >
								<!-- <span class="glyphicon glyphicon-plus-sign"></span> -->
								<b style="color: #000000; ">加药</b>
							</button>
							<button  id="chuFangjianyao"  class="btn  btn-warning  "  style="color: #000000; ">
								<!-- <span class="glyphicon glyphicon-minus-sign"></span> -->
								<b style="color: #000000; ">减药</b>
							</button>
							<!-- 模态框内容开始 -->
							 <div class="modal fade" id="myXiangQModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					            <div class="modal-dialog" >
					                    <!-- 滚动监听 -->
					                    <div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:530px; width:600px; overflow:auto; border:1px #EFD411 solid; background-color:#FFFBF0 ">
					                    	<P><b>名称：治感冒的</b></P>
					                    	
					                    	<br>
					                    	<br>
					                    	<br>
					                    	<P><b>来源：中医科学院</b></P>
					                    	<br>
					                    	<br>
					                    	<br>
					                    	<br>
					                    	<P><b>内容：就是治感冒</b></P>
					                    	<P><b>内容：专治治感冒</b></P>
					                    	<P><b>内容：就是治感冒</b></P>
					                    	<P><b>功能：纯治治感冒</b></P>
					                    	<P><b>功能：内容随意改</b></P>
					                    </div>
					                <div data-dismiss="modal" style=" width:40px; position:absolute; top:0px;right:20px;"><button type="button" class="close btn btn-primary btn-lg" aria-hidden="true">&times;</button></div>
					            </div><!-- /.modal-dialog -->
					        </div>
							<!-- 模态框内容结束 -->
						</div>
					</div>
					<!-- 中 -->
					<div class="xiaYouchuFang ">
						<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="xiaYouchuFang1 ">
					</div>
					<!-- 下 -->
					<div style=" margin-top: 20px;  width: 100%; color:red;">
						&nbsp; &nbsp;共 &nbsp; &nbsp; n &nbsp; &nbsp;味 药
							<!-- 按钮 -->
				   		<!-- <div class="xuandinagcfang" >
				    		<button  class="btn  btn-success" style="width: 100px; " ><b style="color: #000000; ">选定此方</b></button>
				    		<button  class="btn btn-warning" style="width: 100px; margin-left: 20px; " ><b style="color: #000000; ">退出</b></button>
				    	</div> -->
					</div>
		</div>
		<div class="zhongyouanniu">
					<!-- 按钮 -->
					<div>
						<button  class="btn btn-success" style="width: 100px;"><b style="color: #000000;">选定此方</b></button>
					</div>
					<br>
		    		<div class="chuFangHeBingtuichu">
		    			<button  class="btn btn-danger" style="width: 100px;"><b style="color: #000000; width: 100px;">退出</b></button>
		    		</div>
				</div>
				<div class="qingchuzhongyouanniu"></div>
	</div>
	<!-- // 点击换色的js -->
	
	<script type="text/javascript">
		// 删除处方的js
		$("#shanchuchufang").click(function(){
			 //利用对话框返回的值 （true 或者 false）
 
    if(confirm("你确信要删除该处方吗"))
    {
 		alert("已删除")
     }
		});
		// <!-- 点击换色的js -->
		function changeTrColor(obj){  
		// alert(56); 
		    var _table=obj.parentNode;
		    for (var i=0;i<_table.rows.length;i++){
		        _table.rows[i].style.backgroundColor="";
		    }   
		    obj.style.backgroundColor="#3399FF";
		}
	</script>
	<!--上移下移css-->
	<style type="text/css">
		/*.sty{background-color:#ffffff;}*/
		.sty1{background-color:cyan;}
	</style>
	<!-- 加药减药 -->
	<script type="text/javascript">
		// 加药
		// $("#chuFangJiayao").click(function(){
		$("#chuFangJiayao").on('click',function(){

			//var num = $(".yaopinshidijige:last").html();
			$(".yongLaiKaZhude:last").after('<div class="yongLaiKaZhude" style="width:700px"><div class="sty" style="float:left;margin:5px;border-radius:5px;width:150px;height:100px;border:1px #000 solid"><div class="yaopinshidijige" style="border:1px #FFFBF0 solid;width:10px;position:relative;left:5px;top:5px;color:red"><input type="text" name="drug_no" value="" style="width:1em;height:15px;font-color:red;"></div><div class="tihuandeneirong"><div style="border:1px #000 solid;width:40px;border-width:0 0 1px 0;position:relative;left:100px;top:-10px"><input type="text" name="usage" value="" class="chufangyaopinjianfa"></div><div style="border:1px #000 solid;width:80px;border-width:0 0 1px 0;position:relative;left:10px;top:-5px;font-size:20px"><input type="text" value="" class="chufangyaopinmingcheng"></div><div style="border:1px #000 solid;width:70px;border-width:0 0 1px 0;position:relative;left:50px;top:0;text-align:right"><input type="text" name="amount" value="" class="chufangyaopinshuliang"><input type="text" name="drug_units" value="克" style="width:1.2em;height:20px;"></div></div></div></div>');
		});
		// 减药
		$("#chuFangjianyao").on('click',function(){
			// alert(123);
			if ($(".sty1").html()) {
				var a = $(".sty1").parent(".yongLaiKaZhude").empty();
			}else{
				alert('哎呦，你忘了选中药品');
			}
		});
	</script>
		<!--上移下移js-->
		<script type="text/javascript">
			//    点击变为选定状态
			// $(".sty").click(function(){
			$(".xiaYouchuFang").on('click','.sty',function(){
//        有sty1就删除没有就创建
				$(this).toggleClass("sty1");
//        除了选定的意外所有的sty1变为sty
				$(".sty1").not(this).attr("class","sty");
			});
			$("#shang").click(function(){
//			选中的
				var axuanzhong=$(".sty1>div:last-child").html();
//        判断父元素前一个是否存在
				if($(".sty1").parent().prev().html()){
//            alert('有');
					//			前一个的
					var xuanqian =$(".sty1").parent(".yongLaiKaZhude").prev().children().children(".tihuandeneirong").html();
//           交换内容
					$(".sty1").parent(".yongLaiKaZhude").prev().children().children(".tihuandeneirong").html(axuanzhong);
					$(".sty1>div:last-child").html(xuanqian);
					//        前一个也被选取
					var c = $(".sty1").parent(".yongLaiKaZhude").prev().children().attr("class","sty1");
//        使选中的里面最后一个不被选取
					$(".sty1:last").attr("class","sty");
				}else{
//            判断是否有药品被选中
					if($(".sty1").html()){
						alert('放弃吧，当前的药品已经是第一个了');
						$(".sty1").attr("class","sty");
					}else{
						alert("没有点击药品");
					}

				}
			});
			$("#xia").click(function(){
//			选中的
				var axuanzhong=$(".sty1>div:last-child").html();
//        判断父元素后一个是否存在
				if($(".sty1").parent().next().html()){
//            alert('有');
					//			后一个的
					var xuanqian =$(".sty1").parent(".yongLaiKaZhude").next().children().children(".tihuandeneirong").html();
//           交换内容
					$(".sty1").parent(".yongLaiKaZhude").next().children().children(".tihuandeneirong").html(axuanzhong);
					$(".sty1>div:last-child").html(xuanqian);
					//        后一个也被选取
					var c = $(".sty1").parent(".yongLaiKaZhude").next().children().attr("class","sty1");
//        使选中的里面第一个不被选取
					$(".sty1:first").attr("class","sty");
				}else{
					//            判断是否有药品被选中
					if($(".sty1").html()){
						alert("放弃吧，已经是最后一个了");
						$(".sty1").attr("class","sty");
					}else{
						alert("没有点击药品");
					}

				}
			});
		</script>
		<!-- 拖拽的js -->
		
		<script src="/zysystem/Public/tuozhuai/Sortable.js"></script>
		<script src="/zysystem/Public/tuozhuai/st/app.js"></script>
</body>
</html>