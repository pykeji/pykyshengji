<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zySystem/Public/yeMiancss/kaiFang2.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zySystem/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zySystem/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="/zySystem/Public/bootstrap/js/bootstrap.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<!-- 内容 -->
	<div style="width: 100%; height: 100%;">
    	<!-- 搜索 -->
    	<div class="shangcesousuo">
    		<!-- 整形搜索 -->
    		<div class="zhengxingsousuo">
    			<div class="input-group ">  
			       <input id="zxzfchazhao" type="text" class="form-control"placeholder="请输入证型名" / >
		            <span class="input-group-btn">  
		                <button class="btn btn-info btn-search">
		               		<b style="color: #000000;">查找</b>
		               	</button>  
		            </span>  
				</div>
    		</div>
    		<div class="chufanghebingsousuo">
				<input type="checkbox" id="chuFangHeBing">
    			<label for="chuFangHeBing">处方合并</label>
			</div>
    		<div class="xuandingcifangsousuo">
    			<button  class="btn  btn-success" style="width: 100px;" ><b style="color: #000000;">选定此方</b></button>
    		</div>
    		<div class="qingchuanniusousuo"></div>
    	</div>
		<!-- 右侧处方 -->
		<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="ka1youcechufang">
			 <form action="ads">
				<table id="chjieguofuzhi" class="table table-bordered">
				    <tr height="30" >
				 		<th style="width:50px;  background-color:#FFEE99; text-align:center; ">选择</th> 
				 		<th style="width:200px; background-color:#FFEE99; text-align:center; ">证型</th>
				 		<th style="width:200px; background-color:#FFEE99; text-align:center;">治法</th>
				 		<th style="width:200px; background-color:#FFEE99; text-align:center;">病名</th>
				 		<th style="width:300px; background-color:#FFEE99; text-align:center; ">处方名称</th>
				 	</tr>
				 	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="sty1" name="tableSty">
				      <td><input type="checkbox"></td>
				      <td><?php echo ($vo["zx"]); ?></td>
				      <td><?php echo ($vo["zf"]); ?></td>
				      <td><?php echo ($vo["name"]); ?></td>
				      <td><span><?php echo ($vo["cf_name"]); ?></span><input type="hidden" value="<?php echo ($vo["cf_tree"]); ?>"></td>
				    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
			 </form>
		</div>
		<div class="qingchuchufangfudong"></div>
		<!-- 中间汉字 -->
		<div class="zhongjianhanzi">
				<img src="/zySystem/Public/img/iconpng.png" class="zhongjianhanziimg" alt="图片加载中。。。。">
			<span class="zhongjianhanzichu">
				<b>处方信息</b>
			</span>
			<span class="zhongjianhanzizhu " >
				<b>注：双击药品名称。显示药解信息！</b>
			</span>
		</div>
			<!-- 下侧处方 -->
			<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="ka1xXiaceChufang">
				<table>
					<div class="ka1xXiacehanzi" >
						<strong>方剂名称:<span class="fuzhichufangmingcheng"></span></strong>	
					</div>
					<div class="xiacechufangyaopin"></div>
					<!-- <div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div> -->
				</table>
			</div>
    </div>
	<script type="text/javascript">
		// 左侧处方名点击变色
		$(document).on("click",".sty1",function(){
			// 点击变色
		    var tsty1=document.getElementsByName("tableSty");
		    // alert(tsty1.length);
		    for(var i=0;i<tsty1.length;i++){
		        tsty1[i].className="sty1";
		    }
		    $(this).attr("class","sty2");
		    //获取cf_tree根据cf_tree获取处方
		    var tjyouzhengxing =$(this).find("td:last").find("input").val();
		    // alert(tjyouzhengxing);
		    //获取处方名称
		    var chufangmingcheng =$(this).find("td:last").find("span").html();
		    // alert(chufangmingcheng);
		    // alert(chufangmingcheng);
		    $(".fuzhichufangmingcheng").html(chufangmingcheng);
		    $.ajax({
		    	type:'post',
		    	url:"<?php echo U('Kaifang/yeerchufangfuzhi');?>",
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
		});
		//按搜索条件获取证型治法
		$(document).on("input","#zxzfchazhao",function(){
			var yerzxzfjg = $(this).val();
			$.ajax({
				type:'post',
				url:"<?php echo U('Kaifang/yeerajaxzxzf');?>",
				data:{"yerzxzfjg":yerzxzfjg},
				dataType:'json',
				success:function(dd){
					// alert(dd);
					var str = '<tr height="50"><th style="width:50px;background-color:#FE9;text-align:center">选择</th><th style="width:200px;background-color:#FE9;text-align:center">证型</th><th style="width:200px;background-color:#FE9;text-align:center">治法</th><th style="width:200px;background-color:#FE9;text-align:center">病名</th><th style="width:300px;background-color:#FE9;text-align:center">处方名称</th></tr>';
	            	$.each(dd,function(idx,item){
						// alert(item.name);	
						str += '<tr class="sty1" name="tableSty"><td><input type="checkbox"></td><td>'+item.zx+'</td><td>'+item.zf+'</td><td>'+item.name+'</td><td><span>'+item.cf_name+'</span><input type="hidden" value="'+item.cf_tree+'"></td></tr>';            		
	                });
	                $("#chjieguofuzhi").html(str);

	                // $("#youcezhengxing").html(str);
				},
				error:function(){
					alert("链接ajax失败");
				}
			});
			// alert(zxzfjg);
		});
	</script>
	
</body>
</html>