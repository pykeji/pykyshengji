//2017/02/15
//回车添加tr并合计
function zh(){
	if($("#name").val() == ''){
		return false;
	}else{
		var number = $("#number").val();
		var price = $("#danjia").val();
		var zh = (number*price).toFixed(2);
		$("#jine").val(zh);
		var flag = false;
		$('#number').keypress(function(event){
		    var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		    	if(!flag == true){
		    		var id = $(".tab4").find("tr").length;
		            var name = $("#name").val();
		            var danwei = $("#danwei").val();
		            var danjia = $("#danjia").val();
		            var number = $("#number").val();
		            var jine = $("#jine").val();
		            $(".tab4").append("<tr class='sty1' name='tableSty'><td>"+id+"</td><td class=left>"+name+"</td><td class=left>"+danwei+"</td><td>"+danjia+"</td><td>"+number+"</td><td>"+jine+"</td></tr>");
		            flag = true;

			        //清空上方数据
			        $("#name").val('');
				    $("#guige").val('');
			        $("#danwei").val('');
			        $("#danjia").val('.00');
			        $("#number").val('.00');
			        $("#jine").val('.00');

			        //总计
			        var zje = 0.00;
			        $(".tab4 tr").not(":first").each(function(){
                		obj = $(this).find("td:last").text();
                		zje = (Number(zje) + Number(obj)).toFixed(2);
            		});
			        $(".tab3 tr td:last").text('￥'+zje);
			        $(".tab3 tr td:last").css("color","red");
			        $(".tab3 tr td:last").css("font-weight","bold");
			        $(".tab3 tr td:last").css("font-size","20px");
				}else{
				    return false;
				}
			}  
		});
	}
}
//选中tr变颜色
var id = 0;
$(".tab4").delegate("tr","click",function(){
	var tsty1 = document.getElementsByName("tableSty");
	for(var i=0;i<tsty1.length;i++){
	    tsty1[i].className="sty1";
	}
	$(this).attr("class","sty2");
	id = this.rowIndex;
})

//删除按钮
function doFun(x){
	var sD=document.getElementById("Dshow");
	if(id == 0){/*判断是否选中一行*/
		return false;
	}else{
		if(x == "doClose"){
			var len = $(".tab4").find("tr").length;
			var tab = $(".tab4 tr");
			for(var i=1;i<=len-1;i++){
				if(i == id){
					tab[i].remove();//删除选中行
					sD.style.display = "none";
					var len1 = $(".tab4").find("tr").length;
					var value = 0.00;
					if(len1 == 1){//收费列表为空
						value = value;
					}else{
						for(var k=1;k<=len1-1;k++){//改变序号并更改合计金额
							$(".tab4 tr:nth-child("+(k+1)+")").children('td:eq(0)').text(k);
							var value1 = Number($(".tab4 tr:nth-child("+(k+1)+")").children('td:last').text());
							value = (Number(value) + Number(value1)).toFixed(2);
						}
					}
					$(".tab3 tr td:last").text('￥'+value);
			        $(".tab3 tr td:last").css("color","red");
			        $(".tab3 tr td:last").css("font-weight","bold");
			        $(".tab3 tr td:last").css("font-size","20px");
				}				
			}
		}	
	}
	if(x == "doShow"){
		sD.style.display = "block";
	}
	if(x == "returnFalse"){
		sD.style.display = "none";
	}
}

//收费保存数据库
function sub(){
	if($(".tab4 tr").length == 1){
		return false;
	}else{
		var tableInfo = "";
	 	var tableObj = document.getElementById('tab4');
	 	for(var i = 0; i < tableObj.rows.length; i++) { //遍历Table的所有Row
	  		for(var j = 0; j < tableObj.rows[i].cells.length; j++) { //遍历Row中的每一列
	   			tableInfo += tableObj.rows[i].cells[j].innerText; //获取Table中单元格的内容
	   			tableInfo += " ";
	  		}
	  		tableInfo += "\n";
	 	}
	 	alert(tableInfo);
		$("form").submit();
	}
}