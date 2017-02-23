<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/zySystem/Public/css/note.css"/>
	<link rel="stylesheet" type="text/css" href="/zySystem/Public/editor/styles/simditor.css"/>
	<script type="text/javascript" src="/zySystem/Public/editor/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="/zySystem/Public/editor/scripts/module.js"></script>
	<script type="text/javascript" src="/zySystem/Public/editor/scripts/hotkeys.js"></script>
	<script type="text/javascript" src="/zySystem/Public/editor/scripts/simditor.js"></script>
</head>
<script>
$(document).ready(function(){
	var editor = new Simditor({
		textarea:$('#editor'),
		toolbar:['title','bold','italic','underline','table','color','ol','ul','hr'],
		placeholder:'请在此输入内容......',
	});
});
function frsub(){
	if($('input[name=list]').val()=='' || $('#editor').val()==''){
		alert("标题或内容不能为空！");
	}else{
		$('#fr').submit();
	}
}
</script>
<body>
	<br><br>
	<form action="/zySystem/index.php/Home/Mynote/consub" method="post" id="fr">
		标题：<input type="text" name="list" class="mlk">
		(<span style="color:red;">*必填</span>)&emsp;&emsp;
		<input type="button" value="保 存" onclick="frsub()" class="sub">
		<input type="hidden" name="p_id" value="<?php echo ($mlid); ?>">
		<br><br><hr style="width:100%;height:3px;background:#000;"/><br>
		<textarea id="editor" name="contents" autofocus></textarea>
	</form>
</body>
</html>