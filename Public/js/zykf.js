$(function(){
	//鼠标右击失效
		$(document).on({  
    "contextmenu": function(e) {  
        console.log("ctx menu button:", e.which);   
  
        // Stop the context menu  
        e.preventDefault();  
    },  
    "mousedown": function(e) {   
        console.log("normal mouse down:", e.which);   
    },  
    "mouseup": function(e) {   
        console.log("normal mouse up:", e.which);   
    }  
});
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
				var ttt = $(this).parent().find('.ypylke').val()*1*bl;
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


			// $('#gjwys').html($('.zykf_yp').length);
		});
	}).on("mouseout",".jianyao",function(){
		$(this).css('backgroundColor','#FFB3A9').css('color','#000');
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


	

});