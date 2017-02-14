<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>接诊区_中医健康管理系统</title>
    <link rel="stylesheet" href="/zysystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zysystem/Public/css/jiezhen.css">
    <!-- 分页效果 -->
    <link href="/zysystem/Public/css/mypage.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zysystem/Public/muban/assets/js/bootstrap.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
<div class="bg">
    <div class="title center">接诊区</div>
    <div class="yuyue">
        <div>
            <!--<img src="/zysystem/Public/img/014.png" alt="图片加载失败！">-->
        </div>
        <div class="yyfont">
            预约病人列表
        </div>
        <div class="yychecked">
            <select name="yydate">
                <option value="today">当日</option>
                <option value="tomorrow">明日</option>
                <option value="afterTomo">后日</option>
                <option value="all">全部</option>
                <option value="lastWeek">上周内未完成就诊</option>
            </select>
        </div>
        <div class="nowdate">
            <span>当前日期：</span>
            <span id="dqrq"></span>
        </div>
    </div>
    <div class="yyinf center">
        <div class="yytab">
            <table border="0" width="100%">
                <tr>
                    <th width="10%">预约日期</th>
                    <th width="5%">姓名</th>
                    <th width="3%">性别</th>
                    <th width="4%">年龄</th>
                    <!--<th width="8%">出生日期</th>-->
                    <!--<th width="10%">身份证号</th>-->
                    <th width="8%">电话</th>
                    <!--<th width="20%">单位</th>-->
                    <!--<th width="10%">传真</th>-->
                    <!--<th width="12%">E-Mail</th>-->
                    <th width="12%">操作</th>
                </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- <volist name="vo['1']" id="sub"> -->
                <tr class="sty1" name="tableSty">
                    <td>
                        <?php echo ($vo["p_date"]); ?>
                    </td>
                    <td>
                        <?php echo ($vo["br_name"]); ?>
                    </td>
                    <td>
                        <?php echo ($vo["xb"]); ?>
                    </td>
                    <td>
                        <?php echo ($vo["nl"]); ?>
                    </td>
                    <td>
                        <?php echo ($vo["tel"]); ?>
                        <input type="hidden" class="ajaxcanshu" value="<?php echo ($vo["br_id"]); ?>">
                    </td>
                        
                    <td>
                        <span data-toggle="modal" data-target="#myModal" name=""  class="ajaxxinxishuju" >详细信息</span>
                        <a href='<?php echo U("Index/jiankang",array("id"=>$vo[br_id]));?>' ><span>就诊</span></a>
                        <span data-toggle="modal" data-target="#myModal2" class="ajaxxiugaishuju">修改</span>
                        <span>收费</span>
                    </td>
                </tr>
                    <!--<?php endforeach; endif; else: echo "" ;endif; ?> -->
                <volist> 
            </table>
            <!-- <div class="result page"><?php echo ($page); ?></div> -->
        </div>
        <div class="yytj">
        <div class="result page">
            <div class="pages">
            <?php echo ($page); ?>
            </div>
        </div>
            <!-- <span>共<span id="sickNum">0</span>位病人登记</span>
            <span>当前第1/N页</span>
            <span>上一页</span>
            <span>下一页</span> -->
        </div>
    </div>
</div>
<!--患者详细信息模态框-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">患者详细信息</h4>
            </div>
            <div class="modal-body">
                <table border="0" class="mbt">
                    <tr>
                        <td>病历号：</td>
                        <td><input type="text" id="ajaxmtbrid" readonly="readonly"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input id="ajaxmtbrname" type="text" readonly="readonly"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="xb" id="ajaxmtxbnan"  disabled="disabled"><span>男</span></label>
                            <label><input type="radio" name="xb" id="ajaxmtxbnv" disabled="disabled"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input id="ajaxmtnl" type="text" readonly="readonly"></td>
                        <td>出生年月：</td>
                        <td><input id="ajaxmtcsdate" type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td colspan="3"><input id="ajaxmtpass" type="text" class="lontext" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><input id="ajaxmtdw" type="text" class="lontext" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>电话：</td>
                        <td><input id="ajaxmttel" type="text" readonly="readonly"></td>
                        <td>E-Mail：</td>
                        <td><input id="ajaxmtemail" type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input id="ajaxmtghf" type="text" readonly="readonly"></td>
                        <td>传真：</td>
                        <td><input id="ajaxmtfax" type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>预约日期：</td>
                        <td><input id="ajaxmtpdate" type="text" readonly="readonly"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <!--<button type="button" class="btn btn-primary">提交更改</button>-->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--患者信息修改模态框-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel2">患者信息修改</h4>
            </div>
            <form action="<?php echo U('Index/dojiezhenajaxxiugai');?>" method="post">
            <div class="modal-body">
                <table border="0" class="mbt">
                    <tr>
                        <td>病历号：</td>
                        <td><input type="text" name="br_id" id="ajaxmtXiugaibrid"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" name="br_name" id="ajaxmtXiugaibrname"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="xb" value="男" id="ajaxmtxiugaixbnan"><span>男</span></label>
                            <label><input type="radio" name="xb" value="女" id="ajaxmtxiugaixbnv"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>年龄：</td>
                        <td><input type="text" name="nl" id="ajaxmtXiugainl"></td>
                        <td>出生年月：</td>
                        <td><input type="text" name="cs_date" id="ajaxmtXiugaicsdate"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td colspan="3"><input type="text" name="pass" id="ajaxmtXiugaipass" class="lontext"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><input type="text" name="dw" id="ajaxmtXiugaidw" class="lontext"></td>
                    </tr>
                    <tr>
                        <td>电话：</td>
                        <td><input type="text" name="tel" id="ajaxmtXiugaitel"></td>
                        <td>E-Mail：</td>
                        <td><input type="text" name="e_mail" id="ajaxmtXiugaiemail"></td>
                    </tr>
                    <tr>
                        <td>挂号费：</td>
                        <td><input type="text" name="ghf" id="ajaxmtXiugaighf"></td>
                        <td>传真：</td>
                        <td><input type="text" name="fax" id="ajaxmtXiugaifax"></td>
                    </tr>
                    <tr>
                        <td>预约日期：</td>
                        <td><input type="text" name="p_date" id="ajaxmtXiugaipdate"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">提交更改</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
