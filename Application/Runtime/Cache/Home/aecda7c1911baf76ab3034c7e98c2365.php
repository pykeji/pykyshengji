<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="/zySystem/Public/css/zykf.css">
	<link rel="stylesheet" href="/zySystem/Public/css/bootstrap.css">
	<script type="text/javascript" src="/zySystem/Public/jq/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/zySystem/Public/js/echarts.simple.min.js"></script>
	<script type="text/javascript" src="/zySystem/Public/js/zykf.js"></script>
	</head>
	<body  oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div id="waibig">
	<!-- 最上方药品处理等	 -->
	
	<!-- 历史处方，当天处方 -->
	<div id="zccfls">
		当<br/>天<br/>处<br/>方
	</div>
	<div id="zccfdt">
		历<br/>史<br/>处<br/>方
	</div>
	<!-- 历史处方菜单 -->
	<div id="lscfcd">
		history
	</div>
	<!-- 当天处方菜单 -->
	<div id="dtcfcd">
		today
	</div>
	<!-- 左边大div -->
	<div id="left_big">
		<!-- 历史处方详情 -->
		<div id="lscfxq">
			<table>
				<tr class="trr">
					<td>药解</td>
				</tr>
				<tr class="trr">
					<td>上移</td>
				</tr>
				<tr class="trr">
					<td>下移</td>
				</tr>
				<tr class="trr">
					<td>随症加减</td>
				</tr>
			</table>
		</div>
		<!-- 当天处方详情 -->
		<div id="dtcfxq">当天处方</div>
		<!-- 病人信息div -->
		<div id="brxx">
			<a href="#" class="lli">药解</a>
			<a href="#" class="lli">上移</a>
			<a href="#" class="lli">下移</a>
			<a href="#" class="lli">新增处方</a>
			<a href="#" class="lli">随症加减</a>
			<a href="#" class="lli" style="color:red">保存</a>
		</div>
		<!-- 用户操作调整div -->
		<div id="yhcz">
		<div id="gd">
			<label id="yf">
				<input type="checkbox" name="yfche" id="yfchecked">孕妇
			</label>
			<span class="span">
				剂量：<input type="text" name="jiliang" value="1" class="text">
			</span>
			<span class="span">
				<label id="zykf_bl1"><input type="radio" name="bltz" checked="checked" value="1">比例</label>&nbsp;&nbsp;
				<label id="zykf_tz1"><input type="radio" name="bltz" value="2">体重</label>
			</span>
			
			<span class="span" id="blspan">
				<input type="text" name="bl1" value="1" class="text" id="t1">
					/
				<input type="text" name="bl1" value="1" class="text" id="t2">
			</span>
			<span id="tzspan">
				<input type="text" name="bl1" value="50" class="text" id="ttzz">kg
			</span>
		</div>
		<div id="tzjydiv">
			<button class="btn btn-info" id="tzan">
				调整
			</button>
			<button class="btn btn-success" id="jyan">
				加药
			</button>
		</div>
			<div id="everyone">
			<label id="qxspan">
				<input type="checkbox" name="quan" id="qxche">全选
			</label>
			</div>
		</div>
		<!-- 处方明细div -->
		<div id="cfmx">
		<!-- 查询药品框 -->
		<div id="zykf_cxypk">
			
		</div>
		<!-- 系统预审详情 -->
		<div id="xtysxq">
			<span id="sttcxx">X</span>
			<center><h1>审核</h1></center>
		</div>
		<!-- 药解框 -->
		<div id="yjk">
			<div>
				<span id="yjtc">X</span>
			</div>
		</div>
		<!-- 系统审核框 -->
		<div id="xtshk">
			<center><h3>审核</h3></center>
		</div>
		<?php $numdr = 1; ?>
		 <?php if(is_array($zy_yp)): foreach($zy_yp as $key=>$vo): ?><div class="zykf_yp">
				<div class="yp1">
					<b class="b1"><?php echo $numdr; ?></b>
					<span class="jianyao">X</span>
				</div>
				<div class="yp2">
					<select class="jfselect">
						<option value="1">煎法</option>
					</select>
				</div>
				<div class="yp3">
					<input type="text" name="ylypm" class="ylypnm" value="<?php echo ($vo["drug_name"]); ?>">
					<!-- <?php echo ($vo["drug_name"]); ?> -->
				</div>
				<div class="yp4">
					<input type="checkbox" name="xuanzeyp" class="xzypche">
					<span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke"><?php echo ($vo["dw"]); ?></span>
				</div>
			</div>
			<?php $numdr++; endforeach; endif; ?>	
		</div>
		
		<!-- 温热平寒占比 -->
		<div id="wrphzb">
			<div id="wrphbzt">
				
			</div>
			<div id="sgsle">
				<select name="" class="select">
					<option value="1">煎法</option>
				</select><br>
				<select name="" class="select">
					<option value="1">用法</option>
				</select><br>
				<select name="" class="select">
					<option value="1">用量</option>
				</select>
			</div>
		</div>
	</div>
	<!-- 右边大div -->
	<div id="right_big">
		<!-- 性味归经div -->
		<div id="xwgj">
			性味归经
		</div>
		<!-- 煎法，用法，用量-->
		<div id="yzxq">
			<div id="docter_talk">
				医嘱
			</div>
			<div id="yzxqs">
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="按时吃药">按时吃药</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="早睡早起">早睡早起</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="禁止辛辣">禁止辛辣</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="严禁饮酒">严禁饮酒</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="多喝热水">多喝热水</label>
			</div>
			<div id="yzxqx">
				<textarea id="yztext"></textarea>
			</div>
		</div>

	</div>
</div>
	</body>
	<script type="text/javascript">
		$(document).on("input",".ylypnm",function(){
				
				var top = $(this).offset().top 
				var left = $(this).offset().left
				top = top-40;
				left = left -110;
				$('#zykf_cxypk').css('top',top+'px');
				$('#zykf_cxypk').css('left',left+'px');
				$('#zykf_cxypk').html($(this).val());
				$('#zykf_cxypk').fadeIn();
				$(this).blur(function(){
				$('#zykf_cxypk').fadeOut();
			});
			});
	</script>
</html>