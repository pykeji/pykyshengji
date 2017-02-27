<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>

    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/style.css">
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/loader-style.css">
    <link rel="stylesheet" href="/zySystem/Public/muban/assets/css/bootstrap.css">


    <link href="/zySystem/Public/muban/assets/js/footable/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css">
    <link href="/zySystem/Public/muban/assets/js/footable/css/footable.standalone.css" rel="stylesheet" type="text/css">
    <link href="/zySystem/Public/muban/assets/js/footable/css/footable-demos.css" rel="stylesheet" type="text/css">

    <link rel="/zySystem/Public/muban/stylesheet" href="assets/js/dataTable/lib/jquery.dataTables/css/DT_bootstrap.css">
    <link rel="/zySystem/Public/muban/stylesheet" href="assets/js/dataTable/css/datatables.responsive.css">



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
    
</head>

<body>
<div id="big" style="width:100%; height: 100%;background-color:white;">
     <div class="nest" id="FootableClose">
                            <div class="title-alt" style="margin-top:0px">
<?php $day = date('ymd'); if($_SESSION['wh_power'] == 1){ $power = 1; }else{ $power = 2; } ?>
                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php if($power == 1){ echo '用户管理'; echo "<button class='btn btn-info' style='margin-left:830px;margin-top:-5px;'data-toggle='modal' data-target='#myModal' name=''>新增用户</button>"; }else{ echo '用户列表'; } ?></h6>
                                <div class="titleClose">
                                    <a class="gone" href="#FootableClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#Footable">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>



                            <!-- 模态框 -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">新增用户</h4>
            </div>
            <div class="modal-body">
            <form action="<?php echo U('User/addManage');?>" method="post">
                用户姓名：<input type="text" name="userName"><br/><br/><br/>
                所属部门：<select class="power2" name="powerVal">
                                <option>---请选择---</option>
                            <?php if(is_array($powerlist)): foreach($powerlist as $key=>$do): $powerid = $do['id']; ?>
                                <option value=<?php echo '"'.$powerid.'"'; ?>><?php echo ($do["name"]); ?></option><?php endforeach; endif; ?>                    
                        </select><br/><br/><br/>
                联系方式：<input type="text" name="userPhone"><br/><br/><br/>
                
            </div>



            <div class="modal-footer">
                <button class="btn btn-success">确认添加</button>
                <!--<button type="button" class="btn btn-primary">提交更改</button>-->
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

    <!-- 模态框 修改 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel2">员工信息修改</h4>
            </div>
            <form action="<?php echo U('User/uploadinfo');?>" method="post">
            <div class="modal-body">
                <!-- <隐藏域带id> -->
                <input type="hidden" name='userid' id="userid123">
                用户姓名:<input type="text" name="userName" id="yhxm123"><br/><br/>
                职　　位:<select class="power" name="powerVal">
                                <option>---请选择---</option>
                            <?php if(is_array($powerlist)): foreach($powerlist as $key=>$do): $powerid = $do['id']; ?>
                                <option value=<?php echo '"'.$powerid.'"'; ?>><?php echo ($do["name"]); ?></option><?php endforeach; endif; ?>                    
                        </select><br/><br/>
                联系方式:<input type="text" name="userPhone" id="lxfs123"><br/><br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">提交更改</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

                            <div class="body-nest" id="Footable">
                                <table class="table-striped footable-res footable metro-blue" data-page-size="8">
                                    <thead>
                                        <tr>
                                            <th>
                                                编号
                                            </th>
                                            <th>
                                                用户名
                                            </th>
                                            <th>
                                                头像
                                            </th>
                                            <th>
                                                职位
                                            </th>
                                            <th>
                                                联系方式
                                            </th>
                                            <th>
                                                操作
                                            </th>
                                        </tr>
                                    </thead>
                                    <?php $num = 1; ?>
                                    <tbody>
                                    <?php if($power == 1){ ?>
                                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                            <td><?php echo $num; ?></td>
                                            <td><?php echo ($vo["username"]); ?></td>
                                            <?php $pho = $vo['userphoto'];$path = '/zySystem/Uploads/';$da = $vo['photopath']; ?>
                                            <td><img src="<?php echo $path.$da.'/'.$pho; ?>" alt="加载失败" style="width:40px;height:40px;">
                                            </td>
                                            <td><?php echo ($vo["name"]); ?></td>
                                            <td data-value="78025368997"><?php echo ($vo["userphone"]); ?></td>
                                            <td data-value="1">
                                                <a href="" onclick="Upload(<?php echo $vo['id']; ?>);" data-toggle="modal" data-target="#myModal2" class="upload">修改</a><span style="margin-left: 5px;margin-right: 5px;margin-top:300px;">|</span>
                                                <?php if($vo['del'] < 1){ ?>
                                                <a href="<?php echo U('User/del',array('id'=>$vo['id']));?>" style="color:red" class="dela">删除</a>
                                                <?php }else{ ?>
                                                    <a>不可删除</a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php $num++; endforeach; endif; ?>
                                        <?php }else{ ?>
                                                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                            <td><?php echo $num; ?></td>
                                            <td><?php echo ($vo["username"]); ?></td>
                                           <?php $pho = $vo['userphoto'];$path = '/zySystem/Uploads/';$da = $vo['photopath']; ?>
                                            <td><img src="<?php echo $path.$da.'/'.$pho; ?>" alt="加载失败" style="width:40px;height:40px;">
                                            </td>
                                            <td><?php echo ($vo["name"]); ?></td>
                                            <td data-value="78025368997">18231120172</td>
                                            <td data-value="1">
                                               <span style="color:green">不可操作</span>
                                            </td>
                                        </tr>
                                        <?php $num++; endforeach; endif; ?>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="pagination pagination-centered"></div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>

                        </div>
</div>
    <!-- END OF RIGHT SLIDER CONTENT-->


    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/preloader.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/app.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/load.js"></script>
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/main.js"></script>








    <!-- /MAIN EFFECT -->
    <!-- GAGE -->
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/toggle_close.js"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.sort.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>





    <script type="text/javascript">
    function Upload(id){
         $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/upload');?>",
            data:{id:id},
            dataType:'json',
            success:function(dd)
            {
                $.each(dd,function(idx,item){
                    // alert(item.id+"号："+item.userphone);
                    $('#yhxm123').val(item.username);
                    $('#lxfs123').val(item.userphone);
                    $('#userid123').val(item.id);
                });
               
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
                
    }

    $(function() {
        
        $(document).on('change','.power',function(){
            var val = $('.power:last').val();
            // alert(val);
            $('.opt:last').val(val);
            $(this).nextAll('.power').detach();
            var power = $(this).val();
            $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/power');?>",
            data:{power:power},
            dataType:'json',
            success:function(dd)
            {
                if(dd.length < 1){
                    
                }else{
                    var str = '<select class="power" name="powerVal"><option value="'+val+'" class="opt">---请选择---</option>';
                $.each(dd,function(idx,item){
                //输出
                // alert(item.id+"号："+item.name);
                str += "<option value='"+item.id+"'>"+item.name+"</option>";
                });
                str+='</select>';
                $('.power:last').after(str);
                }
               
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });

        });
         $(document).on('change','.power2',function(){
            var val = $('.power2:last').val();
            // alert(val);
            $('.opt2:last').val(val);
            $(this).nextAll('.power2').detach();
            var power = $(this).val();
            $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/power');?>",
            data:{power:power},
            dataType:'json',
            success:function(dd)
            {
                if(dd.length < 1){
                    
                }else{
                    var str = '<select class="power2" name="powerVal"><option value="'+val+'" class="opt">---请选择---</option>';
                $.each(dd,function(idx,item){
                //输出
                // alert(item.id+"号："+item.name);
                str += "<option value='"+item.id+"'>"+item.name+"</option>";
                });
                str+='</select>';
                $('.power2:last').after(str);
                }
               
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });

        });

        $('.footable-res').footable();
        // $('.dela').click(function(){
        //     confirm('确定删除吗？');
        // });
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('#footable-res2').footable().bind('footable_filtering', function(e) {
            var selected = $('.filter-status').find(':selected').text();
            if (selected && selected.length > 0) {
                e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                e.clear = !e.filter;
            }
        });

        $('.clear-filter').click(function(e) {
            e.preventDefault();
            $('.filter-status').val('');
            $('table.demo').trigger('footable_clear_filter');
        });

        $('.filter-status').change(function(e) {
            e.preventDefault();
            $('table.demo').trigger('footable_filter', {
                filter: $('#filter').val()
            });
        });

        $('.filter-api').click(function(e) {
            e.preventDefault();

            //get the footable filter object
            var footableFilter = $('table').data('footable-filter');

            alert('about to filter table by "tech"');
            //filter by 'tech'
            footableFilter.filter('tech');

            //clear the filter
            if (confirm('clear filter now?')) {
                footableFilter.clearFilter();
            }
        });
    });
    </script>

</body>

</html>