</body>
</html>
<script type="text/javascript">
    //详细信息
    $(".ajaxxinxishuju").click(function(){
        $id = $(this).parent().parent().find(".ajaxcanshu").val();
        // alert($id);
        $.ajax({
            type:'get',
            url:'<?php echo U("Index/jiezhenxiangqajax");?>',
            data:{"id":$id},
            dataType:'json',
            success:function(dd)
            {
                // console.log(dd);
                // 获取对应的病人基本信息
                $br_id = dd[0]['br_id'];
                $br_name = dd[0]['br_name'];
                $nl = dd[0]['nl'];
                $cs_date = dd[0]['cs_date'];
                $pass = dd[0]['pass'];
                $dw = dd[0]['dw'];
                $tel = dd[0]['tel'];
                $xb = dd[0]['xb'];
                $email = dd[0]['e_mail'];
                $ghf = dd[0]['ghf'];
                $fax = dd[0]['fax'];
                $p_date = dd[0]['p_date'];
                // 通过js将信息添加到页面
                $("#ajaxmtbrid").val($br_id);
                $("#ajaxmtbrname").val($br_name);
                $("#ajaxmtnl").val($nl);
                $("#ajaxmtcsdate").val($cs_date);
                $("#ajaxmtpass").val($pass);
                $("#ajaxmtdw").val($dw);
                $("#ajaxmttel").val($tel);
                // 判断性别
                if($xb=="男"){
                    // alert("n");
                    $("#ajaxmtxbnan").attr("checked","checked");
                }else if($xb=="女"){
                    // alert("v");
                    $("#ajaxmtxbnv").attr("checked","checked");
                }
                // alert($xb);
                $("#ajaxmtemail").val($email);
                $("#ajaxmtghf").val($ghf);
                $("#ajaxmtfax").val($fax);
                $("#ajaxmtpdate").val($p_date);
            },
            error:function()
            {
                alert(Ajax请求失败);
            }
        });
    });
    //修改信息
    $(".ajaxxiugaishuju").click(function(){
        $id = $(this).parent().parent().find(".ajaxcanshu").val();
        // alert($id);
        $.ajax({
            type:'get',
            url:'<?php echo U("Index/jiezhenxiugaiajax");?>',
            data:{"id":$id},
            dataType:'json',
            success:function(dd)
            {
                // console.log(dd);
                // 获取对应的病人基本信息
                $br_id = dd[0]['br_id'];
                $br_name = dd[0]['br_name'];
                $nl = dd[0]['nl'];
                $cs_date = dd[0]['cs_date'];
                $pass = dd[0]['pass'];
                $dw = dd[0]['dw'];
                $tel = dd[0]['tel'];
                $xb = dd[0]['xb'];
                $email = dd[0]['e_mail'];
                $ghf = dd[0]['ghf'];
                $fax = dd[0]['fax'];
                $p_date = dd[0]['p_date'];
                // 通过js将信息添加到页面
                $("#ajaxmtXiugaibrid").val($br_id);
                $("#ajaxmtXiugaibrname").val($br_name);
                $("#ajaxmtXiugainl").val($nl);
                $("#ajaxmtXiugaicsdate").val($cs_date);
                $("#ajaxmtXiugaipass").val($pass);
                $("#ajaxmtXiugaidw").val($dw);
                $("#ajaxmtXiugaitel").val($tel);
                // 判断性别
                if($xb=="男"){
                    // alert("n");
                    $("#ajaxmtxiugaixbnan").attr("checked","checked");
                }else if($xb=="女"){
                    // alert("v");
                    $("#ajaxmtxiugaixbnv").attr("checked","checked");
                }
                $("#ajaxmtXiugaiemail").val($email);
                $("#ajaxmtXiugaighf").val($ghf);
                $("#ajaxmtXiugaifax").val($fax);
                $("#ajaxmtXiugaipdate").val($p_date);
            },
            error:function()
            {
                alert(Ajax请求失败);
            }
        });
    });
</script>
<script src="/zysystem/Public/js/shijian.js"></script>
<script src="/zysystem/Public/js/tr.js"></script>