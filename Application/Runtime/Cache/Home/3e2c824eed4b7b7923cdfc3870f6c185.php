<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zySystem/Public/yeMiancss/kaiFang3.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zySystem/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zySystem/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/zySystem/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
		<div style=" width: 100%;height: 100%;">
			<!-- 使边框中有文字 -->
			<div class="ka1dadekuang1">
				<div class="input-group ">  
				       <input type="text" id="bmtjchaxun" class="form-control"placeholder="请输入病名" / >  
			            <span class="input-group-btn">  
			                <button class="btn btn-info btn-search">
			               		<b style="color: #000000;">查找</b>
			               	</button>  
			            </span>
					</div>
			</div>
			<!-- 治疗指南的模态框 -->
			<!-- <div class="zlznmtk">
				<button id="yesanzlzn" class="btn  btn-info btn-sm " data-toggle="modal" data-target="#myZhilModal" >
					<b style="color: #000000; " >治疗指南</b>
				</button>
				
			</div> -->
			
				<!-- 模态框内容开始 -->
				<div class="modal fade" id="myZhilModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		            <div class="modal-dialog" >
		                    <!-- 滚动监听 -->
		                    <div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:530px; width:600px; overflow:auto; border-radius:10px;  background-color:#FFFBF0 ">
		                    	<div style="text-align: center;">
		                    		<h3>名称</h3>
		                    	</div>
		                    	<p>标题：阿萨德发生大</p>
		                    	<p>内容：问问哦</p>
		                    	<img src="/zySystem/Public/img/tu1.jpg" alt="别急">
		                    </div>
		                <div data-dismiss="modal" style=" width:40px; position:absolute; top:0px;right:12px;"><button  class="btn ">&times;</button></div>
		            </div><!-- /.modal-dialog -->
		        </div>
				<!-- 模态框内容结束 -->
				
			<div class="ka1dadekuang2" >

				<div class="input-group ">  
				       <input id="zxzfchazhao" type="text" class="form-control"placeholder="请输入证型名" / >  
			            <span class="input-group-btn">  
			                <button class="btn btn-info btn-search">
			               		<b style="color: #000000;">查找</b>
			               	</button>  
					</div>
			</div>
			<div class="qingchushangfudong"></div>
	    	<!-- 滚动监听 -->
	    	<!--  主题内容-->
				<!-- 左大块 -->
				<div class="ka3ZuoDaKuai">
					<!-- 折叠 -->
					<div><h3>中华中医药学会</h3></div>
					<div class="panel-group" id="accordion">
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default">
							<!-- 点开后默认是展开 -->
							<div id="ajaxbingming" class="panel-heading">
								<input type="hidden" value="<?php echo ($vo["xxdm"]); ?>">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion"  href="#<?php echo ($vo["xxdm"]); ?>">
										<?php echo ($vo["xxmc"]); ?>
									</a>
								</h4>
							</div>
							<div id="<?php echo ($vo["xxdm"]); ?>" class="panel-collapse collapse in ">
								<!-- 此处js添加子类 -->
							</div>
							<!-- 默认不展开 -->
							<!-- <div id="ajaxbingming" class="panel-heading">
								<input type="hidden" value="<?php echo ($vo["xxdm"]); ?>">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" 
									   href="#<?php echo ($vo["xxdm"]); ?>">
										<?php echo ($vo["xxmc"]); ?>
									</a>
								</h4>
							</div>
							<div id="<?php echo ($vo["xxdm"]); ?>" class="panel-collapse collapse in ">

							</div> -->
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
						
				</div>
				<!-- 右大块浮动 -->
				<div class="ka3YouDaKuai" >
					<!-- 右上大块 -->
						<div   class="ka3YouShangDakuaiChuFang">
								 <table id="youcezhengxing" style="width:100%; border: 1px #F0F0F0 solid;" border='1' cellspacing="0">
								 	<tr >
								 		<th style="width:50px; text-align: center; background-color:#FFEE99; ">选择</th>
								 		<th style="width:200px; text-align: center; background-color:#FFEE99;">辩证</th>
								 		<th style="width:200px; text-align: center; background-color:#FFEE99;">说明</th>
								 		<th style="width:200px; text-align: center; background-color:#FFEE99;">分证论治</th>
								 		<th style="width:300px; text-align: center; background-color:#FFEE99;">处方名称</th>
								 	</tr>
								 	<!-- ajax写入证型 -->
								 </table>
						</div>
					<!-- 中间汉字 -->
					<div class="ka3youShangHanZi">
						<span  class="ka3youShangHanZi1">
							<img src="/zySystem/Public/img/iconpng.png" style="width:30px;" alt="图片加载中。。。。">
						</span>
						<!-- <span class="ka3youShangHanZi2"> -->
							<b class="ka3youShangHanZi2">处方信息</b>
						<!-- </span> -->
						<span class="ka3youShangHanZi3 " >
							<b>注：双击药品名称。显示药解信息！</b>
						</span>
					</div>
					<div style="width: 100%;height: 100%;">
						<!-- 下侧处方 -->
						<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="ka3xiaCeChuFang">
							<table>
								<div  class="ka3xiaCeChuFangZI">
									<strong>方剂名称:<span class="fuzhichufangmingcheng"></span></strong>
								</div>
								<!-- 存放处方的div -->
								<div class="xiacechufangyaopin"></div>
							</table>
						</div>
						<div class="ka1zuihouanniu" >
				    		<input type="checkbox" id="chuFangHeBing">
				    		<label for="chuFangHeBing" ><b style="color: #000000; font-size: 15px;">处方合并</b></label>
				    		<div>
				    		<button  class="btn btn-success" style="width: 100px;"><b style="color: #000000;">选定此方</b></button>
				    		</div>
							
				    		<div class="chuFangHeBingtuichu">
				    		<button  class="btn btn-danger" style="width: 100px;"><b style="color: #000000; width: 100px;">退出</b></button>
				    		</div>
				    	</div>
				    	<div class="qingchuanniufudong"></div>
					</div>
						
				</div>
				<!-- 清除浮动 -->
				<div class="qingchushangfudong"></div>
	    </div>
	     <!-- 左侧点击改变右侧证型 -->
	     <!-- 左侧点击换色的js -->
		<script type="text/javascript">
			// <!-- 左点击换色的js -->
			$(document).on("click",".sty1",function(){
				var tsty1=document.getElementsByName("tableSty");
			    // alert(tsty1.length);
			    for(var i=0;i<tsty1.length;i++){
			        tsty1[i].className="sty1";
			    }
			    $(this).attr("class","sty2");
			    //ajax改变右侧值
		   		var tjzuobingm =$(this).children('input').val();
		   		// alert(tjzuobingm);
		   		$.ajax({
				 	type:'POST',
		            url:"<?php echo U('Kaifang/yesanajaxyouzhengxing');?>",
		            data:{"tjzuobingm":tjzuobingm},
		            dataType:'json',
		            success:function(dd)
		            {
		            	// alert(dd);
		            	// console.log(dd);
		            	str = '<tr><th style="width:50px; height:30px;text-align:center;background-color:#FE9">选择</th><th style="width:200px;text-align:center;background-color:#FE9">辩证</th><th style="width:200px;text-align:center;background-color:#FE9">说明</th><th style="width:200px;text-align:center;background-color:#FE9">分证论治</th><th style="width:300px;text-align:center;background-color:#FE9">处方名称</th></tr>';
		            	$.each(dd,function(idx,item){

		            		str += '<tr class="sty3" name="dotableSty"><td style="border:1px #F0F0F0 solid;height:20px;text-align:center"><input type="checkbox" name="aa" value="jlk"></td><td style="border:1px #F0F0F0 solid">'+item.zx+'</td><td style="border:1px #F0F0F0 solid">'+item.explain+'</td><td style="border:1px #F0F0F0 solid">'+item.zf+'</td><td style="border:1px #F0F0F0 solid"><span>'+item.cf_name+'</span><input type="hidden" value="'+item.cf_tree+'"/></td></tr>';
		                });
		                $("#youcezhengxing").html(str);
		            },
		            error:function(){
		            	alert("链接ajax失败");
		            }
				 });
			});
			//点击右侧证型治法出现处方
			// 右侧处方名点击变色
		$(document).on("click",".sty3",function(){
			// 点击变色
		    var tsty1=document.getElementsByName("dotableSty");
		    // alert(tsty1.length);
		    for(var i=0;i<tsty1.length;i++){
		        tsty1[i].className="sty3";
		    }
		    $(this).attr("class","sty4");
		    //ajax改变右侧值
		    //获取cf_tree根据cf_tree获取处方
		    var tjyouzhengxing =$(this).find("td:last").find("input").val();
		    //获取处方名称
		    var chufangmingcheng =$(this).find("td:last").find("span").html();
		    // alert(tjyouzhengxing);
		    // 赋值
		    $(".fuzhichufangmingcheng").html(chufangmingcheng);
		    $.ajax({
		    	type:'post',
		    	url:"<?php echo U('Kaifang/yesanajaxgaibianchufang');?>",
		    	data:{"tjyouzhengxing":tjyouzhengxing},
		    	dataType:'json',
		    	success:function(dd){
		    		// alert(dd);
		    		// console.log(dd);
		    		// 处方名称
		    		var str = '';
		    		$.each(dd,function(idx,item){
		    			// alert(item.drug_name);
		    			str += '<div style="width:700px"><div style="float:left;margin:5px;border-radius:5px;width:150px;height:100px;border:1px #000 solid"><div style="border:1px #FFFBF0 solid;width:10px;position:relative;left:5px;top:5px;color:red">'+item.serial_no+'</div><div style="border:1px #000 solid;width:40px;border-width:0 0 1px 0;position:relative;left:100px;top:-10px">'+item.yf+'</div><div style="border:1px #000 solid;width:80px;border-width:0 0 1px 0;position:relative;left:10px;top:-5px;font-size:20px">'+item.drug_name+'</div><div style="border:1px #000 solid;width:70px;border-width:0 0 1px 0;position:relative;left:50px;top:0;text-align:right">'+item.sl+item.dw+'</div></div></div>';
		    		});
		    		$(".xiacechufangyaopin").html(str);
		    	},
		    	error:function(){
		    		alert("链接ajax失败");
		    	}
		    });
		    // alert(tjyouzhengxing);
		});
			//ajax 点击出现对应的子分类
			$(document).on("click","#ajaxbingming",function(){
				// alert(123);
				cuobingmzi = $(this).find("input").val();
				// alert(cuobingmzi);
				var zhuaxuyhaoid = $(this).find("input").val();
				// alert(zhuaxuyhaoid);
				$.ajax({
					type:'post',
					url:"<?php echo U('Kaifang/ajaxzlznzilei');?>",
					data:{"zhuaxuyhaoid":zhuaxuyhaoid},
					dataType:'json',
					success:function(dd){
						//alert(dd);
						// <span style="margin-left:130px;margin-top:-50px;color:#0338D9;" data-toggle="modal" data-target="#myZhilModal" >治疗指南</span>
						  // console.log(dd.msg);
						var dostr = '#'+cuobingmzi;
						var str = '';
						$.each(dd.res,function(idx,item){
							str +='<div style="border-bottom:1px #DDDDDD solid;min-height:5px;  height:auto !important;height:5px;  "><div style="width:100px; margin-left:30px;" class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div><div style=" broder:1px red solid;height:25px; margin-top:-20px; margin-left:140px;color:#0338D9;font-size:10px;" data-toggle="modal" data-target="#myZhilModal" >治疗指南</div></div>';
						}); 
						// alert(cuobingmzi);
						$(dostr).html(str);
						// alert(a);
					},
					error:function(){
						alert("ajax链接失败");
					}
				});
			});
		//按病名拼音查找
		$(document).on("input","#bmtjchaxun",function(){
			var tjbm = $(this).val();
			// alert(tjbm);
			 $.ajax({
			 	type:'POST',
	            url:"<?php echo U('Kaifang/yeerajaxtjbm');?>",
	            data:{"tjbm":tjbm},
	            dataType:'json',
	            success:function(dd)
	            {
	            	// alert(dd);
	            	console.log(dd);
	            	var str='';
	            	$.each(dd,function(idx,item){
	                //输出
	                  //alert(item.bm);
		                var  zileiid = '#'+item.bm;
		                // alert(zileiid);
		                // if(){

		                // }
		                switch(item.bm){
		                	case '01':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#01").html(str);
		                		break;
		                	case '02':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#02").html(str);
		                		break;
		                	case '03':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#03").html(str);
		                		break;
		                	case '04':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#04").html(str);
		                		break;
		                	case '05':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#05").html(str);
		                		break;
		                	case '06':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#06").html(str);
		                		break;
		                	case '07':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#07").html(str);
		                		break;	
		                	case '08':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#08").html(str);
		                		break;	
		                	case '09':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#09").html(str);
		                		break;	
		                	case '10':
		                		str += '<p><div class="sty1" name="tableSty">'+item.name+'<input type="hidden" value="'+item.code+'"></div></p>';
	              				$("#10").html(str);
		                		break;	
		                }
	              		// str += item.name;
	              		// $(zileiid).html(str);
	                });
	            	// $(".ka3ZuoDaKuai").html(str);
	            },
	            error:function(){
	            	alert("链接ajax失败");
	            }
			});
		});

		</script>
		<!-- 按证型治法查找 -->
	<script type="text/javascript">
		$(document).on("input","#zxzfchazhao",function(){
			// 病名的code
			var tjbmzxzf = $(".sty2").children('input').val();
			//证型治法的首字母
			var zxzfjg = $(this).val();
			// alert(zxzfjg);
			$.ajax({
				type:'post',
				url:"<?php echo U('Kaifang/yesanajaxzhengxingzhif');?>",
				data:{"tjbmzxzf":tjbmzxzf,"zxzfjg":zxzfjg},
				dataType:'json',
				success:function(dd){
					// alert(dd);
					// console.log(dd)
					str = '<tr><th style="width:50px; height:30px;text-align:center;background-color:#FE9">选择</th><th style="width:200px;text-align:center;background-color:#FE9">辩证</th><th style="width:200px;text-align:center;background-color:#FE9">说明</th><th style="width:200px;text-align:center;background-color:#FE9">分证论治</th><th style="width:300px;text-align:center;background-color:#FE9">处方名称</th></tr>';
	            	$.each(dd,function(idx,item){

	            		str += '<tr class="sty3" name="dotableSty"><td style="border:1px #F0F0F0 solid;height:20px;text-align:center"><input type="checkbox" name="aa" value="jlk"></td><td style="border:1px #F0F0F0 solid">'+item.zx+'</td><td style="border:1px #F0F0F0 solid">'+item.explain+'</td><td style="border:1px #F0F0F0 solid">'+item.zf+'</td><td style="border:1px #F0F0F0 solid">'+item.cf_name+'<input type="text" value="'+item.cf_tree+'"/></td></tr>';
	                });
	                $("#youcezhengxing").html(str);
				},
				error:function(){
					alert("链接ajax失败");
				}
			});
			// alert(tjzxzf);
		});
	</script>
		<!-- 简单树形的js -->
		<script type="text/javascript"> 
			window.onload = function()
			{
				var cate = document.getElementById("categoryTree");
				var bBs = cate.getElementsByTagName("p");
				var len = bBs.length;
				if (len > 0)
				{
					for (var i = 0; i < len; i++) {
						var oTag = bBs[i].parentNode.getElementsByTagName("ul")[0];
						if (oTag) {
							bBs[i].style.background = "#666";
							bBs[i].onclick = function() {
								var oTag = this.parentNode.getElementsByTagName("ul")[0];
								if (!(oTag.open)) {
									oTag.style.display = "none";
									oTag.open = true;
								} else {
									oTag.style.display = "block";
									oTag.open = null;
								}
							}
						}
					}
				} else {
					throw new Error("html struct error!");
				}
			}
		</script>
</body>
</html>