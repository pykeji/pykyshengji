<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<head>
	<link rel="stylesheet" href="/zySystem/Public/css/xykf.css">
	<link rel="stylesheet" href="/zySystem/Public/css/bootstrap.css">
	<script type="text/javascript" src="/zySystem/Public/jq/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/zySystem/Public/js/xykf.js"></script>
	<style type="text/css">
		html,body{
			height:100%;
			width:100%;
		}
	</style>
	</head>
	<body  oncontextmenu=self.event.returnValue=false onselectstart="return false">
	<!-- 最外围大div -->
	<div id="big">
		<div id="title">
			处方信息录入
		</div>
		<div id="content">
			<div id="inter">
				<table id="ttab">
					<tr class="tr1">
						<th class="th1">
							减药
						</th>
						<th class="th1">
							药品编码
						</th>
						<th class="th1">
							药品名称
						</th>
						<th class="th1">
							药品规格
						</th>
						<th class="th1">
							药品含量
						</th>
						<th class="th1">
							最小包装
						</th>
						<th class="th1">
							数量
						</th>
						<th class="th1">
							总量
						</th>
						<th class="th1">
							给药途径
						</th>
						<th class="th1">
							次用量
						</th>
						<th class="th1">
							日次数
						</th>
						<th class="th1">
							特殊用法
						</th>
						<th class="th1">
							处方天数
						</th>
					</tr>
					<tr class="tr2">
						<td class="td1">
							X
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="">
						</td>
						<td class="td1">
							<input type="text"  class="ypname" value="">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
						<td class="td1">
							<select class="textlon">
								<?php if(is_array($useage)): foreach($useage as $key=>$do): $powerid = $do['useage_code']; ?>
                                <option value=<?php echo '"'.$powerid.'"'; ?>><?php echo ($do["useage_name"]); ?></option><?php endforeach; endif; ?>  
							</select>
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00">
						</td>
						<td class="td1">
							<select class="textlon">
                               <?php if(is_array($usepl)): foreach($usepl as $key=>$ao): $plid = $ao['usep_code']; ?>
                                <option value=<?php echo '"'.$plid.'"'; ?>><?php echo ($ao["usep_name"]); ?></option><?php endforeach; endif; ?>  
                            </foreach>  
							</select>
						</td>
						<td class="td1">
							<input type="radio" name="tsyf">无<input type="radio" name="tsyf">皮试<input type="radio" name="tsyf">小壶
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly">
						</td>
					</tr>

				</table>
				<div id="aja">
					
				</div>
				<button class="btn btn-success" id="jia">加一味药</button><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
		</div>
			<div id="bzz">
				备注
			</div>
			<div id="bzy">
				<textarea id="bztext"></textarea>
				
			</div>
			<button class="btn btn-info" id="qdcf">确定此方</button>
			<button class="btn btn-danger" id="ys">预审</button>
	</body>
	<script type="text/javascript">
			$(function(){

			});

			$(document).on("input",".ypname",function(){
				var htm = $(this).val();
				var top = $(this).offset().top 
				var left = $(this).offset().left
				top = top+40;
				left = left+40;
				$('#aja').css('top',top+'px');
				$('#aja').css('left',left+'px');
				 $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/drugWest');?>",
            data:{htm:htm},
            dataType:'json',
            success:function(dd)
            {
                var str = '<ul>';
                $.each(dd,function(idx,item){
                //输出
                // alert(item.id+"号："+item.name);
              		str += '<li class="drugli">'+item.drug_name+'</li>';
                });
                str += '</ul>';
               $('#aja').html(str);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
				
				$('#aja').fadeIn();
				$(this).blur(function(){
				$('#aja').fadeOut();
			});
			});

			$(document).on('mouseover','.drugli',function(){
				$(this).css('backgroundColor','#A8CBF1');
				$(this).css('color','#FFF');
				$(this).click(function(){
				var hht = $(this).html();
					 $.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/sele');?>",
            data:{'list':hht},
            dataType:'json',
            success:function(aa)
            {
                // alert(aa['drug_spec']);
                $('.tr2:last .sspan:nth(0)').val(aa['drug_spec']);
                $('.tr2:last .sspan:nth(1)').val(aa['hl']);
                $('.tr2:last .sspan:nth(2)').val('最小包装');
                $('.tr2:last .sspan:nth(3)').val('总量');
                $('.tr2:last .sspan:nth(4)').val('处方天数');
                $('.tr2:last .textlon:nth(0)').val(aa['drug_code']);
                $('.tr2:last .ypname:nth(0)').val(aa['drug_name']);

            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
				});
			}).on('mouseout','.drugli',function(){
				$(this).css('backgroundColor','');
				$(this).css('color','');
			});
	</script>
</html>