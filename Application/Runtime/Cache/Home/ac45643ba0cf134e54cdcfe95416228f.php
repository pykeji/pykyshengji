<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		*{
			margin:0px auto;padding:0px;
		}
		form{
			text-align:center;line-height:35px;
		}
		.ml{
			width:15em;height:30px;border:1px solid black;
			text-align:center;line-height:30px;
			outline:none;font-size:16px;
			background:none;
		}
		.subm{
			width:4em;height:35px;font-size:14px;
			line-height:35px;text-align:center;
		}
	</style>
</head>
<script>
function ees(){
	var fr=document.getElementById("fr");
	var ml=document.getElementsByClassName('ml')[0];
	if(ml.value==''){
		alert("请输入目录名称！");
	}else{
		fr.submit();
	}
}
</script>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<br><br><br><br>
	<form action="/zysystem/index.php/Home/Mynote/mlsubmit" method="post" id="fr">
		目录名称:<input type="text" name="element" class="ml"><br><br>
		<input type="button" value="保存" class="subm" onclick="ees()">&emsp;
		<a href="/zysystem/index.php/Home/Mynote/rpro">
			<input type="button" value="返回" class="subm">
		</a>
	</form>
	
</body>
</html>