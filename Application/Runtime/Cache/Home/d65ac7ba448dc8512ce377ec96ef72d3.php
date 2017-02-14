<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/zysystem/Public/yeMiancss/binglicx.css">
	<!-- 日历的js -->
	<script type="text/javascript" src="/zysystem/Public/rili/jeDate/jedate.js"></script>
	<!-- 健康档案 -->
	<link rel="stylesheet" href="/zysystem/Public/mrjkda/jkda.css">
    <link rel="stylesheet" href="/zysystem/Public/mrjkda/jiankang.css">
    <script src="/zysystem/Public/mrjkda/Birthday-Calendar.js"></script>
    <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/zysystem/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的引用 -->
    <link href="/zysystem/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="/zysystem/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- 查询条件 -->
	<div class="zuokuaicxtj">
		<div class="chaxtjhanzi">
			<div  class="zuokuaicxtjtufd" >
				<img src="/zysystem/Public/img/chaxun.png" style="width: 30px; margin-right: 10px;"  alt="图片加载中">
			</div>
			<div  class="zuokuaicxtjzifd">
				<b>查询条件</b>
			</div>
			<div  class="qingchuzuokuaicxtjfd"></div>
		</div>
		<div class="chaxtjxinxi">
			<!-- 内容 -->
			<!-- 折叠 -->
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion"  href="#collapseOne">
								<b>选择条件</b>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<!-- 内容 -->
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary"><div style="width:50px; 
						    text-align: center;"><b>病历号</b></div></span>
						    <input type="text" class="form-control input-lg"  placeholder="请输入病历号">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">
						    	<div style="width:50px;"><b>姓名</b></div>
						    </span>
						    <input type="text" class="form-control input-lg" placeholder="请输入姓名">
						</div>
						<br>
						<div class="input-group">
						    <span class="input-group-addon btn btn-primary">
						    	<div style="width:50px;"><b>身份证号</b></div>
						    </span>
						    <input type="text" class="form-control input-lg" placeholder="请输入身份证号">
						</div>
						<br>
						<div class="input-group" >
						    <button class="btn" style="width: 75px; background-color:#EEEEEE; color: 
						    #555555; ">
						    	<b>性别</b>
						    </button>
						    <span style="text-align: center; margin-left: 30px;">
						    	男  &nbsp; &nbsp;<input type="radio" name="optionsRadios" > &nbsp; &nbsp; &nbsp; &nbsp;
						     	女  &nbsp; &nbsp; <input type="radio"  name="optionsRadios" >
						    </span>
						     	
						</div>
						<br>
						<!-- 日历 -->
						<div>
							<p class="datep">
								<button class="btn" onClick="jeDate({dateCell:'#datebut',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})"  style="width: 75px; background-color:#EEEEEE; color: 
							    #555555; ">
							    	<b>开始日期</b>
							    </button>
								<input class="datainp" style="color: #000; width: 73%; height: 30px; border-radius: 5px; border: 1px #C7D5E0 solid;" id="datebut" type="text" placeholder="    请选择"  readonly>
								
							</p>
						</div>
						<br>
						<div>
							<p class="datep">
								<button class="btn" onClick="jeDate({dateCell:'#datebut1',isTime:true,format:'YYYY-MM-DD hh:mm:ss'})"  style="width: 75px; background-color:#EEEEEE; color: 
							    #555555; ">
							    	<b>结束日期</b>
							    </button>
								<input class="datainp"  style="color: #000; width: 73%; height: 30px;  border-radius: 5px; border: 1px #C7D5E0 solid;" id="datebut1" type="text" placeholder="    请选择"  readonly>
								
							</p>
						</div>
						<br>
						<div class="chaxtjxinxianniu">
							<button class="btn  btn-info btn-search"><b>查询</b></button>
							<button class="btn  btn-info btn-search" style="margin-left: 40px;"><b>全部</b></button>
						</div>
							
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- 信息 -->
	<div class="youkuaixinx">
		<!-- 内容 -->
		<!-- 病人信息 -->
		<div class="bingrxinxi">
			<div class="bingrxinxihz"><img src="/zysystem/Public/img/014.png" style="width: 35px; margin-right: 10px;" alt="图片加载中。。。。"><b>病人信息</b></div>
			<!-- 表格 -->
			<div  class="bingrxinxibaog">
				<div class="chaochubufyc">
					<table class="table " >
						<tr>
							<th><b>病历号</b></th>
							<th><b>姓名</b></th>
							<th><b>性别4</b></th>
							<th><b>出生年月</b></th>
							<th><b>身份证号</b></th>
							<th><b>单位</b></th>
							<th><b>电话</b></th>
							<th><b>传真</b></th>
							<th><b>E Mail</b></th>
						</tr>
						<tr>
							<td><font>004</font></td>
							<td><font>张三</font></td>
							<!-- <td>张三54</td> -->
							<td>男</td>
							<td><font>1852-44-22</font></td>
							<td><font>6284456489474654</font></td>
							<td>不知道</td>
							<td>没有</td>
							<td>没有</td>
							<td>没有</td>
						</tr><tr>
							<td>001</td>
							<td>张三</td>
							<td>男</td>
							<td>1852-44-22</td>
							<td>6284456489474654</td>
							<td>不知道</td>
							<td>没有</td>
							<td>没有</td>
							<td>没有</td>
						</tr><tr>
							<td>001</td>
							<td>张三</td>
							<td>男</td>
							<td>1852-44-22</td>
							<td>6284456489474654</td>
							<td>不知道</td>
							<td>没有</td>
							<td>没有</td>
							<td>没有</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!-- 就诊记录 -->
		<div class="jiuzhengjiru">
			<div class="jiuzhengjiruhz"> <img src="/zysystem/Public/img/iconpng.png " style="width: 35px; margin-right: 10px;" alt="图片加载中。。。"><b>就诊记录</b></div>
			<div class="jiuzhengjirubiaog">
				<table class="table table-striped">
					<tr data-toggle="modal" data-target="#myZhilModal">
						<th>就诊日期</th>
						<td><font>2087-56-45 17:34:23</font></td>
						<td><button class="btn btn-info btn-search"><font>查看详情</font></button></td>
					</tr><tr data-toggle="modal" data-target="#myZhilModal">
						<th>就诊日期</th>
						<td><font>2087-56-45 17:34:23</font></td>
						<td><button class="btn  btn-info btn-search"><font>查看详情</font></button></td>
					</tr><tr data-toggle="modal" data-target="#myZhilModal">
						<th>就诊日期</th>
						<td><font>2087-56-45 17:34:23</font></td>
						<td><button class="btn  btn-info btn-search"><font>查看详情</font></button></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- 模态框内容开始 -->
			<div class="modal fade" id="myZhilModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	            <div class="modal-dialog" style="  width: 1200px;" >
	                <!-- 滚动监听 -->
	                <div  style="height:530px; ">
        <!--健康档案-->
        <div class="right">
            <!--健康档案-->
            <div class="right-center">
                <div class="health-file center">
                    <form action="#" method="post">
                        <table border="1" cellspacing="1" class="jkda-table table-bordered" width="100%">
                            <div class="title">中医健康档案</div>
                            <div class="title2">
                                <div>
                                    <span>就诊日期：</span>
                                    <span id="jzrq"></span>
                                </div>
                                <div>
                                    <span>病历号：</span>
                                    <span id="blnum">000011</span>
                                </div>
                            </div>
                            <tr>
                                <th width="12%"><label for="name">姓名</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" value="小白" onkeyup="this.size=(this.value.length>3?this.value.length:3);" size="3" id="name">
									</span>
                                </td>
                                <th width="6%"><label for="sex">性别</label></th>
                                <td width="7%">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sex">
									</span>
                                </td>
                                <th width="7%"><label for="age">年龄</label></th>
                                <td width="7%">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="age">
									</span>
                                </td>
                                <th width="7%"><label for="birthday">出生日期</label></th>
                                <td width="11%">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="birthday">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="userID">身份证号</label></th>
                                <td colspan="3">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="userID">
									</span>
                                </td>
                                <th colspan="2"><label for="phone">联系方式</label></th>
                                <td colspan="3">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>15?this.value.length:15);" size="15" id="phone">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="duo">工作单位</label></th>
                                <td colspan="8">
									<span>
										<!-- <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>20?this.value.length:20);" size="20" id="work"> -->
										<textarea name="" id="duo" cols="70" rows="3"></textarea>
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="main">主诉</label></th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>30?this.value.length:30);" size="30" id="main">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="jws">既往史</label></th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="jws">
									</span>,
                                    <span>确认时间：</span>
									<span>
										<!-- <input type="date" name="" style="width:130px;"> -->
										<input type="text" onfocus="new Calendar().show(this)" readonly="readonly">
									</span>
                                    <!-- <br/> -->
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>,
                                    <span>确认时间：</span>
                                    <!-- <span>
                                        <input type="text" class="year" maxlength="4">
                                    </span>年
                                    <span>
                                        <input type="text" class="month" maxlength="2">
                                    </span>月
                                    <span>
                                        <input type="text" class="day" maxlength="2">
                                    </span>日； -->
									<span>
										<!-- <input type="date" name="" style="width:130px;"> -->
										<input type="text" onfocus="new Calendar().show(this)" readonly="readonly">
									</span>
                                </td>
                            </tr>
                            <!-- <script>
                                $(".year").keydown(function(){
                                    if($(this).val().length>=4){
                                        $(this).parent().next().children().focus();
                                    }
                                })
                                $(".month").keydown(function(){
                                    if($(this).val().length>=2){
                                        $(this).parent().next().children().focus();
                                    }
                                })
                            </script> -->
                            <tr style="position:relative;">
                                <th rowspan="2"><label for="fq">家庭史</label></th>
                                <td colspan="5">
                                    <span><label for="fq">父亲：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="fq">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="yw1">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                                <div class="jtsFar">
                                    <input type="text" id="jtsFarinp" style="border:1px solid #ccc;">
                                    <input type="button" value="提交" id="jtsFartj">
                                    <label><input type="radio" name="jt" class="jtscheck" value="无"><span>无</span></label>
                                    <label><input type="radio" name="jt" class="jtscheck" value="有"><span>有</span></label>
                                </div>
                                <td colspan="3">
                                    <span><label for="mq">母亲：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mq">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <span><label for="xdjm">兄弟姐妹：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xdjm">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                                <td colspan="3">
                                    <span><label for="zn">子女：</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="zn">
									</span>
									<span>[
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无">]
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                            </tr>
                            <tr style="position:relative;">
                                <th><label for="gms">过敏史</label></th>
                                <td colspan="6" style="width:395px;">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>15?this.value.length:15);" size="15" id="gms">
									</span>
                                </td>
                                <div class="gm">
                                    <div>
                                        <input type="text" id="gmsinp" style="border:1px solid #ccc;">
                                        <input type="button" value="提交" id="gmstj">
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="无"><span>无</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="否认药物及食物过敏史"><span>否认药物及食物过敏史</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="青霉素"><span>青霉素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="链霉素"><span>链霉素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="普鲁卡因"><span>普鲁卡因</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="血清"><span>血清</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="头孢菌素"><span>头孢菌素</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="磺胺类药物"><span>磺胺类药物</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="海鲜"><span>海鲜</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="花粉"><span>花粉</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="鱼"><span>鱼</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="虾"><span>虾</span></label>
                                        <label><input type="checkbox" name="gm" class="gmcheck" value="蟹"><span>蟹</span></label>
                                    </div>
                                </div>
                                <th><label for="weight">体重</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="weight">
									</span>
                                    <span>KG</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tw">生命体征</label></th>
                                <td colspan="2">
                                    <span><label for="tw">体温:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tw">
									</span>
                                    <span>℃</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="mb">脉搏:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mb">
									</span>
                                    <span>次/分</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="hx">呼吸:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="hx">
									</span>
                                    <span>次/分</span>
                                </td>
                                <td colspan="2">
                                    <span><label for="xy">血压:</label></span>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xy">
									</span>/
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                    <span>mmHg</span>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="3"><label for="wshen">整体状况</label></th>
                                <th><label for="wshen">忘神</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="wshen">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="wse">忘色</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="wse">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th width="5%"><label for="tt">忘形</label></th>
                                <th width="5%"><label for="tt">体态</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tt">
									</span>
                                </td>
                                <th colspan="2"><label for="tx">体形</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tx">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="5"><label for="zl">现在状况</label></th>
                                <th><label for="zl">睡眠</label></th>
                                <th><label for="zl">质量</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="zl">
									</span>
                                </td>
                                <th colspan="2"><label for="sj">时间</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sj">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="sy">食欲</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="sy">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="kw">口味</label></th>
                                <td colspan="7">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="kw">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="dbc">大便</label></th>
                                <th><label for="dbc">便次</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="dbc">
									</span>
                                </td>
                                <th colspan="2"><label for="bz">便质</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="bz">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xbc">小便</label></th>
                                <th><label for="xbc">便次</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xbc">
									</span>
                                </td>
                                <th colspan="2"><label for="bs">便色</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="bs">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xq">情致</label></th>
                                <th><label for="xq">性情</label></th>
                                <td colspan="3">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xq">
									</span>
                                </td>
                                <th colspan="2"><label for="xg">性格</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="xg">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="xj">心悸</label></th>
                                <td colspan="8">[
                                    <input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" value="有无" id="xj">]
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="2"><label for="ss">舌诊</label></th>
                                <th><label for="ss">舌色</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="ss">
									</span>
                                </td>
                                <th><label for="st">舌体</label></th>
                                <td colspan="2">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="st">
									</span>
                                </td>
                                <th colspan="2"><label for="dt">动态</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="dt">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tz">苔质</label></th>
                                <td>
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="tz">
									</span>
                                </td>
                                <th><label for="ts">苔色</label></th>
                                <td colspan="5">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="ts">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="mz">脉诊</label></th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1" id="mz">
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="tzbs">体质辨识</label></th>
                                <td colspan="8">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="tzbs" value="体质辨识">]
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="zyzd">中医诊断</label></th>
                                <td colspan="4">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zyzd" value="中医诊断">]
									</span>
                                </td>
                                <th><label for="xyzd">西医诊断</label></th>
                                <td colspan="3">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="xyzd" value="西医诊断">]
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="zybz">辩证</label></th>
                                <td colspan="4">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zybz" value="中医辩证">]
									</span>
                                </td>
                                <th><label for="zyzz">治则</label></th>
                                <td colspan="3">
									<span>
										[<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="8" id="zyzz" value="中医治则">]
									</span>
                                </td>
                            </tr>
                            <tr>
                                <th>处置</th>
                                <td colspan="8">
                                    <!-- <div>
                                        <span>[</span>
                                        <span>
                                            [<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>4?this.value.length:4);" size="4" id="zycz" value="中医处置">]
                                        </span>
                                        <span>]</span>
                                    </div> -->
                                    <div class="chufang">
                                        <div>
                                            <span>【中药处方】：</span>
                                            <span>大青龙汤</span>
                                            <span>(<span>7</span><span>剂</span>)</span>
                                        </div>
                                        <div>
                                            <ul>
                                                <li><span>麻黄</span><span>6</span><span>克</span></li>
                                                <li><span>苦杏仁</span><span>6</span><span>克</span></li>
                                                <li><span>炙甘草</span><span>6</span><span>克</span></li>
                                                <li><span>生姜</span><span>6</span><span>克</span></li>
                                                <li><span>生石膏</span><span>15</span><span>克</span></li>
                                                <li><span>桂枝</span><span>6</span><span>克</span></li>
                                                <li><span>大枣</span><span>12</span><span>克</span></li>
                                            </ul>
                                        </div>
                                        <div style="clear:both;">
                                            <span>【医嘱】：<span></span></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>其他治疗计划</th>
                                <td colspan="8">
									<span>
										<input type="text" onkeydown="this.onkeyup();" onkeyup="this.size=(this.value.length>1?this.value.length:1);" size="1">
									</span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
	                </div>
	                <div data-dismiss="modal" style=" width:40px;  position:absolute; top:5px;right:65px;"><button  class="btn ">&times;</button></div>
	                <div data-dismiss="modal" style=" width:40px;  position:absolute; top:5px;left:65px;"><button  class="btn "><b>打印病历</b></button></div>
	            </div><!-- /.modal-dialog -->
	        </div>
			<!-- 模态框内容结束 -->
	</div>
	<!-- 清除浮动 -->
	<div class="qingchudakfd"></div>
    <script src="/zysystem/Public/mrjkda/bingshi.js"></script>

	<!-- 日历的js -->
	<script type="text/javascript">
    //jeDate.skin('gray');
	jeDate({
		dateCell:"#indate",//isinitVal:true,
		format:"YYYY-MM",
		isTime:false, //isClear:false,
		minDate:"2015-10-19 00:00:00",
		maxDate:"2016-11-8 00:00:00"
	});
    jeDate({
		dateCell:"#dateinfo",
		format:"YYYY年MM月DD日 hh:mm:ss",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19 00:00:00",
		okfun:function(val){alert(val)}
	});
	</script>
</body>
</html>