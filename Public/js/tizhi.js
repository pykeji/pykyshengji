/**
 * Created by dark on 2017/1/10.
 */
//测试结果记录弹出
$(".tztitle").click(function(){
    if($(".tzstyle").css('left')<'0px'){
        $(".tzstyle").animate({left:'1px',opacity:'1'},1000);
    }else{
        $(".tzstyle").animate({left:'-400px',opacity:'0'},1000);
    }
})
//外部点击关闭
//$(".report").click(function(){
//    $(".tzstyle").animate({left:'-400px',opacity:'0'},1000);
//})
//点击题号变色
$("#myTiContent tr td").click(function(){
    $(this).attr('class','sty1');
    $("#myTiContent tr td").not(this).attr('class','');
})
//选中选项变色
$(".ti-content label input").click(function(){
    var xxn="xx"+$(".sty1").children().html();
    var xx=document.getElementsByName(xxn);
    for(var i=0;i<xx.length;i++){
        if(xx[i].checked){
            $("#"+xxn).css("background-color","#d6faf6");
            $("#xyt").click();
        }
    }
})
//下一题
$("#xyt").click(function(){
    if($(this).attr("name")=="ban"){
        alert("不要频繁点击我哦！")
    }else{
        //判断是否到达每行的最后一个（行内变色）
        if($(".sty1").next().html()){
            $(this).attr("name","ban");
            //点击变色
            $(".sty1").next().children().trigger("click");
            setTimeout(function(){
                $("#xyt").removeAttr("name");
            },500)
        }else{
            //判断是否到达整体的最后一个（隔行变色）
            if($(".sty1").parent().next().html()){
                $(".sty1").parent().next().children("td:first-child").children().trigger("click");
            }else{
                alert("已经到达最后一个啦!")
            }
        }
    }
})
//上一题
$("#syt").click(function(){
    if($(this).attr("name")=="ban"){
        alert("不要频繁点击我哦！")
    }else{
        //判断一行是否到头(行内变色)
        if($(".sty1").prev().html()){
            $(this).attr("name","ban");
            $(".sty1").prev().children().trigger("click");
            setTimeout(function(){
                $("#syt").removeAttr("name");
            },500)
        }else{
            //判断整体是否到头（隔行变色）
            if($(".sty1").parent().prev().html()){
                $(".sty1").parent().prev().children("td:last-child").children().trigger("click");
            }else{
                alert("已经到达第一个啦!")
            }
        }
    }
})