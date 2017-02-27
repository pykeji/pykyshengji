<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zySystem/Public/yeMiancss/kaiFang6.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zySystem/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zySystem/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/zySystem/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
		<!-- 头 -->
		<div>
			<div class="toushangzuo">
				<h4>
				<img src="/zySystem/Public/img/症状.jpeg" style="height: 25px;" alt="图片加载中。。。。">
				<b>症状</b></h4>
			</div>
			<div class="toushangzh">
				<h4><img src="/zySystem/Public/img/症状.jpeg" style="height: 25px;" alt="图片加载中。。。。">
				<b>辩证结果</b></h4>
			</div>
			<div class="toushangyou">
				<h4><img src="/zySystem/Public/img/症状.jpeg" style="height: 25px;" alt="图片加载中。。。。">
				<b>处方选择</b></h4></div>
			<div class="qisfudong"></div>
		</div>
		<!-- 中 -->
		<div class="zhongjinade">
			<div class="zhongzuo">
				<!-- 折叠 -->
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo">
									选择症状
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse in ">
							<!-- 内容 -->
							<br>
							<div class="input-group">
							    <span class="input-group-addon btn btn-primary" data-toggle="modal" data-target="#myZhilModal"  >主症</span>
							    <input id="fenleifuzhizhuzheng" type="text" class="form-control input-lg" placeholder="请输入主症">
							</div>
							<br>
							<div class="input-group">
							    <span class="input-group-addon btn btn-primary">兼症</span>
							    <input type="text" class="form-control input-lg" placeholder="请输入兼症">
							</div>
							<br>
							<div class="input-group">
							    <span class="input-group-addon btn btn-primary">舌象</span>
							    <input type="text" class="form-control input-lg" placeholder="请输入舌象">
							</div>
							<br>
							<div class="input-group">
							    <span class="input-group-addon btn btn-primary">脉相</span>
							    <input type="text" class="form-control input-lg" placeholder="请输入脉相">
							</div>
							<br>
							<div class="input-group">
							    <span class="input-group-addon btn btn-primary">辩证</span>
							    <input type="text" class="form-control input-lg" >
							</div>
						</div>
						<!-- 主症模态框内容开始 -->
						<div class="modal fade" id="myZhilModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				            <div class="modal-dialog" >
			                    <!-- 滚动监听 -->
			                    <div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:530px; width:600px; overflow:auto; border-radius:10px;  background-color:#FFFBF0 ">
			                    	<!-- 选项卡 -->
									<ul id="myTabmot" class="nav nav-tabs">
									    <li class="active">
									      <a href="#homemot" data-toggle="tab">
									        分类
									      </a>
									    </li>
									    <li>
									   		<a href="#iosmot" data-toggle="tab">
									   		检索</a>
									   	</li>
									   	<li>
									   		<a href="#changyong" data-toggle="tab">常用选择</a>
									   	</li>
									</ul>
									<div id="myTabContentmot" class="tab-content">
									    <div class="tab-pane fade in active" id="homemot">
									       <!-- 内容 -->
									     	<div class="mtfenlzuo">
									     		<!-- 滚动监听 -->
			                    				<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="mtfenlzuogdjt">
			                    				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="border-bottom:1px #DDDDDD solid; text-align:center; ">
														<div class="sty1"  name="tableSty">
														<?php echo ($vo["name"]); ?> <input type="hidden" value="<?php echo ($vo["tree"]); ?>">
														</div>
													</div><?php endforeach; endif; else: echo "" ;endif; ?>
									     		</div>
									     	</div>
									     	<!-- 点击主症 -->
									     	<script type="text/javascript">
									     	// <!-- 点击主症 -->
									     		$(document).on("click",".sty1",function(){
									     			// 点击变色
												    var tsty1=document.getElementsByName("tableSty");
												    // alert(tsty1.length);
												    for(var i=0;i<tsty1.length;i++){
												        tsty1[i].className="sty1";
												    }
												    $(this).attr("class","sty2");
												    //ajax改变右侧值
													var dianjizhuzheng = $(this).find("input").val();			    
													$.ajax({
														type:"post",
														url:"<?php echo U('kaifang/yeliuajaxdianzz');?>",
														data:{"dianjizhuzheng":dianjizhuzheng},
														dataType:'json',
														success:function(dd){
															// alert(dd);
															// console.log(dd);
															str = '<button id="flzhengzchangyongxux" class="btn btn-info bto-xs" style="margin-top:10px;color:#000">设为常用症状</button>';
															$.each(dd.res,function(idx,item){
																// console.log(item.n);
																str += '<li style="list-style-type:none;border:1px #F0F0F0 solid;border-width:0 0 1px 0"><label><input class="sty3" type="checkbox" value="'+item.code+'"><span>'+item.name+'</span></label></li>';
															});
															$("#xuanZlist").html(str);
														},
														error:function(){
															alert("ajax链接失败");
														}
													});
													// alert(a);
									     		});
									     		//赋值将复选框点击后变为chenked=checked状态
									     		$(document).on("click",".sty3",function(){
									     			// alert(123);
									     			$(this).attr("checked","checked");
									     		});
									     		// 主症下搜索框搜索
									     		$(document).on("input","#zxzfchazhao",function(){
													var zxzfjg = $(this).val();//输入的值
													var tjbmzxzf = $(".sty2").find('input').val();
													$.ajax({
														type:"post",
														url:"<?php echo U('kaifang/yeliuajaxzhengxingss');?>",
														data:{"zxzfjg":zxzfjg,"tjbmzxzf":tjbmzxzf},
														dataType:'json',
														success:function(dd){
															// alert(dd);
															// console.log(dd);
															str = '<button class="btn btn-info bto-xs" style="margin-top:10px;color:#000">设为常用症状</button>';
															$.each(dd.res,function(idx,item){
																// console.log(item.n);
																str += '<li style="list-style-type:none;border:1px #F0F0F0 solid;border-width:0 0 1px 0"><label><input type="checkbox" value="'+item.name+'"><span>'+item.name+'</span></label></li>';
															});
															$("#xuanZlist").html(str);
														},
														error:function(){
															alert("ajax链接失败");
														}
													});
									     			// alert(tjbmzxzf);
									     		});
									     		//点击主症下的确定按钮
								     		$(document).on("click","#flzhengzfuzhizhuzheng",function(){
								     			// alert(123);
								     			var nj = document.getElementsByClassName("sty3");
								     			// alert(nj);
								     			var dozhuzheng='';
								     			for (var i = 0; i < nj.length; i++) {
								     				if (nj[i].checked) {
								     					dozhuzheng += nj[i].value+' ';
								     				}
								     			}
								     			$("#fenleifuzhizhuzheng").val(dozhuzheng);
								     			// alert(zhuzheng);
								     		});
								     		//点击主症下的设为常用选项按钮按钮
								     		$(document).on("click","#flzhengzchangyongxux",function(){
								     			// alert(123);
								     			var nj = document.getElementsByClassName("sty3");
								     			// alert(nj);
								     			var zhuzheng='';
								     			for (var i = 0; i < nj.length; i++) {
								     				if (nj[i].checked) {
								     					zhuzheng += nj[i].value+' ';
								     				}
								     			}
								     			// alert(zhuzheng);
								     			$.ajax({
														type:"post",
														url:"<?php echo U('kaifang/yeliuajaxchangyongxz');?>",
														data:{"zhuzheng":zhuzheng},
														dataType:'json',
														success:function(dd){
															alert(dd);
														},
														error:function(){
															alert("ajax链接失败");
														}
													});
								     		});
								     		//主症下检索设为常用选项
								     		$(document).on("click",".jssheweizhuchangyongxz",function(){
								     			var sheweicycode =$(this).find("input").val();
								     			$.ajax({
													type:"post",
													url:"<?php echo U('kaifang/yeliuajaxzhuzsheweicyxx');?>",
													data:{"sheweicycode":sheweicycode},
													dataType:'json',
													success:function(dd){
														alert(dd);
													},
													error:function(){
														alert("ajax链接失败");
													}
												});
								     		});
								     		//主症下取消常用选项
								     		$(document).on("click",".quxiaozhuchangyongxz",function(){
								     			var quxiaocycode =$(this).find("input").val();
								     			$.ajax({
													type:"post",
													url:"<?php echo U('kaifang/yeliuajaxzhuzquxcyxx');?>",
													data:{"quxiaocycode":quxiaocycode},
													dataType:'json',
													success:function(dd){
														alert(dd);
													},
													error:function(){
														alert("ajax链接失败");
													}
												});
								     		});
								     		//主症下常用选择搜索
								     		$(document).on("input","#cysousuocy",function(){
												var cyxztj = $(this).val();//输入的值
												$.ajax({
													type:"post",
													url:"<?php echo U('kaifang/yeliuajaxzhuzcyxzss');?>",
													data:{"cyxztj":cyxztj},
													dataType:'json',
													success:function(dd){
														// alert(dd);
														console.log(dd);
														var str = '';
														$.each(dd.res,function(idx,item){
																// console.log(item.n);
																str += '<tr style="border-bottom:1px #DDD solid"><td style="width:50%"><label><input type="checkbox" value="1"> '+item.name+'</label></td><td><span class="quxiaozhuchangyongxz" style="color:#0500FF">取消常用症状<input type="hidden" value="'+item.code+'"></span></td></tr>';
															});
														$("#chyongxuzjigfuzhi").html(str);
													},
													error:function(){
														alert("ajax链接失败");
													}
												});
								     		});
									     	</script>
									     	<!-- 全选按钮 -->
									     	<div class="mtfenlyou">
									     		<!-- 上 -->
									<div style=" width:100%; height: 80px; background-color: #F0F0F0; text-align: center; ">
										<!-- 按钮 -->
										<div style="  height: 50px; ">
											<input id="zxzfchazhao" placeholder="请输入症状名" type="text" style="margin-top:10px;  "> 搜索
											<button id="flzhengzfuzhizhuzheng" type="button" class="btn btn-primary btn-sm" data-dismiss="modal" >确定</button>
										</div>
											
										<div style="margin-top: 5px;">
											<input type="radio" name="a1name" class="btn" id="yixuanSelectAll">
											<label for="yixuanSelectAll">已选</label>
											<input type="radio"  name="a1name" class="btn" id="weixuanSelectAll">
											<label for="weixuanSelectAll">未选</label>
											<input type="radio" name="a1name" class="btn" id="quanXuanselectAll">
											<label for="quanXuanselectAll">全选</label>
											<input type="radio"  name="a1name" class="btn" id="quanBuXuanSelect">
											<label for="quanBuXuanSelect">全不选</label>
											<input type="radio" value="显示全部" name="a1name" class="btn" id="quanbuSelectAll">
											<label for="quanbuSelectAll">显示全部</label>
										</div>

									</div>
									<div style=" overflow:auto; width:350px; height: 370px;">
										<ul id="xuanZlist">
											<button id="flzhengzchangyongxux" class=" btn btn-info bto-xs" style=" margin-top: 10px; color: #000000;" >设为常用症状</button>
										   <!-- <li style=" list-style-type:none; border: 1px #F0F0F0 solid; border-width: 0 0 1px 0;">
												<label><input type="checkbox" value="1"> 1.时间都去哪儿了</label>
											</li> -->
										</ul>
									</div>
									     	</div>
									     	<div class="quxiaofdmtfenl"></div>
									    </div>
									    <!-- 选项卡2 -->
									    <div class="tab-pane fade" id="iosmot">
							<!-- 内容 -->
					    	<div style="overflow: auto; width: 100%;height: 480px;">
					    		<div style=" width:100%; height: 80px; background-color: #F0F0F0; text-align: center; ">
									<!-- 按钮 -->
									<div style="  height: 50px; ">
										<input  placeholder="请输入症状名" type="text" style="margin-top:10px;  "> 搜索
										<button  type="button" class="btn btn-primary btn-sm" data-dismiss="modal" >确定</button>
									</div>
										
									<div style="margin-top: 5px;">
										<input type="radio" name="a1name2" class="btn" id="yixuanSelectAll2">
										<label for="yixuanSelectAll2">已选</label>
										<input type="radio"  name="a1name" class="btn" id="weixuanSelectAll2">
										<label for="weixuanSelectAll2">未选</label>
										<input type="radio" name="a1name" class="btn" id="quanXuanselectAll2">
										<label for="quanXuanselectAll2">全选</label>
										<input type="radio"  name="a1name" class="btn" id="quanBuXuanSelect2">
										<label for="quanBuXuanSelect2">全不选</label>
										<input type="radio" value="显示全部" name="a1name" class="btn" id="quanbuSelectAll2">
										<label for="quanbuSelectAll2">显示全部</label>
									</div>
									<div style=" overflow:auto; text-align: center; width:100%; height: 400px;">
									    	<table  width="100%;">
									    	<?php if(is_array($jsdata)): $i = 0; $__LIST__ = $jsdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zhuzhengjsvo): $mod = ($i % 2 );++$i;?><tr style="border-bottom: 1px #DDDDDD solid;">
									    			<td style=" width:50%;">
									    				<label><input type="checkbox" value="1"><?php echo ($zhuzhengjsvo["name"]); ?> </label>
									    			</td>
									    			<td>
									    				<span class="jssheweizhuchangyongxz" style="color: #0500FF;">设为常用症状<input type="hidden" value="<?php echo ($zhuzhengjsvo["code"]); ?>"></span>
									    			</td> 
									    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
									    	</table>
									</div>
								</div>
					    	</div>		    
									    </div>
									    <!-- 选项卡3 -->
									    <div class="tab-pane fade" id="changyong">
					        <!-- 内容 -->
					    	<div style="overflow: auto; width: 100%;height: 480px;">
					    		<div style=" width:100%; height: 80px; background-color: #F0F0F0; text-align: center; ">
									<!-- 按钮 -->
									<div style="  height: 50px; ">
										<input id="cysousuocy" placeholder="请输入症状名" type="text" style="margin-top:10px;  "> 搜索
										<button  type="button" class="btn btn-primary btn-sm" data-dismiss="modal" >确定</button>
									</div>
										
									<div style="margin-top: 5px;">
										<input type="radio" name="a1name" class="btn" id="yixuanSelectAll">
										<label for="yixuanSelectAll">已选</label>
										<input type="radio"  name="a1name" class="btn" id="weixuanSelectAll">
										<label for="weixuanSelectAll">未选</label>
										<input type="radio" name="a1name" class="btn" id="quanXuanselectAll">
										<label for="quanXuanselectAll">全选</label>
										<input type="radio"  name="a1name" class="btn" id="quanBuXuanSelect">
										<label for="quanBuXuanSelect">全不选</label>
										<input type="radio" value="显示全部" name="a1name" class="btn" id="quanbuSelectAll">
										<label for="quanbuSelectAll">显示全部</label>
									</div>
									<div style=" overflow:auto; text-align: center; width:100%; height: 400px;">
										<?php if(is_array($dodata)): $i = 0; $__LIST__ = $dodata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qxzzvo): $mod = ($i % 2 );++$i;?><table id="chyongxuzjigfuzhi" width="100%;">
									    		<tr style="border-bottom: 1px #DDDDDD solid;">
									    			<td style=" width:50%;">
									    				<label><input type="checkbox" value="1"> <?php echo ($qxzzvo["name"]); ?></label>
									    			</td>
									    			<td>
									    				<span class="quxiaozhuchangyongxz" style="color: #0500FF;">取消常用症状<input type="hidden" value="<?php echo ($qxzzvo["code"]); ?>"></span>
									    			</td> 
									    		</tr>
									    		
											
									    	</table><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</div>
					    	</div>
									    </div>
									   
									</div>
			                    </div>
				                <div data-dismiss="modal" style=" width:40px; position:absolute; top:0px;right:12px;"><button  class="btn ">&times;</button></div>
				            </div><!-- /.modal-dialog -->
				        </div>
						<!-- 模态框内容结束 -->
					</div>
				</div>
			</div>
			<div class="zhongyou">
				<div class="zhongyoushang">
					<div class="zysbiaoge1">
						<!-- 表格 -->
						<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="ka3YouShangDakuaiChuFang">
						    <form action="ads">
								 <table  style="width:100%; border: 1px #F0F0F0 solid;" border='1' cellspacing="0">
								 	<tr >
								 		<th style="width:50px; text-align: center; background-color:#FFEE99; ">选择</th>
								 		<th style="width:200px; text-align: center; background-color:#FFEE99;">证型</th>
								 		<th style="width:200px; text-align: center; background-color:#FFEE99;">治则</th>
								 		<th style="width:200px; text-align: center; background-color:#FFEE99;">选用类表</th>
								 		<th style="width:300px; text-align: center; background-color:#FFEE99;">备注</th>
								 	</tr>

									<tr onclick="dianjiyou(this)">
										<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
											<input type="checkbox" name="aa" value="jlk">
										</td>
										<td style="border: 1px #F0F0F0 solid; ">
											头疼症
										</td>
										<td style="border: 1px #F0F0F0 solid; ">就是头疼别的没啥</td>
										<td style="border: 1px #F0F0F0 solid; ">疏风清热</td>
										<td style="border: 1px #F0F0F0 solid; ">治头疼的</td>
									</tr>
									<tr onclick="dianjiyou(this)">
										<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
											<input type="checkbox" name="aa" value="jlk">
										</td>
										<td style="border: 1px #F0F0F0 solid; ">
											头疼症
										</td>
										<td style="border: 1px #F0F0F0 solid; ">就是头疼别的没啥</td>
										<td style="border: 1px #F0F0F0 solid; ">疏风清热</td>
										<td style="border: 1px #F0F0F0 solid; ">治头疼的</td>
									</tr>
									
								 </table>
							</form>
						</div>
					</div>
					<div class="zysbiaoge2">
						<!-- 表格 -->
						<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="ka3YouShangDakuaiChuFang2">
						    <form action="ads">
								 <table  style="width:100%; border: 1px #F0F0F0 solid;" border='1' cellspacing="0">
								 	<tr >
								 		<th style="width:50px; text-align: center; background-color:#FFEE99; ">选择</th>
								 		<th style="width:200px; text-align: center; background-color:#FFEE99;">方剂名称</th>
								 		
								 	</tr>

									<tr onclick="dianjiyou(this)">
										<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
											<input type="checkbox" name="aa" value="jlk">
										</td>
										<td style="border: 1px #F0F0F0 solid; ">
											治头疼的
										</td>
										
									</tr>
									
									
								 </table>
							</form>
						</div>
					</div>
					<div class="quxiaofudzysbiaoge"></div>
				</div>
				<div style="width: 100%; height: 100%;">
					<div class="zhongyouxia">
						<!-- 选项卡 -->
						<!-- 选项卡 -->
						<ul id="myTab" class="nav nav-tabs">
						   <li class="active">
						      <a href="#home" data-toggle="tab">
						        <img src="/zySystem/Public/img/bg.png"  alt="别急图片马上出来">药解
						      </a>
						   </li>
						   <li><a href="#ios" data-toggle="tab">
						   		<img src="/zySystem/Public/img/fj.png" alt="别急图片马上出来">方解</a>
						   	</li>
						</ul>
						<div style="height: 100%;" id="myTabContent" class="tab-content">
						   <div style="height: 100%;" class="tab-pane fade in active" id="home">
						       <!-- 内容 -->
						       <!-- 下侧处方 -->
							<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="ka3xiaCeChuFang">
								<table>
									<div  class="ka3xiaCeChuFangZI">
										<strong>方剂名称:<尽量快圣诞节（爱思）></strong>
									</div>
									<div style="width: 700px;">
										<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
											<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
											<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
											<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
											<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
										</div>
									</div>
								</table>
							</div>
							
					    	
						   </div>
						   <div class="tab-pane fade" id="ios">
						      <!-- 内容 -->
						      <div style="border: 1px #FFFBF0 solid;width: 600px; height: 50px; text-align:center; font-size:20px;color:#8E852D">
											<strong>方剂名称:<尽量快圣诞节（爱思）></strong>	
								</div>
								<div style=" width: 600px; margin:20px; ">
									<strong>方解：</strong>家里卡手机登录方可将阿里卡世纪东方
								</div>
								<div style=" width: 600px; margin:20px; "><strong>来源：</strong></div>
								<div style=" width: 600px; margin:20px; "><strong>功效：</strong></div>
								<div style=" width: 600px; margin:20px; "><strong>主治：</strong></div>
								<div style=" width: 600px; margin:20px; "><strong>用法：</strong></div>
						   </div>
						   
						</div>
					</div>
					<div class="zhongyouanniu">
						<!-- 按钮 -->
						<div>
							<button  class="btn btn-success" style="width: 100px;"><b style="color: #000000;">选定此方</b></button>
						</div>
						<br>
			    		<div>
			    			<button  class="btn btn-danger" style="width: 100px;"><b style="color: #000000; width: 100px;">退出</b></button>
			    		</div>
					</div>
					<div class="qingchuzhongyouanniu"></div>
				</div>
					
			</div>
			<div class="qichuzhongfudong"></div>
		</div>
	    <!-- 全选 未选 已选 -->
		<script type="text/javascript">
			$("#yixuanSelectAll").click(function () {
				// alert(123)
			        // 把选择的显示为选择的隐藏
			    $("#xuanZlist :checkbox").each(function () { 
			        	$(this).parents("li").show(); 
			        	if(!$(this).prop("checked")){
			        		$(this).parents("li").hide();
			        	}
			        });
				});
				// 把所有的显示
				$("#quanbuSelectAll").click(function(){
					$("#xuanZlist :checkbox").each(function () {  
			           $(this).parents("li").show();  
			        });
				});
				// 未选
				$("#weixuanSelectAll").click(function(){
					$("#xuanZlist :checkbox").each(function () { 
						$(this).parents("li").show(); 
			        	if($(this).prop("checked")){
			        		$(this).parents("li").hide();
			        	}
			        });
				});
				//全选  
			    $("#quanXuanselectAll").click(function () {
			        $("#xuanZlist :checkbox,#all").prop("checked", true); 
			        //再次点击变为全不选 
			        $(this).click(function(){
			        	 $("#xuanZlist :checkbox,#all").prop("checked", false);
			        }); 
			    }); 
			    //全不选
			    $("#quanBuXuanSelect").click(function () {  
			         $("#xuanZlist :checkbox,#all").prop("checked", false);  
			    }); 
		</script>
</body>
</html>