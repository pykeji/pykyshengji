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
<?php if($_SESSION['wh_power'] == 1){ $power = 1; }else{ $power = 2; } ?>
                                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php if($power == 1){ echo '用户管理'; }else{ echo '用户列表'; } ?></h6>
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

                            <div class="body-nest" id="Footable">
                                <table class="table-striped footable-res footable metro-blue" data-page-size="14">
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
                                            <td>1.jpg
                                            </td>
                                            <td><?php echo ($vo["name"]); ?></td>
                                            <td data-value="78025368997">18231120172</td>
                                            <td data-value="1">
                                                <a href="#">修改</a><span style="margin-left: 5px;margin-right: 5px;margin-top:300px;">|</span>
                                                <?php if($vo['del'] < 1){ ?>
                                                <a href="#" style="color:red">删除</a>
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
                                            <td>1.jpg
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
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>








    <!-- /MAIN EFFECT -->
    <!-- GAGE -->
    <script type="text/javascript" src="/zySystem/Public/muban/assets/js/toggle_close.js"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.sort.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
    <script src="/zySystem/Public/muban/assets/js/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>





    <script type="text/javascript">
    $(function() {
        $('.footable-res').footable();
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