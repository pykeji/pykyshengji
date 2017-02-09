<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zysystem1/Public/yeMiancss/kaiFang5.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zysystem1/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zysystem1/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/zysystem1/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<!-- 上 -->
	<div class="ka1dadekuang1">
		<fieldset class="ka1" >
			<legend class="ka11">
				点击按钮查询方剂名称
			</legend>
			<div class="kawenzi ">
				&nbsp;
				<img src="/zysystem1/Public/img/tu1.jpg" style="margin-top: 20px;  width: 40px; "  alt="图片加载中。。。。">
				&nbsp;
				<div class="kuangneianniu">
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >A</button>
					<button style="background-color:#FFFFFF;  color:red; margin-right: 5px;" >B</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >C</button>
					<button style="background-color:#FFFFFF;  color:red; margin-right: 5px;" >D</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >E</button>
					<button style=" background-color:#FFFFFF; color:red; margin-right: 5px;" >F</button>
					<button style="background-color:#FFFFFF;  color:red; margin-right: 5px;" >G</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >H</button>
					<button style=" background-color:#FFFFFF; color:red; margin-right: 5px;" >I</button>
					<button style=" background-color:#FFFFFF; color:red; margin-right: 5px;" >J</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >K</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >L</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >M</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >N</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >O</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >P</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >Q</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >R</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >S</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >T</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >U</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >V</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >W</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >X</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >Y</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >Z</button>
				</div>
			</div>
		</fieldset>
	</div>
	<!-- 下 -->
	<div style="width: 100%; height:100%;">
		<!-- 下左 -->
		<div class="xiaZuo">
			<div  class="xiaZuosousuo">
				<div class="input-group ">  
			       <input type="text" class="form-control"placeholder="请输入病名" / >  
		            <span class="input-group-btn">  
		                <button class="btn btn-info btn-search">
		               		<b style="color: #000000;">查找</b>
		               	</button>  
				</div>
			</div>
			<div class="xiaZuoshang">
				
				<div class="xiaZuoshang3 ">
					<button  class="btn  btn-info " data-toggle="modal" data-target="#tianjiachufang"  >
						<b style="color: #000000; font-size: 12px; ">添加处方</b>	
					</button>
					<button  class="btn btn-info "  >
						<b id="shanchuchufang" style="color: #000000;  ">删除处方</b>	
					</button>
					<button  class="btn btn-info "  >
						<b style="color: #000000;  ">保存处方</b>	
					</button>
				</div>
				<!-- 添加处方模态框开始 -->
				<div class="modal fade" id="tianjiachufang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 class="modal-title" id="myModalLabel">此处填写处方名称</h4>
			            </div>
			            <div class="modal-body">此处填写处方的药品
									<br>
									<br>
									<br>
									<br>
									<br>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			                <button type="button" class="btn btn-primary">确认添加</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal -->
			</div>
				<!-- 添加处方模态框结束 -->

			</div>
				<!-- 方剂列表 -->
				<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="xiaZuochufang">
					<table class="table table-condensed">
				 	<tr height="20">
				 		<th class="trdebingming">处方名称</th>
				 		<th class="trdebingming1">主治</th>
				 	</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
				 </table>
				</div>
		</div>
		<!-- 下右 -->
		<div class="youchufang">
					<div class="xiaYou1">
						<!-- 左 -->
						<div class="xiaYou2 ">
							<b>处方名称</b>
						</div>
						<!-- 右 -->
						<div style="  margin-top: -45px; margin-left:340px;">
							<!-- 详情按钮 -->
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
							<table>
								<!-- 拖拽开始 -->
								<!-- 这不知道干什么用但不能删，删除后拖拽效果就没了（开始） -->
								<div class="container" style="width:100%;" >
							        <div data-force="30" class="layer block">
							            <ul id="foo" class="block__list block__list_words">
							                

							            </ul>
							        </div>

							        <div data-force="18" class="layer block" >
							            <ul id="bar" class="block__list block__list_tags">
							                

							            </ul>
							        </div>
							    </div>
								<!-- 这不知道干什么用但不能删，删除后拖拽效果就没了（结束） -->
								<!-- 真正的拖拽 -->
								<div id="multi">
						            <div class="layer tile" data-force="30">
						                <div class="tile__list">
						                    <!-- 文本框 -->
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style=" width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px; ">
															<input type="text" value="前前" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="甘遂" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="78.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style=" width:10px; position:relative; left: 5px; top: 5px; color: red;">2</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
															<input type="text" value="生煎" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="银花" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="56.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style=" width:10px; position:relative; left: 5px; top: 5px; color: red;">3</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
															<input type="text" value="后煎" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="茶" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="53.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style=" width:10px; position:relative; left: 5px; top: 5px; color: red;">4</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
															<input type="text" value="前前" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="麻黄" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="78.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>

						                </div>
						            </div>
						        </div>
							</table>
						</div>
					</div>
					<!-- 下 -->
					<div style=" margin-top: 20px;  width: 100%; color:red; ">
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

			var num = $(".yaopinshidijige:last").html();
			$(".yongLaiKaZhude:last").after('<div class="yongLaiKaZhude" style="width:700px"><div class="sty" style="float:left;margin:5px;border-radius:5px;width:150px;height:100px;border:1px #000 solid"><div class="yaopinshidijige" style="border:1px #FFFBF0 solid;width:10px;position:relative;left:5px;top:5px;color:red">'+(num*1+1)+'</div><div class="tihuandeneirong"><div style="border:1px #000 solid;width:40px;border-width:0 0 1px 0;position:relative;left:100px;top:-10px"><input type="text" value="" class="chufangyaopinjianfa"></div><div style="border:1px #000 solid;width:80px;border-width:0 0 1px 0;position:relative;left:10px;top:-5px;font-size:20px"><input type="text" value="" class="chufangyaopinmingcheng"></div><div style="border:1px #000 solid;width:70px;border-width:0 0 1px 0;position:relative;left:50px;top:0;text-align:right"><input type="text" value="00.00克" class="chufangyaopinshuliang"></div></div></div></div>');
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
		
		<script src="/zysystem1/Public/tuozhuai/Sortable.js"></script>
		<script src="/zysystem1/Public/tuozhuai/st/app.js"></script>
</body>
</html>