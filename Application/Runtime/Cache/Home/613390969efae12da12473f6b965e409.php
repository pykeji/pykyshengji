<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>30-36月龄另存</title>
</head>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
<body>
<div style="display: none;">
    <?php
 class word{ function start(){ ob_start(); print'<html xmlns:o="urn:schemas-microsoft-com:office:office"
			xmlns:w="urn:schemas-microsoft-com:office:word"
			xmlns="http://www.w3.org/TR/REC-html40">'; } function save($path){ print "</html>"; $data = ob_get_contents(); ob_end_clean(); $this->wirtefile ($path,$data); } function wirtefile ($fn,$data){ $fp=fopen($fn,"wb"); fwrite($fp,$data); fclose($fp); } } $word = new word; $word->start(); ?>
<style>
    .title{text-align:center;font-weight:bold;font-size:28px;padding:15px 0px;}
    .title2{line-height:30px;}
    .content{line-height:30px;text-indent:2em;}
    .title3{line-height:30px;font-weight:bold;}
    .careTitle{line-height:30px;color:#0033cc;text-indent:2em;}
    .careInf{line-height:30px;color:#0033cc;text-indent:5em;}
    img{text-align: center;}
</style>
<div class="title">30-36月龄中医药健康指导</div>
<p class="title2">（一）饮食指导</p>
<p class="content">a、养成良好饮食习惯，按时进食，避免偏食，节制零食，控制肉食及辛辣、油腻等易上火食物的摄入，多食新鲜蔬菜、水果。</p>
<p class="content">b、提倡“三分饥”。</p>
<p class="content">c、 严格控制冷饮，寒凉食物的摄入。（形寒饮冷则伤肺，饮料、冷饮伤胃伤肺、夏季急性胃肠炎。）</p>
<p class="title2">（二）起居调摄：</p>
<p class="content">a、保证充足的睡眠时间，养成良好的作息习惯。</p>
<p class="content">b.、培养每日定时大便的习惯。</p>
<p class="content">c、衣着要宽松、舒适，少穿少捂。（“童子不衣裘帛”， “三分寒”）</p>
<p class="content">d、正确理解“春捂”与“秋冻” 。（抗寒、耐热要适度）</p>
<p class="careTitle">*注意：</p>
<p class="careInf">吃得太饱与穿得太暖所致。</p>
<p class="careInf">“四时欲得小儿安，常要三分饥与寒；但愿人皆依此法，自然诸疾不相干。”</p>
<p class="careInf">经常到户外活动，多见风日，增强体质。</p>
<p class="title2">（三）常用按揉部位及方法：</p>
<p class="title3">四神聪穴</p>
<p class="content">（1）位置：在头顶部，百会前后左右各旁开1寸处，共4穴（见图5）。</p>
<p class="content">（2）操作：用手指逐一按揉，先按左右神聪穴，再按前后神聪穴，每次1～3分钟。</p>
<p class="content">（3）功效：具有醒神益智的作用。</p>
<img src="http://localhost/zySystem/Public/img/zyty44.png" alt="图片加载失败！">
<p class="content">（4）现代研究：针刺四神聪治疗失眠症疗效显著；电针智三针穴、四神聪穴对血管性痴呆的日常生活能力、神经功能缺损所形成的功能障碍,以及主要症状有改善作用；采用针刺四神聪的方法可明显改善AD大鼠的学习记忆能力,并能提高其脑内SOD的活性；针刺四神聪延长睡眠时间和改善大鼠睡眠结构的机理可能与改变大鼠脑内的单胺类递质含量有关。</p>
<p class="careTitle"> *注意：</p>
<p class="careInf">囟门未闭合不能操作</p>
<p class="careInf">可2指同时操作</p>
<p class="careInf">（成人：缓解疲劳、降压、止头痛，可敲打。）</p>
<?php
 $word->save("Public/tiaoyang3.doc"); ?>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        alert('另存为成功！');
        history.back();
    })
</script>