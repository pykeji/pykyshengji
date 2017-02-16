<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>体质辨识</title>
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zySystem/Public/css/tizhi.css">
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
</head>
<script language=javascript>
//    打印功能JS
    function preview(oper)
    {
        if (oper < 10){
            bdhtml=window.document.body.innerHTML;//获取当前页的html代码
            sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域
            eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域
            prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取htm
            prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html
            window.document.body.innerHTML=prnhtml;
            window.print();
            window.document.body.innerHTML=bdhtml;
        }
        else {
            window.print();
        }
    }
</script>
<body  oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div id="judge" style="display:none;"><?php echo ($res1["tzname"]); ?></div>
<form action="<?php echo U('Index/tizhiSub');?>" method="post" id="form1">
    <div class="bg">
    <div class="xxk">
        <ul id="myTab" class="nav nav-tabs">
            <li class="active">
                <a href="#home" data-toggle="tab" id="luru">
                    录入基本项目
                </a>
            </li>
            <li><a href="#res" data-toggle="tab" id="checkRes">查看结果</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <!--题目-->
                <div class="tab-content" id="myTi">
                    <!--第一题-->
                    <?php if(is_array($ti)): $i = 0; $__LIST__ = $ti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tm): $mod = ($i % 2 );++$i; if($tm["id"] == 1): ?><div class="ti tab-pane fade in active" id='ti<?php echo ($tm["id"]); ?>'>
                        <?php else: ?>
                        <div class="ti tab-pane fade" id='ti<?php echo ($tm[id]); ?>'><?php endif; ?>
                        <div class="ti-title">
                            <?php echo ($tm["ques"]); ?>
                        </div>
                        <div class="ti-content">
                            <!--判断是否选中-->
                            <!--<div><?php echo ($userCheckedInf["xx$tm[id]"]); ?></div>-->
                            <?php
 $aa=xx.$tm[id]; if($userCheckedInf[$aa]==1){ echo "<label><input type='radio' name='xx".$tm[id]."' value='1' checked><span>".$tm[check1]."</span></label>"; }else{ echo "<label><input type='radio' name='xx".$tm[id]."' value='1'><span>".$tm[check1]."</span></label>"; }if($userCheckedInf[$aa]==2){ echo "<label><input type='radio' name='xx".$tm[id]."' value='2' checked><span>".$tm[check2]."</span></label>"; }else{ echo "<label><input type='radio' name='xx".$tm[id]."' value='2'><span>".$tm[check2]."</span></label>"; }if($userCheckedInf[$aa]==3){ echo "<label><input type='radio' name='xx".$tm[id]."' value='3' checked><span>".$tm[check3]."</span></label>"; }else{ echo "<label><input type='radio' name='xx".$tm[id]."' value='3'><span>".$tm[check3]."</span></label>"; }if($userCheckedInf[$aa]==4){ echo "<label><input type='radio' name='xx".$tm[id]."' value='4' checked><span>".$tm[check4]."</span></label>"; }else{ echo "<label><input type='radio' name='xx".$tm[id]."' value='4'><span>".$tm[check4]."</span></label>"; }if($userCheckedInf[$aa]==5){ echo "<label><input type='radio' name='xx".$tm[id]."' value='5' checked><span>".$tm[check5]."</span></label>"; }else{ echo "<label><input type='radio' name='xx".$tm[id]."' value='5'><span>".$tm[check5]."</span></label>"; } ?>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <?php echo ($tm["prompt"]); ?>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!--上下题-->
                <div class="updown">
                    <button type="button" class="but" id="syt">上一题</button>
                    <button type="button" id="xyt">下一题</button>
                </div>
                <!--题号-->
                <div class="tiNum">
                    <table class="nav nav-tabs" id="myTiContent">
                        <tr>
                            <?php if(is_array($ti1)): $i = 0; $__LIST__ = $ti1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tm1): $mod = ($i % 2 );++$i; if($tm1["id"] == 1): ?><td class="sty1" id="xx<?php echo ($tm1["id"]); ?>"><a href="#ti<?php echo ($tm1["id"]); ?>" data-toggle="tab"><?php echo ($tm1["id"]); ?></a></td>
                                    <?php else: ?>
                                    <td class="sty2" id="xx<?php echo ($tm1[id]); ?>"><a href="#ti<?php echo ($tm1["id"]); ?>" data-toggle="tab"><?php echo ($tm1["id"]); ?></a></td><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                        <tr>
                            <?php if(is_array($ti2)): $i = 0; $__LIST__ = $ti2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tm2): $mod = ($i % 2 );++$i;?><td class="sty2" id="xx<?php echo ($tm2["id"]); ?>"><a href="#ti<?php echo ($tm2["id"]); ?>" data-toggle="tab"><?php echo ($tm2["id"]); ?></a></td><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                        <tr>
                            <?php if(is_array($ti3)): $i = 0; $__LIST__ = $ti3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tm3): $mod = ($i % 2 );++$i;?><td class="sty2" id="xx<?php echo ($tm3["id"]); ?>"><a href="#ti<?php echo ($tm3["id"]); ?>" data-toggle="tab"><?php echo ($tm3["id"]); ?></a></td><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="res">
                <!--报告-->
                <div class="report">
                    <div class="reportinf center">
                        <!--报告表单-->
                        <!--startprint1-->
                        <form action="<?php echo U('Index/tizhi');?>" method="post">

                            <div class="rep-title" style="text-align: center;text-align:center;padding-top:40px;font-size:28px;font-weight: bold;padding-bottom:25px;">中医体制辨识鉴定报告</div>
                            <div>
                                <table border="1" width="90%" class="center">
                                    <tr>
                                        <td width="6%">姓名</td>
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
                                        <td colspan="2" id="pinghez"><?php echo ($res1["tzname8"]); ?>-<?php echo ($res1["tzjg8"]); ?></td>
                                        <td colspan="2" id="qixuz"><?php echo ($res1["tzname"]); ?>-<?php echo ($res1["tzjg"]); ?></td>
                                        <td colspan="2" id="yangxuz"><?php echo ($res1["tzname1"]); ?>-<?php echo ($res1["tzjg1"]); ?></td>
                                        <td colspan="2" id="yinxuz"><?php echo ($res1["tzname2"]); ?>-<?php echo ($res1["tzjg2"]); ?></td>
                                        <td colspan="2" id="tanshiz"><?php echo ($res1["tzname3"]); ?>-<?php echo ($res1["tzjg3"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" id="shirez"><?php echo ($res1["tzname4"]); ?>-<?php echo ($res1["tzjg4"]); ?></td>
                                        <td colspan="2" id="xueyuz"><?php echo ($res1["tzname5"]); ?>-<?php echo ($res1["tzjg5"]); ?></td>
                                        <td colspan="2" id="qiyuz"><?php echo ($res1["tzname6"]); ?>-<?php echo ($res1["tzjg6"]); ?></td>
                                        <td colspan="2" id="tebingz"><?php echo ($res1["tzname7"]); ?>-<?php echo ($res1["tzjg7"]); ?></td>
                                        <td colspan="2"></td>
                                    </tr>
                                </table>
                            </div>
                            <?php if(is_array($baoj)): $i = 0; $__LIST__ = $baoj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $bj = M('tz_baojian'); $name = substr($vo,0,9); $res2 = $bj -> where("tzname = '$name'") -> select(); ?>
                            <div class="rep-title1" style="font-size:16px;font-weight: bold;width:90%;margin:10px auto;"><?php echo ($vo); ?></div>
                            <div class="rep-title1" style="font-size:16px;font-weight: bold;width:90%;margin:10px auto;"><?php echo ($res2[0][title]); ?></div>
                            <div class="rep-inf" style="width:90%;margin:0px auto;text-indent:2em;">
                                <p><?php echo ($res2[0][content]); ?></p>
                            </div>
                            <div class="rep-title1" style="font-size:16px;font-weight: bold;width:90%;margin:10px auto;"><?php echo ($res2[0][title1]); ?></div>
                            <div class="rep-inf" style="width:90%;margin:0px auto;text-indent:2em;">
                                <p><?php echo ($res2[0][content1]); ?></p>
                            </div>
                            <div class="rep-title1" style="font-size:16px;font-weight: bold;width:90%;margin:10px auto;"><?php echo ($res2[0][title2]); ?></div>
                            <div class="rep-inf" style="width:90%;margin:0px auto;text-indent:2em;">
                                <p><?php echo ($res2[0][content2]); ?></p>
                            </div>
                            <div class="rep-title1" style="font-size:16px;font-weight: bold;width:90%;margin:10px auto;"><?php echo ($res2[0][title3]); ?></div>
                            <div class="rep-inf" style="width:90%;margin:0px auto;text-indent:2em;">
                                <p><?php echo ($res2[0][content3]); ?></p>
                            </div>
                            <div class="rep-title1" style="font-size:16px;font-weight: bold;width:90%;margin:10px auto;"><?php echo ($res2[0][title4]); ?></div>
                            <div class="rep-inf" style="width:90%;margin:0px auto;text-indent:2em;">
                                <p><?php echo ($res2[0][content4]); ?></p>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </form><!--endprint1-->
                        <!--分类-->
                        <div class="tztitle">测试结果表</div>
                        <div class="tzstyle">
                            <table width="98%" border="1" bordercolor="#cccccc" class="center">
                                <tr>
                                    <td>体制分类</td>
                                    <td>总分</td>
                                    <td>测试结果</td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname8"]); ?></td>
                                    <td><?php echo ($res1["tzfs8"]); ?></td>
                                    <td><?php echo ($res1["tzjg8"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname"]); ?></td>
                                    <td><?php echo ($res1["tzfs"]); ?></td>
                                    <td><?php echo ($res1["tzjg"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname1"]); ?></td>
                                    <td><?php echo ($res1["tzfs1"]); ?></td>
                                    <td><?php echo ($res1["tzjg1"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname2"]); ?></td>
                                    <td><?php echo ($res1["tzfs2"]); ?></td>
                                    <td><?php echo ($res1["tzjg2"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname3"]); ?></td>
                                    <td><?php echo ($res1["tzfs3"]); ?></td>
                                    <td><?php echo ($res1["tzjg3"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname4"]); ?></td>
                                    <td><?php echo ($res1["tzfs4"]); ?></td>
                                    <td><?php echo ($res1["tzjg4"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname5"]); ?></td>
                                    <td><?php echo ($res1["tzfs5"]); ?></td>
                                    <td><?php echo ($res1["tzjg5"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname6"]); ?></td>
                                    <td><?php echo ($res1["tzfs6"]); ?></td>
                                    <td><?php echo ($res1["tzjg6"]); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo ($res1["tzname7"]); ?></td>
                                    <td><?php echo ($res1["tzfs7"]); ?></td>
                                    <td><?php echo ($res1["tzjg7"]); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="anniu">
                <button type="button" class="btn btn-warning" id="sub">提交</button>
                <button type="button" class="btn btn-warning" id="save">保存</button>
                <button type="button" class="btn btn-warning" id="saveas">另存为</button>
                <button type="button" class="btn btn-warning" onclick="preview(1);">打印</button>
            </div>
        </div>
    </div>
</div>
</form>

</body>
</html>
<script type="text/javascript" src="/zySystem/Public/js/tizhi.js"></script>
<script>
    $(".ti-content label input").click(function(){
        $.ajax({
            url:"<?php echo U('Index/tizhiCheckedAjax');?>",
            type:"post",
            dataType:"json",
            data:"{aa,$('#judge').html()}",
            success:function(data){
                /**
                 * session中存在患者数据可以进行答题，否则进行登记
                 */
                if(data==22){
                    var r=confirm("请您先登记，再进行答题！");
                    if(r){
                        location.href="<?php echo U('Index/dengji');?>";
                    }else{
                        location.href="<?php echo U('Index/tizhi');?>";
                    }
                }
            }
        })
    })
    $("#sub").click(function(){
        var stylen=document.getElementsByClassName('sty2').length;
        if(stylen==0){
            $("#form1").submit();
        }else{
            alert("请您答完题再提交哦！");
        }
    })
//    数据保存
    $("#save").click(function(){
        location.href="<?php echo U('Index/tizhiSave');?>";
    })
//    文件另存为
    $("#saveas").click(function(){
        location.href="<?php echo U('Index/saveAsTizhi');?>";
    })

</script>