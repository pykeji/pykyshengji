<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>18-24月龄另存</title>
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
<div class="title">18-24月龄中医药健康指导</div>
<p class="title2">（一）饮食指导</p>
<p class="content">a、适时断奶，渐过度至成人饮食。</p>
<p class="content">b、养成良好饮食习惯， 避免偏食、挑食。</p>
<p class="content">c、小儿脾胃虚弱，消化功能差，加餐时量不宜过多，（尤其是夜间入睡前）次数不宜过频。</p>
<p class="content">d、寒凉食物要适度。</p>
<p class="title2">（二）起居调摄：</p>
<p class="content">a、保证充足的睡眠时间，养成良好的作息习惯。（午睡时间短）</p>
<p class="content">b、培养每日定时大便的习惯。</p>
<p class="content">c、衣着要宽松，以棉质透气为主，款式简单，不要复杂、装饰过多。（“三分寒”）</p>
<p class="title2">（三）常用按揉部位及方法：</p>
<p class="title3">1、足三里穴</p>
<p class="content">（1）位置：在小腿前外侧，当犊鼻下3寸，距胫骨前缘一横指处（见图3）。</p>
<p class="content">（2）操作：操作者用拇指端按揉，每次1～3分钟。</p>
<p class="content">（3）功效：具有健脾益胃、强壮体质的作用。</p>
<img src="http://localhost/zySystem/Public/img/zyty22.png" alt="图片加载失败">
<p class="content">（4）现代研究：证明针灸足三里穴能提高小鼠运动能力。其机理可能与纠正运动小鼠神经 -内分泌 -免疫调节紊乱有关；亦有研究证明与纠正运动小鼠自由基代谢失衡有关。</p>
<p class="careTitle"> *注意：</p>
<p class="careInf">力度（至皮腠即可，不用深到肌层，强调“摩”以调气）</p>
<p class="careInf">中指（亦可）</p>
<p class="careInf">方向 顺时针</p>
<p class="title3">2、迎香穴</p>
<p class="content">（1）位置：在鼻翼外缘中点旁，当鼻唇沟中（见图4）</p>
<p class="content">（2）操作：双手拇指分别按于同侧下颌部，中指分别按于同侧迎香穴，其余3指则向手心方向弯曲，然后使中指在迎香穴处做顺时针方向按揉，每次1～3分钟。</p>
<p class="content">（3）功效：具宣通鼻窍的作用。（防感冒）</p>
<img src="http://localhost/zySystem/Public/img/zyty33.png" alt="图片加载失败！">
<p class="content">（4）现代研究：透刺迎香穴为主治疗过敏性鼻炎的临床疗效明显优于内服鼻炎康的对照组；低频电脉冲刺激迎香穴治疗慢性单纯性鼻炎疗效确切；迎香穴位按摩可以有效促进腹部手术患者肠功能恢复；术后早期指压迎香穴可促进胃肠道蠕动,恢复胃肠道排气。</p>
<p class="careTitle"> *注意：</p>
<p class="careInf">力度：适中</p>
<p class="careInf">鼻翼：妨碍呼吸</p>
<p class="careInf">简便方法：一手项后固定，另一手食指、拇指按揉或上下推揉。</p>
<?php
 $word->save("Public/tiaoyang2.doc"); ?>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        alert('另存为成功！');
        history.back();
    })
</script>