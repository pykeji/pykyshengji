<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <LINK rel="Bookmark" href="/favicon.ico" >
    <LINK rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/zySystem/Public/admin/lib/html5.js"></script>
    <script type="text/javascript" src="/zySystem/Public/admin/lib/respond.min.js"></script>
    <script type="text/javascript" src="/zySystem/Public/admin/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/zySystem/Public/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/zySystem/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/zySystem/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/zySystem/Public/admin/lib/icheck/icheck.css" />
    <link rel="stylesheet" type="text/css" href="/zySystem/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/zySystem/Public/admin/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/zySystem/Public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title> 添加等级</title>
</head>
<body>
<article class="page-container">
    <form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>等级名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="orgNum" name="orgNum">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>描述：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="beizhu" cols="" rows="" class="textarea"  placeholder="说点什么..." onKeyUp="textarealength(this,100)"></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>权限选择：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <dl class="permission-list">
                    <dt>
                        <label>
                            <input type="checkbox" value="" name="user-Character-0" id="user-Character-0">
                            系统使用者管理</label>
                    </dt>
                    <dd>
                        <!--医疗机构管理管理-->
                        <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0" id="user-Character-0-0">
                            医疗机构管理</label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">
                            审核</label>
                    </dd>
                </dl>
                <!--用户管理-->
                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1" id="user-Character-0-1">
                            用户管理</label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-0-1-0" id="user-Character-0-1-4">
                            审核</label>
                    </dd>
                </dl>
                </dd>
                </dl>
                <dl class="permission-list">
                    <dt>
                        <label>
                            <input type="checkbox" value="" name="user-Character-0" id="user-Character-1">
                            系统数据管理</label>
                    </dt>
                    <dd>
                        <!--病历管理-->
                        <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0" id="user-Character-1-0">
                            病历管理</label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-0-0" id="user-Character-1-0-4">
                            审核</label>
                    </dd>
                </dl>
                <!--数据字典管理-->
                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-1" id="user-Character-1-1">
                            数据字典管理</label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-1-0" id="user-Character-1-1-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-1-0" id="user-Character-1-1-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-1-0" id="user-Character-1-1-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-1-0" id="user-Character-1-1-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-1-0" id="user-Character-1-1-4">
                            审核</label>
                    </dd>
                </dl>
                <!--药品对照管理-->
                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-2" id="user-Character-1-2">
                            药品对照管理</label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-2-0" id="user-Character-1-2-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-2-0" id="user-Character-1-2-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-2-0" id="user-Character-1-2-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-2-0" id="user-Character-1-2-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-2-0" id="user-Character-1-2-4">
                            审核</label>
                    </dd>
                </dl>
                <!--配伍禁忌管理-->
                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-3" id="user-Character-1-3">
                            配伍禁忌管理</label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-3-0" id="user-Character-1-3-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-3-0" id="user-Character-1-3-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-3-0" id="user-Character-1-3-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-3-0" id="user-Character-1-3-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-3-0" id="user-Character-1-3-4">
                            审核</label>
                    </dd>
                </dl>
                <!--疾病信息管理-->
                <dl class="cl permission-list2">
                    <dt>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-4" id="user-Character-1-4">
                            药品对照管理</label>
                    </dt>
                    <dd>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-4-0" id="user-Character-1-4-0">
                            添加</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-4-0" id="user-Character-1-4-1">
                            修改</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-4-0" id="user-Character-1-4-2">
                            删除</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-4-0" id="user-Character-1-4-3">
                            查看</label>
                        <label class="">
                            <input type="checkbox" value="" name="user-Character-1-4-0" id="user-Character-1-4-4">
                            审核</label>
                    </dd>
                </dl>
                </dd>
                </dl>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
            </div>
        </div>
    </form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/zySystem/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/zySystem/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/zySystem/Public/admin/lib/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="/zySystem/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/zySystem/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    $(function(){
        $(".permission-list dt input:checkbox").click(function(){
            $(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
        });
        $(".permission-list2 dd input:checkbox").click(function(){
            var l =$(this).parent().parent().find("input:checked").length;
            var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
            if($(this).prop("checked")){
                $(this).closest("dl").find("dt input:checkbox").prop("checked",true);
                $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
            }
            else{
                if(l==0){
                    $(this).closest("dl").find("dt input:checkbox").prop("checked",false);
                }
                if(l2==0){
                    $(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
                }
            }
        });

        $("#form-admin-role-add").validate({
            rules:{
                roleName:{
                    required:true,
                },
            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
                $(form).ajaxSubmit();
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.close(index);
            }
        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>