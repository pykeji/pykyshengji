<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的文档</title>
</head>
<script>
	document.oncontextmenu=new Function("event.returnValue=false;");
</script>
<frameset cols="22%,*">
	<frame src="/zySystem/index.php/Home/Mynote/mllist" scrolling="No" noresize="noresize" id="leftTree">
	<frame src="/zySystem/index.php/Home/Mynote/rpro" scrolling="No" noresize="noresize" id="rightTree" name="right">
</frameset>
</html>