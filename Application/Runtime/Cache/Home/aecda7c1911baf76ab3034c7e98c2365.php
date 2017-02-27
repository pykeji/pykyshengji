<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="/zySystem/Public/css/zykf.css">
	<link rel="stylesheet" href="/zySystem/Public/css/bootstrap.css">
	<script type="text/javascript" src="/zySystem/Public/jq/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/zySystem/Public/js/echarts.simple.min.js"></script>
	<script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
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


	<!-- 隐藏域带处方名 -->
	<input type="hidden" id="ycydcfm" value="<?php echo $zy_yp[0]['cf_name'] ?>">
	<!-- 隐藏域带处方树 -->
	<input type="hidden" id="ycydcfs" value="<?php echo $zy_yp[0]['cf_tree'] ?>">


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
			<?php if($szjj){ ?>
			<a href="#" class="lli"  data-toggle='modal' data-target='#myModal2'>随症加减</a>
			<?php }else{} ?>
			<a href="#" class="lli" style="color:red" id="shalj" data-toggle="modal" data-target="#myModal1">审核</a>
			<a href="#" class="lli" style="color:#3E597A" id="abccfalj">保存</a>
		</div>
		<!-- 用户操作调整div -->
		<div id="yhcz">
		<div id="gd">
			<label id="yf">
				<input type="checkbox" name="yfche" id="yfchecked">孕妇
			</label>
			<span class="span">
				剂量：<input type="text" name="jiliang" value="1" class="text" id="jlinp">
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
					<input type="text" name="ylypm" class="ylypnm" value="<?php echo ($vo["drug_name"]); ?>" id="<?php echo 'a'.$numdr ?>">
					<input type="hidden" value="<?php echo ($vo["xw1"]); ?>" class="wrphhid">
					<input type="hidden" class="yincangcode" value="<?php echo ($vo["drug_code"]); ?>">
					<!-- <?php echo ($vo["drug_name"]); ?> -->
				</div>
				<div class="yp4">
					<input type="checkbox" name="xuanzeyp" class="xzypche">
					<span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke"><span class="dw11"><?php echo ($vo["dw"]); ?></span></span>
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
			<b id="abc">性味归经</b>
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
	<!-- 随症加减模态框 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel2"><?php echo $szjj[0]['szz']; ?></h4>
            </div>
            <form action="<?php echo U('User/uploadinfo');?>" method="post">
            <div class="modal-body" id="yscon">
            <p>
              <?php echo $szjj[0]['jjxx']; ?>
             </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="exit2">关闭</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
	<!-- 结束模态框 -->


	<!-- 审核模态框 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:800px!important;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel2">药品审核</h4>
            </div>
           
            <div class="modal-body" style="height:460px;">
               <div id="shcontent" style="overflow:auto; height:450px; width:60%; float:left;">
               	
               </div>
               <div style="float:left; width:39%; height:400px; border-left:1px solid #ccc;" id="rightsh">
               <span id="sbfsjw" style="color:blue; font-size:16px;"></span><br/>
               	<span id="yfsy" style="color:red; display:none;"></span>
               	<br/>	<span id="yfjy" style="color:red; display:none; font-size:18px; font-weight: bold;"></span>
               </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary" id="ystjan">预审通过</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

	<!-- 模态框结束 -->


