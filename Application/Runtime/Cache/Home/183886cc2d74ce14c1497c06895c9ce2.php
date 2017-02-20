<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>6-12月龄另存</title>
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
<div class="title">6-12月龄中医药健康指导</div>
<p class="content">该期是小儿生长发育极其旺盛阶段，对营养要求高，而消化系统不能适应对大量食物的消化吸收，易发生营养和消化紊乱；同时来自母体的抗体减少，易生病。</p>
<p class="title2">（一）饮食指导</p>
<p class="content">a、养成良好的哺乳习惯，尽量延长夜间喂奶的时间间隔。（不能死守书本，睡时不喂）</p>
<p class="content">b、防止乳食无度。</p>
<p class="content">c、婴幼儿脾胃功能较薄弱，添加辅食宜细、软、烂、碎，从小量、单品种开始，渐加至多样。（指牙未出齐前）</p>
<p class="title2">（二）起居调摄：</p>
<p class="content">a、保证充足的睡眠时间，逐步养成夜间睡眠、白天活动的作息习惯。</p>
<p class="content">b、养成良好的小便习惯，适时把尿；培养每日定时大便的习惯。（尿不湿，遗尿）</p>
<p class="content">c、衣着要宽松，以棉质透气为主，不可紧束而妨碍气血流通，影响骨骼生长发育。</p>
<p class="content">d、春季注意保暖，正确理解“春捂”；夏季纳凉要适度，避免直吹电风扇，空调温度不宜过低；秋季避免保暖过度，提倡 “三分寒”，正确理解“秋冻”；冬季室内不宜过度密闭保暖，应适当通风，保持空气新鲜。</p>
<p class="content">e、经常到户外晒太阳，促进钙吸收。</p>
<p class="title2">（三）常用按揉部位及方法：</p>
<p class="title3">1、摩腹</p>
<p class="content">（1）位置：腹部（肚脐）。</p>
<p class="content">（2）操作：操作者用手掌掌面或示指、中指、环指的指面附着于小儿腹部，以腕关节连同前臂反复做环形有节律的移动，每次1～3分钟。</p>
<p class="content">（3）功效：具有改善脾胃功能，促进消化吸收的作用。</p>
<p class="careTitle"> *注意：</p>
<p class="careInf">力度：适中，至表皮</p>
<p class="careInf">频率：一般120次/分</p>
<p class="careInf">方向：顺时针</p>
<p class="careInf">疾病：及时就医</p>
<p class="title3">2、捏脊</p>
<p class="content">（1）位置：背脊正中，督脉两侧的大椎至尾骨末端处。</p>
<p class="content">（2）操作：操作者用双手的中指、环指和小指握成空拳状，示指半屈，拇指伸直并对准示指的前半段（见图1）。施术从长强穴开始，操作用双手示指与拇指合作，在示指向前轻推患儿皮肤的基础上与拇指一起将长强穴的皮肤捏拿起来，然后沿督脉两侧，自下而上，左右两手交替合作，按照推、捏、捻、放、提的前后顺序，自长强穴向前捏拿至脊背上端的大椎穴捏一遍。如此循环，根据病情及体质可捏拿4～6遍。从第2遍开始的任何一遍中，操作者可根据不同脏腑出现的症状，采用“重提”的手法，有针对性的刺激背部的脏腑俞穴，以便加强疗效。在第5遍捏拿儿童脊背时，在儿童督脉两旁的脏腑俞穴处，用双手的拇指与示指合作分别将脏腑俞穴的皮肤，用较重的力量在捏拿的基础上，提拉一下。捏拿第6遍结束后，用双手拇指指腹在儿童腰部的肾俞穴处，在原处揉动的动作中，用拇指适当地向下施以一定的压力，揉按结合（见图2）。</p>
<p class="content">（3）功效：具有消食积、健脾胃、通经络的作用。</p>
<img src="http://localhost/zySystem/Public/img/zyty11.png" alt="图片加载失败！">
<p class="careTitle"> *注意：</p>
<p class="careInf">体位（呈一定弧度；肥胖儿视情况）</p>
<p class="careInf">力度（适中）</p>
<p class="careInf">感觉（第2、3天有一定的酸痛感）</p>
<p class="careInf">长期坚持</p>
<?php
 $word->save("Public/tiaoyang1.doc"); ?>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        alert('另存为成功！');
        history.back();
    })
</script>