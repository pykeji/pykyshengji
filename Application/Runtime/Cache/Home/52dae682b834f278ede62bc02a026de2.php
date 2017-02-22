<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<head>
	<link rel="stylesheet" href="/zysystem/Public/css/xykf.css">
	<link rel="stylesheet" href="/zysystem/Public/css/bootstrap.css">
	<script type="text/javascript" src="/zysystem/Public/jq/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/zysystem/Public/js/xykf.js"></script>
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
			<form action="" method="post">
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
							<input type="text" class="textlon" value="" name="bianma">
						</td>
						<td class="td1">
							<input type="text"  class="ypname" value="" name="mingcheng">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly" name="guige">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly" name="hanliang">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly" name="baozhuang">
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00" name="shuliang">
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly" name="zongliang">
						</td>
						<td class="td1">
							<select class="textlon" name="tujing">
								<?php if(is_array($useage)): foreach($useage as $key=>$do): $powerid = $do['useage_code']; ?>
                                <option value=<?php echo '"'.$powerid.'"'; ?>><?php echo ($do["useage_name"]); ?></option><?php endforeach; endif; ?>
							</select>
						</td>
						<td class="td1">
							<input type="text" class="textlon" value="1.00" name="yongliang">
						</td>
						<td class="td1">
							<select class="textlon" name="cishu">
                               <?php if(is_array($usepl)): foreach($usepl as $key=>$ao): $plid = $ao['usep_code']; ?>
                                <option value=<?php echo '"'.$plid.'"'; ?>><?php echo ($ao["usep_name"]); ?></option><?php endforeach; endif; ?>  
                            </foreach>  
							</select>
						</td>
						<td class="td1">
							<select name="tsyf" class="textlon">
								<option value="0">无</option>
								<option value="1">皮试</option>
								<option value="2">小壶</option>
							</select>
						</td>
						<td class="td1">
							<input type="text" class="sspan" readonly="readonly" name="tianshu">
						</td>
					</tr>

				</table>
				<div id="aja">
					
				</div>
				<button class="btn btn-success" id="jia" type="button">加一味药</button><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
			</form>
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
            	//待完善，应改成this
                // alert(aa['drug_spec']);
                $('.tr2:last .sspan:nth(0)').val(aa['drug_spec']);
                $('.tr2:last .sspan:nth(1)').val(aa['hl']);
                $('.tr2:last .sspan:nth(2)').val(aa['bzsl2']);
                $('.tr2:last .sspan:nth(3)').val('');
                $('.tr2:last .sspan:nth(4)').val('');
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


		//处方保存
		$('#qdcf').click(function(){
			    var bz = $('#bztext').val();
				var bianma = '';
				var mingcheng = '';
				var guige = '';
				var hanliang = '';
				var baozhuang = '';
				var shuliang = '';
				var zongliang = '';
				var tujing = '';
				var yongliang = '';
				var cishu = '';
				var tsyf = '';
				var tianshu = '';
				$("input[name='bianma']").each(function(){
         			bianma += ','+$(this).val();
			});
				$("input[name='mingcheng']").each(function(){
         			mingcheng += ','+$(this).val();
			});
				$("input[name='guige']").each(function(){
         			guige += ','+$(this).val();
			});
				$("input[name='hanliang']").each(function(){
         			hanliang += ','+$(this).val();
			});
				$("input[name='baozhuang']").each(function(){
         			baozhuang += ','+$(this).val();
			});
				$("input[name='shuliang']").each(function(){
         			shuliang += ','+$(this).val();
			});
				$("input[name='zongliang']").each(function(){
         			zongliang += ','+$(this).val();
			});
				$("select[name='tujing']").each(function(){
         			tujing += ','+$(this).val();
			});
				$("input[name='yongliang']").each(function(){
         			yongliang += ','+$(this).val();
			});
				$("select[name='cishu']").each(function(){
         			cishu += ','+$(this).val();
			});
				$("select[name='tsyf']").each(function(){
         			tsyf += ','+$(this).val();
			});
				$("input[name='tianshu']").each(function(){
         			tianshu += ','+$(this).val();
			});
				$.ajax({
            type:'POST',
            url:"<?php echo U('Ajax/Chufang');?>",
            data:{bianma:bianma,mingcheng:mingcheng,guige:guige,hanliang:hanliang,baozhuang:baozhuang,shuliang:shuliang,zongliang:zongliang,tujing:tujing,yongliang:yongliang,cishu:cishu,bz:bz,tsyf:tsyf},
            dataType:'json',
            success:function(dd)
            {
                alert(dd);
            },
            error:function()
            {
                alert('Ajax请求失败');
            }
        });
				
		});
	</script>
</html>