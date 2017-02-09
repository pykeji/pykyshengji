<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>患者查询</title>
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zySystem/Public/css/chaxun.css">
    <!-- 分页效果 -->
    <link href="/zySystem/Public/css/mypage.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
    <script src="/zySystem/Public/js/jeDate/jedate.js"></script>
</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
    <div class="bg">
    <div class="title center" id="title">
        查询窗口
    </div>
    <form action="<?php echo U('Index/dochaxun');?>"  method="post">
    <div class="chaxun center">
        <div>
            <img src="/zySystem/Public/img/chaxun.png" alt="图片加载失败！">
        </div>
        <div class="cxfont">
            查询条件:
        </div>
        <div class="nb">
            <label for="userName">姓名：</label>
            <span><input type="text" name="br_name" id="userName"></span>
        </div>
        <div class="nb">
            <span>挂号日期：</span>
            <span><input type="text" name="p_datekai" class="ghrq" id="datebut1" onClick="jeDate({dateCell:'#datebut1',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"></span>
            <span>至</span>
            <span><input type="text" name="p_datezhong" class="ghrq" id="datebut2" onClick="jeDate({dateCell:'#datebut2',isTime:true,format:'YYYY-MM-DD'})" onfocus="new Calendar().show(this)" readonly="readonly"></span>
        </div>
        <div class="nb">
            <span><label for="blh">病历号：</label></span>
            <span><input type="text" name="br_id" id="blh"></span>
        </div>
        <div class="nb">
            <label><!-- <span><input type="checkbox"></span> --><span>性别：</span></label>
            <label><span><input type="radio" name="xb" value="男" checked="checked"><span>男</span></span></label>
            <label><span><input type="radio" name="xb" value="女"><span>女</span></span></label>
        </div>
        <div class="but">
            <button text="submit" class="btn btn-warning"><i class="glyphicon glyphicon-search"></i>查询</button>
        </div>
    </div>
    </form>
    <div class="cxtable center">
        <table border="0" width="100%" class="table1">
            <tr>
                <td width="5%">病历号</td>
                <td width="5%">姓名</td>
                <td width="3%">性别</td>
                <td width="8%">挂号日期</td>
                <!--<td width="10%">身份证</td>-->
                <!--<td width="8%">出生日期</td>-->
                <!--<td width="20%">单位</td>-->
                <td width="8%">电话</td>
                <!--<td width="8%">传真</td>-->
                <!--<td width="10%">E-Mail</td>-->
                <td width="8%">预约日期</td>
                <td width="7%">操作</td>
            </tr>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="cxtr1" name="cxtableSty">
                <td><?php echo ($vo["br_id"]); ?></td>
                <td><?php echo ($vo["br_name"]); ?></td>
                <td><?php echo ($vo["xb"]); ?></td>
                <td><?php echo ($vo["p_date"]); ?></td>
                <td><?php echo ($vo["tel"]); ?></td>
                <td><?php echo ($vo["p_date"]); ?></td>
                <td>
                    <span data-toggle="modal" data-target="#myModal">详细信息</span>
                    <span>登记</span>
                    <span>预约</span>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
    <div class="fenye center">
        <div class="result page">
            <div class="pages">
            <?php echo ($page); ?>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
    jeDate.skin('gray');
</script>
    <!--查询患者详细信息模态框-->
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
                        <td><input type="text" readonly="readonly"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>性别：</td>
                        <td>
                            <label><input type="radio" name="sex" checked="checked" disabled="disabled"><span>男</span></label>
                            <label><input type="radio" name="sex" disabled="disabled"><span>女</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>电话：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>出生年月：</td>
                        <td><input type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>身份证号：</td>
                        <td colspan="3"><input type="text" class="lontext" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>单位：</td>
                        <td colspan="3"><input type="text" class="lontext" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>E-Mail：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>传真：</td>
                        <td><input type="text" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>挂号日期：</td>
                        <td><input type="text" readonly="readonly"></td>
                        <td>预约日期：</td>
                        <td><input type="text" readonly="readonly"></td>
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
</body>
</html>
<script src="/zySystem/Public/js/shijian.js"></script>
<script src="/zySystem/Public/js/tr.js"></script>