$(function(){
		// 历史处方移入移出
		$('#lscf').mouseover(function(){
	   		$(this).css('backgroundColor','#EEE');
	   }).mouseout(function(){
	   		$(this).css('backgroundColor','#F5F5F5');
	   });
	   //当天处方移入移出
	   $('#dtcf').mouseover(function(){
	   		$(this).css('backgroundColor','#EEE');
	   }).mouseout(function(){
	   		$(this).css('backgroundColor','#F5F5F5');
	   });
	   //预览处方移入移出
	   $('#ylcf').mouseover(function(){
	   		$(this).css('backgroundColor','#EEE');
	   }).mouseout(function(){
	   		$(this).css('backgroundColor','#F5F5F5');
	   });

	   //点击出详情
	   //药品处理
	   $('#lscf').click(function(){
	   		$('#dtcfxq').hide();
	   		$('#lscfxq').slideToggle();
	   });
	 
	   //比例，体重，调整药量
	$('#tzan').click(function(){
		var val = $('input[name="bltz"]:checked').val();
		if(val == 1){
			//获取输入比例
			var t1 = $('#t1').val();
			var t2 = $('#t2').val();
			var tt = t1/t2;
			// alert(tt);
			$('input:checkbox[name="xuanzeyp"]:checked').each(function(){
				var ttt = $(this).parent().find('.ypylke').val()*1*tt;
				$(this).parent().find('.ypylke').val(ttt);
			});
		}else{
			//获取输入体重与标准体重比例
			var tz = $('#ttzz').val();
			var bl = tz/50;
			// $('.zykf_ypke').each(function(){
			// 	var aab = $(this).val()*1*bl;
			// 	$(this).val(aab);
			// });
			$('input:checkbox[name="xuanzeyp"]:checked').each(function(){
				var ttt = $(this).parent().find('.zykf_ypke').val()*1*bl;
				$(this).parent().find('.ypylke').val(ttt);
			});
		}
	});

	//按体重按钮隐藏比例
	$('#zykf_bl1').click(function(){
		$('#blspan').show();
		$('#tzspan').hide();
	});
	$('#zykf_tz1').click(function(){
		$('#tzspan').show();
		$('#blspan').hide();
	});
	// 上方全选按钮
	$('#qxche').click(function(){
		if($('#qxche').is(':checked')){
			$('#cfmx :checkbox').prop('checked','checked');
		}else{
			$('#cfmx :checkbox').prop('checked',false);
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

	//加药
	$('#jyan').click(function(){
		if($('.ylypnm:last').val() == ''|| $('.ylypnm:last').val() == ' ' || $('.ylypnm:last').val() == '   '){
			return false;
		}else{
		if($('.zykf_yp').length > 0){
			var num = $('.zykf_yp:last .b1').html();
			$('.zykf_yp:last').after('<div class="zykf_yp"><div class="yp1"><b class="b1">'+(num*1+1)+'</b><span class="jianyao">X</span></div><div class="yp2"><select class="jfselect"><option value="1">煎法</option></select></div><div class="yp3"><input type="text" name="ylypm" class="ylypnm"></div><div class="yp4"><input type="checkbox" name="xuanzeyp" class="xzypche"><span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span></div>');
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
		}else{
			var str = '<div class="zykf_yp"><div class="yp1"><b class="b1">1</b><span class="jianyao">X</span></div><div class="yp2"><select class="jfselect"><option value="1">煎法</option></select></div><div class="yp3"><input type="text" name="ylypm" class="ylypnm"></div><div class="yp4"><input type="checkbox" name="xuanzeyp" class="xzypche"><span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span></div>'
			$('#cfmx').append(str);
			// $('#gjwys').html($('.zykf_yp').length);
				$('.ylypnm:last').focus()
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
			
		}
	}
		
	});
	//限制药量只能输入数字
	//待完成
	//
	//
	//
	//点击上箭头，自动加药
	$(document).keydown(function(env){
		if(env.keyCode==38){
			$('#jyan').click();
		}
	});


	//药品，鼠标移入移出
	$(document).on("mouseover",".zykf_yp",function(){
		$(this).css('border','2px solid #000');
		$(this).find('.yp3').click(function(){
			$(this).parent().find('.xzypche').prop('checked','checked');
		});
		
	}).on("mouseout",".zykf_yp",function(){
		$(this).css('border','1px solid #000');
	});

	//医嘱默认点选
	$('.zykf_dxanyz').click(function(){
		var abc = '';
		var gmcheck=document.getElementsByClassName('zykf_dxanyz');
		for(var i=0; i< gmcheck.length; i++){
			if(gmcheck[i].checked){
				abc+=gmcheck[i].value+",";
			}
		}
		$('#yztext').html(abc.substr(0,abc.length-1));
	});
	$('#yztext').click(function(){
		$('#yzxqs').html('<b style="font-size:20px;">请输入详细医嘱……</b>');
	});

	//药解关闭按钮
	$('#yjtc').mouseover(function(){
		$('#yjtc').css('backgroundColor','#F83607');
		$('#yjtc').css('color','#FFF');
		$('#yjtc').click(function(){
			$('#yjk').slideUp();
		});
	}).mouseout(function(){
		$('#yjtc').css('backgroundColor','');
		$('#yjtc').css('color','#CCC');
	});

	$(document).on("dblclick",".yp3",function(){
		// $('#yjxq').html($(this).html());
		$('#yjk').slideDown();
	});
	// 系统审核打开
	$('#xtsh').click(function(){
		$('#xtshk').slideDown();
	});

	//历史处方当天处方菜单
	$('#zccfdt').mouseover(function(){
		$(this).css('backgroundColor','#EEE');
	}).mouseout(function(){
		$(this).css('backgroundColor','');
	});
	$('#zccfls').mouseover(function(){
		$(this).css('backgroundColor','#EEE');
	}).mouseout(function(){
		$(this).css('backgroundColor','');
	});
	$('#zccfdt').click(function(){
		$('#lscfcd').show(function(){
			$(this).mouseout(function(){
				$(this).hide();
			});
		});
		$('#dtcfcd').hide();
	});
	$('#zccfls').click(function(){
		$('#dtcfcd').show(function(){
			$(this).mouseout(function(){
				$(this).hide();
			});
		});
		$('#lscfcd').hide();
	});

	//上方菜单
	$('.trr').mouseover(function(){
		$(this).css('backgroundColor','#5DB4CD');
	}).mouseout(function(){
		$(this).css('backgroundColor','#EEE');
	});
	//系统预审
	$('#xtys').mouseover(function(){
		$(this).css('backgroundColor','#E86161');
		$(this).click(function(){
			$('#xtysxq').slideDown();
		});
	}).mouseout(function(){
		$(this).css('backgroundColor','#FF6B6B');
	});
	//审核退出
	$('#sttcxx').mouseover(function(){
		$(this).css('backgroundColor','red').css('color','#FFF');
		$(this).click(function(){
			$('#xtysxq').slideUp();
		});
	}).mouseout(function(){
		$(this).css('backgroundColor','#FFB3A9').css('color','');
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
            data: ['温', '热', '平', '寒', '微热', '微寒', '凉']  
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
            data: [12,21,10,4,12,5,6],  
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

});