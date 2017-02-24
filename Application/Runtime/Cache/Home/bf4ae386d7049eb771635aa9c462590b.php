<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		*{
			margin:0px auto;padding:0px;
		}
		table{
			width:80%;border:1px solid #ccc;
			margin-left:10%;
		}
		tr{
			width:100%;height:35px;
			border:1px solid #ccc;
			line-height:35px;
		}
		td{
			text-align:center;
			border:1px solid #ccc;
		}
		.sback{
			width:4em;height:35px;font-size:14px;
			line-height:35px;text-align:center;
		}
	</style>
</head>
<script>
	document.oncontextmenu=new Function("event.returnValue=false;");
</script>
<body>
	<br><br><br>
	<div style="width:80%;text-align:right;margin:auto;">
		<a href="/zySystem/index.php/Home/Mynote/rpro">
			<input type="button" value="返回" class="sback">
		</a>
	</div><br>
	<table>
		<tr>
			<td style="width:20%;font-weight:bold;">ID</td>
			<td style="width:60%;font-weight:bold;">目录名称</td>
			<td style="width:20%;font-weight:bold;">操作</td>
		</tr>
		<?php if(is_array($nodes)): foreach($nodes as $key=>$nodes): ?><tr>
				<td><?php echo ($nodes["id"]); ?></td>
				<td><?php echo ($nodes["element"]); ?></td>
				<td>
					<a href="/zySystem/index.php/Home/Mynote/delete?id=<?php echo ($nodes["id"]); ?>">删除</a>
				</td>
			</tr><?php endforeach; endif; ?>
	</table>	
</body>
</html>