<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zysystem1/Public/yeMiancss/kaiFang4.css">
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zysystem1/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zysystem1/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/zysystem1/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<!-- 使边框中有文字 -->
<div class="ka1dadekuang1">
	<fieldset class="ka1">
		<legend class="ka11">
					点击按钮查询方剂名称
		</legend>
		<div class="kawenzi ">
					&nbsp;
			<img src="/zysystem1/Public/img/tu1.jpg" style="margin-top: 20px; width: 40px; " alt="图片加载中。。。。">
					&nbsp;
			<div class="kuangneianniu">
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">A</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">B</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">C</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">D</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">E</button>
				<button style=" background-color:#ffffff; color:red; margin-right: 5px;">F</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">G</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">H</button>
				<button style=" background-color:#ffffff; color:red; margin-right: 5px;">I</button>
				<button style=" background-color:#ffffff; color:red; margin-right: 5px;">J</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">K</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">L</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">M</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">N</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">O</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">P</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">Q</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">R</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">S</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">T</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">U</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">V</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">W</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">X</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">Y</button>
				<button style="background-color:#FFFFFF; color:red; margin-right: 5px;">Z</button>
			</div>
		</div>
	</fieldset>
</div>
<!-- 下 -->
<div style="width: 100%;height: 100%;">
	<!-- 下左 -->
	<div class="xiazuofudong">
		<div class="XZShuLu">
			<div class="input-group ">
				<input type="text" class="form-control"placeholder="请输入经典方名称" />
				<span class="input-group-btn">
				<button class="btn btn-info btn-search">
				<b style="color: #000000;">查找</b>
				</button>
			</div>
		</div>
		<!-- 列表 -->
		<!-- 方剂列表 -->
		<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="XZfangJiLieBiao">
			<table class="table table-condensed">
			<tr height="20">
				<th class="trdebingming">
					经典方
				</th>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
			<tr onclick="dianjiyou(this)">
				<td>
					麻杏石甘汤
				</td>
			</tr>
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
			<img src="/zysystem1/Public/img/bg.png" alt="别急图片马上出来">药解
			</a>
			</li>
			<li><a href="#ios" data-toggle="tab">
			<img src="/zysystem1/Public/img/fj.png" alt="别急图片马上出来">方解</a>
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
				<strong>方剂名称:<尽量快圣诞节（爱思）></strong>
			</div>
			<!-- 药品 -->
			<table>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			<div style="width: 700px;">
				<div style=" float:left; margin:5px; border-radius:5px; width:150px; height:100px; border: 1px #000000 solid;">
					<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">
						1
					</div>
					<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
						后下
					</div>
					<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0; position:relative; left: 10px; top: -5px; font-size:20px; ">
						前胡
					</div>
					<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
						9.00克
					</div>
				</div>
			</div>
			</table>
		</div>
		<div class="tab-pane fade" id="ios">
			<!-- 内容 -->
			<div style="border: 1px #FFFBF0 solid;width: 600px; height: 50px; text-align:center; font-size:20px;color:#8E852D">
				<strong>方剂名称:<尽量快圣诞节（爱思）></strong>
			</div>
			<div style=" width: 600px; margin:20px; ">
				<strong>方解：</strong>家里卡手机登录方可将阿里卡世纪东方
			</div>
			<div style=" width: 600px; margin:20px; ">
				<strong>来源：</strong>
			</div>
			<div style=" width: 600px; margin:20px; ">
				<strong>功效：</strong>
			</div>
			<div style=" width: 600px; margin:20px; ">
				<strong>主治：</strong>
			</div>
			<div style=" width: 600px; margin:20px; ">
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