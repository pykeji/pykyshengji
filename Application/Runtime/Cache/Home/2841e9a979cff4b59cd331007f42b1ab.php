<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>体质辨识保存界面</title>
</head>
<body>
<div style="display: none;">
    <?php
 class word{ function start(){ ob_start(); print'<html xmlns:o="urn:schemas-microsoft-com:office:office"
			xmlns:w="urn:schemas-microsoft-com:office:word"
			xmlns="http://www.w3.org/TR/REC-html40">'; } function save($path){ print "</html>"; $data = ob_get_contents(); ob_end_clean(); $this->wirtefile ($path,$data); } function wirtefile ($fn,$data){ $fp=fopen($fn,"wb"); fwrite($fp,$data); fclose($fp); } } $word = new word; $word->start(); ?>
<div class="rep-title">中医体制辨识鉴定报告</div>
<div>
    <table border="1" width="90%" class="center">
        <tr>
            <td width="5%">姓名</td>
            <td colspan="2" width="10%"><?php echo ($res1["br_name"]); ?></td>
            <td width="5%">性别</td>
            <td width="5%"><?php echo ($res1["xb"]); ?></td>
            <td width="5%">年龄</td>
            <td width="5%"><?php echo ($res1["nl"]); ?></td>
            <td width="10%">日期</td>
            <td colspan="3" width="10%"><?php echo ($res1["jz_date"]); ?></td>
        </tr>
        <tr>
            <td>身份证号</td>
            <td colspan="6"><?php echo ($res1["pass"]); ?></td>
            <td>联系方式</td>
            <td colspan="3"><?php echo ($res1["tel"]); ?></td>
        </tr>
        <tr>
            <td>工作单位</td>
            <td colspan="10"><?php echo ($res1["dw"]); ?></td>
        </tr>
        <tr>
            <td rowspan="2">体制类型</td>
            <td colspan="2"><?php echo ($res1["tzname8"]); ?>-<?php echo ($res1["tzjg8"]); ?></td>
            <td colspan="2"><?php echo ($res1["tzname"]); ?>-<?php echo ($res1["tzjg"]); ?></td>
            <td colspan="2"><?php echo ($res1["tzname1"]); ?>-<?php echo ($res1["tzjg1"]); ?></td>
            <td colspan="2"><?php echo ($res1["tzname2"]); ?>-<?php echo ($res1["tzjg2"]); ?></td>
            <td colspan="2"><?php echo ($res1["tzname3"]); ?>-<?php echo ($res1["tzjg3"]); ?></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo ($res1["tzname4"]); ?>-<?php echo ($res1["tzjg4"]); ?></td>
            <td colspan="2"><?php echo ($res1["tzname5"]); ?>-<?php echo ($res1["tzjg5"]); ?></td>
            <td colspan="2"><?php echo ($res1["tzname6"]); ?>-<?php echo ($res1["tzjg6"]); ?></td>
            <td colspan="2"><?php echo ($res1["tzname7"]); ?>-<?php echo ($res1["tzjg7"]); ?></td>
            <td colspan="2"></td>
        </tr>
    </table>
</div>
<?php if(is_array($baoj)): $i = 0; $__LIST__ = $baoj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $bj = M('tz_baojian'); $name = substr($vo,0,9); $res2 = $bj -> where("tzname = '$name'") -> select(); ?>
    <div class="rep-title1"><?php echo ($vo); ?></div>
    <div class="rep-title1"><?php echo ($res2[0][title]); ?></div>
    <div class="rep-inf">
        <p><?php echo ($res2[0][content]); ?></p>
    </div>
    <div class="rep-title1"><?php echo ($res2[0][title1]); ?></div>
    <div class="rep-inf">
        <p><?php echo ($res2[0][content1]); ?></p>
    </div>
    <div class="rep-title1"><?php echo ($res2[0][title2]); ?></div>
    <div class="rep-inf">
        <p><?php echo ($res2[0][content2]); ?></p>
    </div>
    <div class="rep-title1"><?php echo ($res2[0][title3]); ?></div>
    <div class="rep-inf">
        <p><?php echo ($res2[0][content3]); ?></p>
    </div>
    <div class="rep-title1"><?php echo ($res2[0][title4]); ?></div>
    <div class="rep-inf">
        <p><?php echo ($res2[0][content4]); ?></p>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
<?php
 $word->save("Public/456.doc"); ?>
</div>
</body>
</html>