</div>
	</body>
	<script type="text/javascript">
	$(function(){
		//计算温热平寒数量

		
	});
	      //温热平寒计算
        		wen = 0;
        		re = 0;
        		ping = 0;
        		han = 0;
        		weiwen = 0;
        		weihan = 0;
        		liang = 0;
        	$('.wrphhid').each(function(){
        		aa = $(this).val();
        		
        		if(aa == '温'){
        			wen = wen*1+1;
        		}else if(aa == '热'){
        			re = re*1+1;
        		}else if(aa == '平'){
        			ping = ping*1+1;
        		}else if(aa == '寒'){
        			han = han*1+1;
        		}else if(aa == '微温'){
        			weiwen = weiwen*1+1;
        		}else if(aa == '微寒'){
        			weihan = weihan*1+1;
        		}else if(aa == '凉'){
        			liang = liang*1+1;
        		}
        	});
        	zong = $('.wrphhid').length;
        	wenbi = Math.round((wen / zong * 10000) / 100.00);
        	rebi = Math.round((re / zong * 10000) / 100.00);
        	pingbi = Math.round((ping / zong * 10000) / 100.00);
        	hanbi = Math.round((han / zong * 10000) / 100.00);
        	weiwenbi = Math.round((weiwen / zong * 10000) / 100.00);
        	weihanbi = Math.round((weihan / zong * 10000) / 100.00);
        	liangbi = Math.round((liang / zong * 10000) / 100.00);


		$(document).on("input",".ylypnm",function(){
			fangid = $(this).attr('id');
				// var top = $(this).offset().top 
				// var left = $(this).offset().left
				// top = top+50;
				// left = left+100;
				// $('#zykf_cxypk').css('top',top+'px');
				// $('#zykf_cxypk').css('left',left+'px');
				var val = $(this).val();
					$.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/zysele');?>",
            data:{val:val},
            dataType:'json',
            success:function(dd)
            {
                var str = '<ul>';
                $.each(dd,function(idx,item){
                //输出
                // alert(item.id+"号："+item.name);
              		str += '<li class="zydrugLi">'+item.drug_name+'</li>';
                });
                str += '</ul>';
               $('#zykf_cxypk').html(str);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });


				$('#zykf_cxypk').fadeIn();
				$(this).blur(function(){
				$('#zykf_cxypk').fadeOut();
			});
			});

		//li的鼠标移入移出
		$(document).on('mouseover','.zydrugLi',function(){
			$(this).css('backgroundColor','#A8CBF1');
			$(this).css('color','#FFF');
			$(this).click(function(){
				var nam = $(this).html();
				var sss = '#'+fangid;
				$.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/jia');?>",
            data:{val:nam},
            dataType:'json',
            success:function(dd)
            {
               var code = dd.drug_code;
               var wrp = dd.xw1;
               $(sss).next('input').val(wrp);
               $(sss).next('input').next('input').val(code);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
				$(sss).val(nam);
			});
		}).on('mouseout','.zydrugLi',function(){
			$(this).css('backgroundColor','');
			$(this).css('color','');
		});

		//加药
	$('#jyan').click(function(){
		if($('.ylypnm:last').val() == ''|| $('.ylypnm:last').val() == ' ' || $('.ylypnm:last').val() == '   '){
			return false;
		}else{
		if($('.zykf_yp').length > 0){
			var num = $('.zykf_yp:last .b1').html();
			$('.zykf_yp:last').after('<div class="zykf_yp"><div class="yp1"><b class="b1">'+(num*1+1)+'</b><span class="jianyao">X</span></div><div class="yp2"><select class="jfselect"><option value="1">煎法</option></select></div><div class="yp3"><input type="text" name="ylypm" class="ylypnm" id="'+'a'+(num*1+1)+'"><input type="hidden" value="" class="wrphhid"><input type="hidden" class="yincangcode" value=""></div><div class="yp4"><input type="checkbox" name="xuanzeyp" class="xzypche"><span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span></div>');
				// $('#gjwys').html($('.zykf_yp').length);
				$('.ylypnm:last').focus().keydown(function(env){
					if(env.keyCode==13){
						// $(this).blur();
						$('.ypylke').focus().select().keydown(function(env){
							alert(left);
							if(env.keyCode==13){
								if($(this).val() == 0.00){
									alert('请输入药量');
								}else{
									$(this).blur();
								}
							}
						});
					}
				});
				
			
		}else{
			var str = '<div class="zykf_yp"><div class="yp1"><b class="b1">1</b><span class="jianyao">X</span></div><div class="yp2"><select class="jfselect"><option value="1">煎法</option></select></div><div class="yp3"><input type="text" name="ylypm" class="ylypnm" id="'+'a'+(num*1+1)+'"><input type="hidden" value="" class="wrphhid"><input type="hidden" class="yincangcode" value=""></div><div class="yp4"><input type="checkbox" name="xuanzeyp" class="xzypche"><span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span></div>'
			$('#cfmx').append(str);
			// $('#gjwys').html($('.zykf_yp').length);
				$('.ylypnm:last').focus();

			
		}
	}
		
	});



	//减药
	$(document).on("mouseover",".jianyao",function(){
		$(this).css('backgroundColor','rgba(255,0,0,0.8)').css('color','white');
		$(this).click(function(){
			//后面的编号排序
			$(this).parent().parent().nextAll().find('.b1').each(function(){
				$(this).html($(this).html()-1);
			});
			$(this).parent().parent().detach();


			// $('#gjwys').html($('.zykf_yp').length);
		});
	}).on("mouseout",".jianyao",function(){
		$(this).css('backgroundColor','#FFB3A9').css('color','#000');
	});

	


		//审核
		$('#shalj').click(function(){

			$('#ystjan').attr('disabled',false);
			$('#yfsy').hide();
			$('#yfjy').hide();
			//获取所有药品code
			var zycode = [];
			var num3 = 0;
			$(".yincangcode").each(function(){
         		zycode[num3] = $(this).val();
         		num3+=1;
			});

			//去数据库查符合条件的东西
			$.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/fanwei');?>",
            data:{val:zycode},
            dataType:'json',
            success:function(dd)
            {
            	// console.log(dd);
            	// alert(dd);
            	var str = '';
            	var arr = [];
            	 $.each(dd,function(idx,item){
               		if($.inArray(item.id,arr) == -1){
               			arr.push(item.id);
               			if(item.lx == 1){
               				var yp1 = $("input[type='hidden'][value="+item.yp1+"]").prev().prev().val();
               				var yp2 = $("input[type='hidden'][value="+item.yp2+"]").prev().prev().val();
               				str += yp1+','+yp2+'是反药<br/>';
               			}else if(item.lx == 2){
               				var yp1 = $("input[type='hidden'][value="+item.yp1+"]").prev().prev().val();
               				var yp2 = $("input[type='hidden'][value="+item.yp2+"]").prev().prev().val();
               				str += yp1+','+yp2+'是畏药<br/>';
               			}else{
               				var yp1 = $("input[type='hidden'][value="+item.yp1+"]").prev().prev().val();
               				var yp2 = $("input[type='hidden'][value="+item.yp2+"]").prev().prev().val();
               				str += yp1+','+yp2+'有冲突<br/>';
               			}
               			
               		};

                });
            	 $('#sbfsjw').html(str);
            	 // alert(str);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        		
			});
			
			

		

			var yunfu = 0;//0为不是孕妇
			if($('#yfchecked').is(':checked')){
				yunfu = 1;
			}else{
				yunfu = 0;
			}
			var ypname = [];
			var ypkg = [];
			var ypcode = [];
			var num = 0;
			$(".ylypnm").each(function(){
         		ypname[num] = $(this).val();
         		num+=1;
			});
			var num1 = 0; 
			$(".ypylke").each(function(){
         		ypkg[num1] = $(this).val();
         		num1+=1;
			});
			var num2 = 0;
			$(".yincangcode").each(function(){
         		ypcode[num2] = $(this).val();
         		num2+=1;
			});
			var str = '<table style="width:100%;"><tr><td><b>药品</b></td><td><b>用量</b></td></tr>';
			for(var i=0;i<ypname.length;i+=1){
				str+='<tr><td>'+ypname[i]+'</td><td>'+ypkg[i]+'　克</td></tr>';

			}
			str+='</table>';
			if(yunfu == 0){
				
			}else{
				$.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/women');?>",
            data:{val:ypcode},
            dataType:'json',
            success:function(dd)
            {
            	var yfsy = '';
            	var yfjy = '';
                $.each(dd,function(idx,item){
               		// alert(item.drug_name+item.pregnant_women);
               		if(item.pregnant_women == 1){
               			$('#yfsy').show();
               			yfsy+=item.drug_name+',';
               		}else if(item.pregnant_women == 2){
               			$('#yfjy').show();
               			$('#ystjan').attr('disabled','disabled');
               			yfjy+=item.drug_name+',';
               		}else{
               			// 无
               		}
                });
                yfsy+='为孕妇慎用药品';
                yfjy+='为孕妇禁用药品，请返回修改';
                $('#yfsy').html(yfsy);
                $('#yfjy').html(yfjy);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        		});
			}
			$('#shcontent').html(str);
			// alert(123);

		});


		//保存处方
		$('#abccfalj').click(function(){
			//获取所有药品code
			var zycode = [];
			var num = 0;
			$(".yincangcode").each(function(){
         		zycode[num] = $(this).val();
         		num+=1;
			});
			//获得所有的药品用量
			var ypkg = [];
			var num1 = 0; 
			$(".ypylke").each(function(){
         		ypkg[num1] = $(this).val();
         		num1+=1;
			});
			//获取所有单位
			var dw = [];
			var num9 = 0;
			$(".dw11").each(function(){
         		dw[num9] = $(this).html();
         		num9+=1;
			});
			//获得所有的煎法
			var num2 = 0;
			var jianfa =[];
			$('.jfselect').each(function(){
         		jianfa[num2] = $(this).val();
         		num2+=1;
			});
			//获得剂量
			var jiliang = $('#jlinp').val();
			//获得医嘱
			var yizhu = $('#yztext').val();
			//是否为孕妇
			var yunfu = 0;
			if($('#yfchecked').is(':checked')){
				yunfu = 1;//是孕妇
			}else{
				yunfu = 0;//不是孕妇
			}
			//获取所有药品名
			var num3 = 0;
			var yaoming = [];
			$('.ylypnm').each(function(){
         		yaoming[num3] = $(this).val();
         		num3+=1;
			});
			// console.log(yaoming);
			// 获取药品序号
			var ypxuhao = [];
			var num4 = 0;
			$('.b1').each(function(){
         		ypxuhao[num4] = $(this).html();
         		num4+=1;
			});
			//获取处方名
			var cfname = $('#ycydcfm').val();
			//获取处方树
			var cftree = $('#ycydcfs').val();
			// 保存处方
			$.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/zyBaocun');?>",
            data:{ypxuhao:ypxuhao,zycode:zycode,yaoming:yaoming,ypkg:ypkg,jianfa:jianfa,yunfu:yunfu,jiliang:jiliang,yizhu:yizhu,cfname:cfname,cftree:cftree,dw:dw},
            dataType:'json',
            success:function(dd)
            {
               alert(dw[0]);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
       	 });
			
		});


  


		 // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('wrphbzt'));
        // 指定图表的配置项和数据
        var option = {  
    title: {  
        x: 'center',  
        text: 'Age',  
        subtext: 'Rainbow bar for Age',  
        link: 'http://echarts.baidu.com/doc/example.html'  
    },  
    tooltip: {  
        trigger: 'item',  
        formatter: '{b}:\n{c}%'  
    },  
    toolbox: {  
        show: true,  
        feature: {  
            dataView: {show: true, readOnly: false},  
            restore: {show: true},  
            saveAsImage: {show: true}  
        }  
    },  
    calculable: true,  
    grid: {  
        borderWidth: 0, 
        x:40,
        x2:10, 
        y: 95,  
        y2: 85  
    },  
    xAxis: [  
        {  
            type: 'category',  
            show: true,  
            data: ['温', '热', '平', '寒', '微温', '微寒', '凉']  
        }  
    ],  
    yAxis: [  
        {  
            type: 'value',  
            axisLabel: {  
                  show: true,  
                  interval: 'auto',  
                  formatter: '{value} %'  
                },  
                splitLine:{ 
                               show:false
              },
            show: true  
        }  
    ],  
    series: [  
        {  
            name: 'Age',  
            type: 'bar', 
            barWidth : 40,//柱图宽度 
            itemStyle: {  
                normal: {  
                    color: function(params) {  
                        // build a color map as your need.  
                        var colorList = [  
                          '#FAD348','#F28504','#4FCD71','#0DB4E9','#EBA14A',  
                           '#8AC9DC','#63C3BF','#FAD860','#F3A43B','#60C0DD',  
                           '#D7504B','#C6E579','#F4E001','#F0805A','#26C0C0'  
                        ];  
                        return colorList[params.dataIndex]  
                    },  
                    label: {  
                        show: true,  
                        position: 'top',  
                        formatter: '{b}\n{c}%'  
                    }  
                }  
            },  
            data: [wenbi,rebi,pingbi,hanbi,weiwenbi,weihanbi,liangbi],  
            markPoint: {  
                tooltip: {  
                    trigger: 'item',  
                    backgroundColor: 'rgba(0,0,0,0)',  
                    formatter: function(params){  
                        return '<img src="'   
                                + params.data.symbol.replace('image://', '')  
                                + '"/>';  
                    }  
                },  
                data: [  
                    {xAxis:0, y: 350, name:'4-14', symbolSize:20, symbol: 'image://../asset/ico/折线图.png'},  
                    {xAxis:1, y: 350, name:'15-24', symbolSize:20, symbol: 'image://../asset/ico/柱状图.png'},  
                    {xAxis:2, y: 350, name:'25-34', symbolSize:20, symbol: 'image://../asset/ico/散点图.png'},  
                    {xAxis:3, y: 350, name:'35-44', symbolSize:20, symbol: 'image://../asset/ico/K线图.png'},  
                    {xAxis:4, y: 350, name:'45-54', symbolSize:20, symbol: 'image://../asset/ico/饼状图.png'},  
                    {xAxis:5, y: 350, name:'55-64', symbolSize:20, symbol: 'image://../asset/ico/雷达图.png'},  
                    {xAxis:6, y: 350, name:'65以上', symbolSize:20, symbol: 'image://../asset/ico/和弦图.png'},  
                    //{xAxis:7, y: 350, name:'Force', symbolSize:20, symbol: 'image://../asset/ico/力导向图.png'},  
                    //{xAxis:8, y: 350, name:'Map', symbolSize:20, symbol: 'image://../asset/ico/地图.png'},  
                    //{xAxis:9, y: 350, name:'Gauge', symbolSize:20, symbol: 'image://../asset/ico/仪表盘.png'},  
                    //{xAxis:10, y: 350, name:'Funnel', symbolSize:20, symbol: 'image://../asset/ico/漏斗图.png'},  
                ]  
            }  
        }  
    ]  
};  
    

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
	</script>
</html>