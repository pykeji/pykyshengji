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
function vtan(){
	var id=<?php echo ($cons[0]['id']); ?>;
	$.ajax({
		type:"post",
		url:"/zySystem/index.php/Home/Mynote/vdel",
		dataType:"json",
		data:{"id":id},
		success:function(e){
			alert(e);
			parent.location.reload();
		}
	});
}
</script>
<script>
	document.oncontextmenu=new Function("event.returnValue=false;");
</script>
<body>
	<br><br><br>
	<div style="width:96%;margin-left:2%;">
		<form action="/zySystem/index.php/Home/Mynote/vsave/id/<?php echo ($cons[0]['id']); ?>" method="post">
			文章标题：<input type="text" name="list" value="<?php echo ($cons[0]['list']); ?>" class="vml">
			<input type="submit" value="保存修改" class="vsub">&emsp;
			<input type="button" value="删除文档" class="del" onclick="vtan()">&emsp;
			<a href="/zySystem/index.php/Home/Mynote/rpro">
				<input type="button" value="关闭" class="sub">
			</a><br>
			<br><hr style="width:100%;height:3px;background:#000;"/><br>
			<textarea id="editor" name="contents"><?php echo ($cons[0]['contents']); ?></textarea>
		</form>
	</div>
</body>
</html>