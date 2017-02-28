<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zysystem/Public/yeMiancss/kaiFang4.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zysystem/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zysystem/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/zysystem/Public/bootstrap/js/bootstrap.min.js"></script>
    <style>
		.py{
			background-color:#FFFFFF;color:red;margin-right:5px;
		}
		.d1{
			float:left; margin:5px; border-radius:5px; width:150px;
			height:100px;border: 1px #000000 solid;
		}
		.d2{
			border: 1px #FFFBF0 solid; width:10px; position:relative;
			left:5px;top:5px;color:red;
		}
		.d3{
			border: 1px #000000 solid; width:40px;border-width:0 0 1px 0;
			position:relative;left: 100px;top: -10px;
		}
		.d4{
			border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;
			position:relative; left: 10px; top: -5px; font-size:20px;
		}
		.d5{
			border: 1px #000000 solid; width:70px;border-width: 0 0 1px 0;
			position:relative; left: 50px; top: 0px; text-align: right;
		}
		.fjt{
			border: 1px #FFFBF0 solid;width: 600px; height: 50px;
			text-align:center; font-size:20px;color:#8E852D
		}
		.fjcon{
			width:600px;margin:20px;
		}
		.trsty{
			border-bottom:1px solid #ccc;height:30px;
			line-height:30px;
		}
    </style>
</head>
<script>
$(document).on("input","#impid",function(){
	$.ajax({
			type:"post",
			url:"/zysystem/index.php/Home/Kaifang/impidajax",
			dataType:"json",
			data:{"pym":$('#impid').val()},
			success:function(e){
				var trd='';
				for(var i=0;i<e.length;i++){
					trd+='<tr class="trsty" id='+e[i]['tree']+'  onclick="fangjie(id)"><td>'+e[i]['name']+'</td></tr>';
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
			url:"/zysystem/index.php/Home/Kaifang/impidajax",
			dataType:"json",
			data:{"pym":$('#impid').val()},
			success:function(e){
				console.log(e);
				var trd='';
				for(var i=0;i<e.length;i++){
					trd+='<tr class="trsty" id='+e[i]['tree']+' onclick="fangjie(id)"><td>'+e[i]['name']+'</td></tr>';
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
function fangjie(id){
	var thid=document.getElementById(id);
	$(thid).css("background-color","#FE9");
	$('#fjmtab tr').not(thid).css("background-color","#fff");
	$.ajax({
		type:"post",
		url:"/zysystem/index.php/Home/Kaifang/fangjie",
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
		url:"/zysystem/index.php/Home/Kaifang/fjcon",
		dataType:"json",
		data:{"tree":id},
		success:function(f){
			console.log(f);
			var str1='方剂名称:'+f[0]['name'];
			var str2='<strong>方解：</strong>'+f[0]['explain'];
			if(f[0]['source']==null){
				var str3='<strong>来源：</strong>';
			}else{
				var str3='<strong>来源：</strong>'+f[0]['source'];
			}
			if(f[0]['efficacy']==null){
				var str4='<strong>功效：</strong>';
			}else{
				var str4='<strong>功效：</strong>'+f[0]['efficacy'];
			}
			if(f[0]['maincure']==null){
				var str5='<strong>主治：</strong>';
			}else{
				var str5='<strong>主治：</strong>'+f[0]['maincure'];
			}
			
			if(f[0]['tsyf']==null){
				var str6='<strong>用法：</strong>';
			}else{
				var str6='<strong>用法：</strong>'+f[0]['tsyf'];
			}
			
			$('.XYFnagJiMing').html(str1);	
			$('.fjt').html(str1);
			$('#fjcon1').html(str2);
			$('#fjcon2').html(str3);
			$('#fjcon3').html(str4);
			$('#fjcon4').html(str5);
			$('#fjcon5').html(str6);
		}
	}); 
}
</script>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<!-- 使边框中有文字 -->
<div class="ka1dadekuang1">
	<fieldset class="ka1">
		<legend class="ka11">
					点击按钮查询方剂名称
		</legend>
		<div class="kawenzi ">
					&nbsp;
			<img src="/zysystem/Public/img/tu1.jpg" style="margin-top: 20px; width: 40px; " alt="图片加载中。。。。">
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
<div style="width: 100%;height: 100%;">
	<!-- 下左 -->
	<div class="xiazuofudong">
		<div class="XZShuLu">
			<div class="input-group">
				<input type="text" class="form-control"placeholder="请输入经典方名称" id="impid"/>
				<span class="input-group-btn">
				<!-- <button class="btn btn-info btn-search">
				<b style="color:#000000;">查找</b>
				</button> -->
			</div>
		</div>
		<!-- 列表 -->
		<!-- 方剂列表 -->
		<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="XZfangJiLieBiao">
			<p class="trdebingming">经典方</p>
			<table class="table table-condensed" id="fjmtab">
			<?php if(is_array($cons)): foreach($cons as $key=>$cs): ?><tr id="<?php echo ($cs["tree"]); ?>" onclick="fangjie(id)">
					<td>
						<?php echo ($cs["name"]); ?>
					</td>
				</tr><?php endforeach; endif; ?>
			</table>
		</div>
		<!-- </fieldset> -->
	</div>
	<!-- 下右 -->
	<div class="xiayoufudong">
		<!-- 选项卡 -->
		<ul id="myTab" class="nav nav-tabs">
			<li class="active">
			<a href="#home" data-toggle="tab">
			<img src="/zysystem/Public/img/bg.png" alt="别急图片马上出来">药解
			</a>
			</li>
			<li><a href="#ios" data-toggle="tab">
			<img src="/zysystem/Public/img/fj.png" alt="别急图片马上出来">方解</a>
			</li>
			<li>
			<!-- 按钮 -->
			<!-- <div class="xuandinagcfang" >
			<button class="btn btn-success" style="width: 100px; "><b style="color: #000000; ">选定此方</b></button>
			<button class="btn btn-warning" style="width: 100px; margin-left: 20px; "><b style="color: #000000; ">退出</b></button>
		</div>
		 -->
		</li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="home">
			<!-- 内容 -->
			<div style="color:red;">
				注：双击药品名称，显示药解信息！
			</div>
			<div class="XYFnagJiMing">
				方剂名称：
			</div>
			<!-- 药品 -->
			<table id="fjtab">
			</table>
		</div>
		<div class="tab-pane fade" id="ios">
			<!-- 内容 -->
			<div class="fjt">
				方剂名称:
			</div>
			<div class="fjcon" id="fjcon1">
				<strong>方解：</strong>
			</div>
			<div class="fjcon" id="fjcon2">
				<strong>来源：</strong>
			</div>
			<div class="fjcon" id="fjcon3">
				<strong>功效：</strong>
			</div>
			<div class="fjcon" id="fjcon4">
				<strong>主治：</strong>
			</div>
			<div class="fjcon" id="fjcon5">
				<strong>用法：</strong>
			</div>
		</div>
	</div>
</div>
<!-- 下最右的按钮位置 -->
<div class="xiayouanniuweizhi">
	<!-- 按钮 -->
	<div class="xuandinagcfang">
		<button class="btn btn-success" style="width: 100px; "><b style="color: #000000; ">选定此方</b></button>
		<div>
			<button class="btn btn-danger" style="width: 100px; margin-top: 10px; "><b style="color: #000000; ">退出</b></button>
		</div>
	</div>
</div>
</body>
</html>