<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/zySystem/Public/css/note.css"/>
	<script type="text/javascript" src="/zySystem/Public/editor/scripts/jquery.min.js"></script>
</head>
<script>
window.onload=function(){
	$("p.listp").click(function(){
		$(this).next(".listul").slideToggle(500).siblings(".listul").slideUp(300);
	});
}
</script>
<body>
	<br><br>
	<p class="titlep">目录列表</p>
	<div id="mldiv">
		<?php if(is_array($elet)): foreach($elet as $key=>$ml): ?><p class="listp">
				<a href="/zySystem/index.php/Home/Mynote/setnote?id=<?php echo ($ml['id']); ?>" target="right">
					&emsp;<?php echo ($ml["element"]); ?>
				</a>
			</p>
			<ul class="listul">
				<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['element'] == $ml['element']): ?><a href="/zySystem/index.php/Home/Mynote/view?id=<?php echo ($vo["id"]); ?>" target="right">
						<li class="listli" id="<?php echo ($vo["id"]); ?>">&emsp;<?php echo ($vo["list"]); ?></li>
					</a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul><?php endforeach; endif; ?>
	</div>
	<a href="/zySystem/index.php/Home/Mynote/setml" target="right">
		<p class="titlep">新建目录</p>
	</a>
	<a href="/zySystem/index.php/Home/Mynote/delml" target="right">
		<p class="titlep">删除目录</p>
	</a>
</body>
</html>