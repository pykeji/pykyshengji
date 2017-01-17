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
<body>
	<!-- 内容 -->
	<div style="width: 100%; height: 100%;">
    	<!-- 搜索 -->
    	<div class="shangcesousuo">
    		<!-- 整形搜索 -->
    		<div class="zhengxingsousuo">
    			<div class="input-group ">  
			       <input type="text" class="form-control"placeholder="请输入证型名" / >  
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
				<table class="table table-bordered">
				   <tr height="30" >
				 		<th style="width:50px;  background-color:#FFEE99; text-align:center; ">选择</th> 
				 		<th style="width:200px; background-color:#FFEE99; text-align:center; ">证型</th>
				 		<th style="width:200px; background-color:#FFEE99; text-align:center;">治法</th>
				 		<th style="width:200px; background-color:#FFEE99; text-align:center;">病名</th>
				 		<th style="width:300px; background-color:#FFEE99; text-align:center; ">处方名称</th>
				 	</tr>
				    <tr>
				      <td><input type="checkbox"></td>
				      <td>Tanmay</td>
				      <td>Tanmay</td>
				      <td>Bangalore</td>
				      <td>560001</td>
				    </tr>
					<tr>
				      <td><input type="checkbox"></td>
				      <td>Tanmay</td>
				      <td>Tanmay</td>
				      <td>Bangalore</td>
				      <td>560001</td>
				    </tr>
				     <tr>
				      <td><input type="checkbox"></td>
				      <td>Tanmay</td>
				      <td>Tanmay</td>
				      <td>Bangalore</td>
				      <td>560001</td>
				    </tr>
				     <tr>
				      <td><input type="checkbox"></td>
				      <td>Tanmay</td>
				      <td>Tanmay</td>
				      <td>Bangalore</td>
				      <td>560001</td>
				    </tr>
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
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div>
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div>
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div>
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div>
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div>
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div>
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
					</div>
					<div style="width: 700px;">
						<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
							<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
							<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
							<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
							<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
						</div>
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
			<!-- <div class="chuFangHeBingkuang" >
				<div>
					<input type="checkbox" id="chuFangHeBing">
	    			<label for="chuFangHeBing">处方合并</label>
				</div>
				<br>
	    		<div>
	    			<button  class="btn  btn-success" style="width: 100px;" ><b style="color: #000000;">选定此方</b></button>
	    		</div>
	    		<br>
	    		<div>
		    		<button  class="btn btn-danger" style=" width: 100px; " ><b style="color: #000000;">退出</b></button>
	    		</div>
	    	</div> -->
	    	<!-- 清除合并浮动 -->
	    	<!-- <div class="qingchuhebingfudong"></div> -->
			
    </div>
    <!-- 点击换色的js -->
	<script type="text/javascript">
		// <!-- 点击换色的js -->
		function changeTrColor(obj){  
		// alert(56); 
		    var _table=obj.parentNode;
		    for (var i=0;i<_table.rows.length;i++){
		        _table.rows[i].style.backgroundColor="";
		    }   
		    obj.style.backgroundColor="#3399FF";
		}
		// 右侧处方名点击变色
		function dianjiyou(obj){   
			// alert(123);
		    var _tableyou=obj.parentNode;
		    for (var i=0;i<_tableyou.rows.length;i++){
		        _tableyou.rows[i].style.backgroundColor="";
		    }   
		    obj.style.backgroundColor="#3399FF";
		}
	</script>
	
</body>
</html>