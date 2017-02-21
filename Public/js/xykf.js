$(function(){
	var str =  $('.tr2:last .textlon:nth(2)').html();
		var plstr = $('.tr2:last .textlon:nth(4)').html();
	//减药
	$(document).on('mouseover','.tr2 .td1:first-child',function(){
		$(this).css('backgroundColor','#D9532F');
		$(this).click(function(){
			$(this).parent().detach();
		});
	}).on('mouseout','.tr2 .td1:first-child',function(){
		$(this).css('backgroundColor','#E57976');
	});

	// 加一味药
	$('#jia').click(function(){
		
	 if($('.tr2').length<1){
		$('.tr1').after('<tr class="tr2"><td class="td1">X</td><td class="td1"><input type="text" name="bianma" class="textlon"></td><td class="td1"><input type="text"  class="ypname" name="mingcheng"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="guige"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="hanliang"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="baozhuang"></td><td class="td1"><input type="text" class="textlon" name="shuliang" value="1.00"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="zongliang"></td><td class="td1"><select class="textlon" name="tujing">'+str+'</select></td><td class="td1"><input type="text" class="textlon" name="yongliang" value="1.00"></td><td class="td1"><select class="textlon" name="cishu">'+plstr+'</select></td><td class="td1"><select name="tsyf" class="textlon"><option value="0">无</option><option value="1">皮试</option><option value="2">小壶</option></select></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="tianshu"></td></tr>');
	 }else{
	 	var nstr =  $('.tr2:last .textlon:nth(2)').html();
		var nplstr = $('.tr2:last .textlon:nth(4)').html();
		if($('.tr2:last .textlon:nth(0)').val().length < 2){
			alert('请输入药品编码');
		}else if($('.tr2:last .textlon:nth(1)').val().length < 1){
			alert('请输入药品数量');
		}else if($('.ypname:last').val().length<1){
			alert('请输入药品名')
		}else if($('.tr2:last .textlon:nth(3)').val().length < 1){
			alert('请输入次用量');
		}else{
			var id = $('.b1:last').html();
		
		$('.tr2:last').after('<tr class="tr2"><td class="td1">X</td><td class="td1"><input type="text" name="bianma" class="textlon"></td><td class="td1"><input type="text"  class="ypname" name="mingcheng"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="guige"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="hanliang"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="baozhuang"></td><td class="td1"><input type="text" class="textlon" name="shuliang" value="1.00"></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="zongliang"></td><td class="td1"><select class="textlon" name="tujing">'+str+'</select></td><td class="td1"><input type="text" class="textlon" name="yongliang" value="1.00"></td><td class="td1"><select class="textlon" name="cishu">'+plstr+'</select></td><td class="td1"><select name="tsyf" class="textlon"><option value="0">无</option><option value="1">皮试</option><option value="2">小壶</option></select></td><td class="td1"><input type="text" class="sspan" readonly="readonly" name="tianshu"></td></tr>');
		}
	 }
	});



	//保存处方
	


	//输入药品名查询框
		// $(document).on("input",".ypname",function(){
		// 		var htm = $(this).val();
		// 		var top = $(this).offset().top 
		// 		var left = $(this).offset().left
		// 		top = top-40;
		// 		left = left -110;
		// 		$('#aja').css('top',top+'px');
		// 		$('#aja').css('left',left+'px');
		// 		 $.ajax({
  //           type:'POST',
  //           url:"__MODULE__/Home/Ajax/drugWest",
  //           data:{htm:htm},
  //           dataType:'json',
  //           success:function(dd)
  //           {
  //               alert(dd);
  //               $.each(dd,function(idx,item){
  //               //输出
  //               // alert(item.id+"号："+item.name);
              
  //               });
               
  //           },
  //           error:function()
  //           {
  //               alert('Ajax请求失败');
  //           }
  //       });
		// 		$('#aja').html($(this).val());
		// 		$('#aja').fadeIn();
		// 		$(this).blur(function(){
		// 		$('#aja').fadeOut();
		// 	});
		// 	});
		// 	
		//西药名称 	
		$(document).on('mouseover','.westtr',function(){
		$(this).css('backgroundColor','#A8CBF1').css('color','#fff');
		$(this).click(function(){
			
			// if($(this).find(' td:nth-child(2)').find('.che').is(':checked')){
			// 	$(this).find(' td:nth-child(2)').find('input').attr('checked',false);
			// }else{
			// 	$(this).find(' td:nth-child(2)').find('input').attr('checked',true);
				
			// }
			xybma = $(this).children().first().html();
			$('#a123').html(xybma);
			$('#exit').click();
		});
	}).on('mouseout','.westtr',function(){
		$(this).css('backgroundColor','').css('color','');;
	});
});