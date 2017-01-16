$(function(){
	// 加一味药
	$('#jia').click(function(){
		var id = $('.b1 :last').html();
		id = id*1+1;
		$('.tr2:last').after('<tr class="tr2"><td class="td1"><b class="b1">'+id+'</b></td><td class="td1"><input type="text" class="textlon"></td><td class="td1"><input type="text"  class="ypname"></td><td class="td1"><input type="text" class="sspan" readonly="readonly"></td><td class="td1"><input type="text" class="sspan" readonly="readonly"></td><td class="td1"><input type="text" class="sspan" readonly="readonly"></td><td class="td1"><input type="text" class="textlon"></td><td class="td1"><input type="text" class="sspan" readonly="readonly"></td><td class="td1"><select class="textlon"><option value="1">静滴</option></select></td><td class="td1"><input type="text" class="textlon"></td><td class="td1"><select class="textlon"><option value="1">1次/日</option></select></td><td class="td1"><input type="radio" name="tsyf">无<input type="radio" name="tsyf">皮试<input type="radio" name="tsyf">小壶</td><td class="td1"><input type="text" class="sspan" readonly="readonly"></td></tr>');
	});


	//输入药品名查询框
		$(document).on("input",".ypname",function(){
				var top = $(this).offset().top 
				var left = $(this).offset().left
				top = top-40;
				left = left -110;
				$('#aja').css('top',top+'px');
				$('#aja').css('left',left+'px');
				$('#aja').html($(this).val());
				$('#aja').fadeIn();
				$(this).blur(function(){
				$('#aja').fadeOut();
			});
			});
});