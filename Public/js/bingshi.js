/**
 * Created by dark on 2016/12/19.
 */
//病人基本信息弹出
$(".baseInf").click(function(){
    if($(".baseContent").css('left')<'0px'){
        //俩弹框不能同时存在
        if($(".hisContent").css('left')>'0px'){
            $(".hisContent").animate({left:'-280px',opacity:'0'},1000);
            $(".hisContent").css('z-index','10');
            $(".baseContent").css('z-index','20');
            $(".baseContent").animate({left:'45px',opacity:'1'},1000);
        }else{
            $(".baseContent").animate({left:'45px',opacity:'1'},1000);
        }
    }else{
        $(".guanbi").parent().parent().animate({left:'-280px',opacity:'0'},1000);
    }
})
//历史就诊记录弹出
$(".hisInf").click(function(){
    if($(".hisContent").css('left')<'0px'){
        //俩弹框不能同时存在
        if($(".baseContent").css('left')>'0px'){
            $(".baseContent").animate({left:'-280px',opacity:'0'},1000);
            $(".baseContent").css('z-index','10');
            $(".hisContent").css('z-index','20');
            $(".hisContent").animate({left:'45px',opacity:'1'},1000);
        }else{
            $(".hisContent").animate({left:'45px',opacity:'1'},1000);
        }
    }else{
        $(".guanbi").parent().parent().animate({left:'-280px',opacity:'0'},1000);
    }
})
//关闭
$(".guanbi").click(function(){
    $(this).parent().parent().animate({left:'-280px',opacity:'0'},1000);
})

//该功能和双击弹出框冲突
//$(".health-file").click(function(){
//    //alert(11);
//    $(".guanbi").parent().parent().animate({left:'-280px',opacity:'0'},1000);
//})

//家庭史
/**
 * 双击弹出事件
 * @param inp 要双击的input框的id
 * @param kuang  双击后弹出的div的class
 * @param kuangInp 弹出框中的input框的id
 */
function douCli(inp,kuang,kuangInp){
    $(".clo").not($("#"+kuangInp).nextAll('clo')).click();//只能打开一个框
    $("."+kuang).children('.div1').css('display','block');
    var offset=$("#"+inp).offset();
    $("."+kuang).css("left","0px");
    $("."+kuang).css("top","0px");
    $("."+kuang).offset({top:offset.top+20,left:offset.left});
    $("#"+kuangInp).val($("#"+inp).val());
    $("."+kuang).toggle();
}
/**
 * 点击“提交”按钮进行提交
 * @param inp 提交后显示提交内容的input框的id
 * @param kuangInp  弹出框中的input框的id
 * @param kuang  双击后弹出的div的class
 */
function sub(inp,kuang,kuangInp){
    $("#"+inp).attr("value",$("#"+kuangInp).val());
    //$("#"+inp).val($("#"+kuangInp).val());//打印功能失效
    var len=$("#"+kuangInp).val().length;
    $("#"+inp).css({"width":(len*15)+"px","min-width":"30px","max-width":$("#"+inp).parent().parent().width(),"color":"red"});
    $("."+kuang).hide();
}
/**
 * 单选框选中input内容改变事件
 * @param clas  单选框的类名
 * @param kuangInp 弹出框中的input框的id
 */
function checked1(clas,kuangInp){
    var jtsFarc="";
    var gmcheck=document.getElementsByClassName(clas);
    for(var i=0;i<gmcheck.length;i++){
        if(gmcheck[i].checked){
            jtsFarc=gmcheck[i].value;
        }
    }
    $("#"+kuangInp).val(jtsFarc);
}
/**
 * 单选按钮双击内容提交
 */
$(".dblCli").dblclick(function(){
    $("#"+$(this).children().attr("class")).val($(this).children().val());
    var len=$("#"+$(this).parent().prev().children("input[type='text']").attr('id')).val().length;
    $("#"+$(this).children().attr("class")).css({"width":(len*15)+"px","min-width":"30px","max-width":$("#"+$(this).children().attr("class")).parent().parent().width(),"color":"red"});
    $(this).parent().parent().hide();
})
/**
 * 多选框选中input内容改变事件
 * @param clas  单选框的类名
 * @param kuangInp 弹出框中的input框的id
 */
function checked2(clas,kuangInp){
    var jtsFarc="";
    var gmcheck=document.getElementsByClassName(clas);
    for(var i=0;i<gmcheck.length;i++){
        if(gmcheck[i].checked){
            jtsFarc+=gmcheck[i].value+",";
        }
    }
    $("#"+kuangInp).val(jtsFarc.substr(0,jtsFarc.length-1));
}
//滚动消失
$(".right-center").scroll(function(){
    $(".gm").hide();
    $(".jtsFar").hide();
    $(".jtsMother").hide();
    $(".jts3").hide();
    $(".jts4").hide();
    $(".jts11,.jts22,.jts33,.jts44").hide();
    $(".zt1,.zt2,.zt3,.zt4").hide();
    $(".xz1,.xz2,.xz3,.xz4,.xz5,.xz6,.xz7,.xz8").hide();
    $(".qz1,.qz2,.xj1").hide();
    $(".sz1,.sz2,.sz3,.sz4,.sz5,.mz1").hide();
    $(".jws1,.jws2").hide();
    $(".zyzd1,.xyzd1").hide();
    //$(".guanbi").parent().parent().animate({left:'-280px',opacity:'0'},1000);
})
//点击关闭按钮进行关闭
$(".clo").click(function(){
    $(this).parent('.div1').parent().hide();
})
$(window).ready(function(){
    if($("#jws11").val()!=''){
        $("#jws11").attr("size",$("#jws11").val().length*2);
        $("#crbs").attr("size",$("#crbs").val().length*2);
        $("#jtsFQ").attr("size",$("#jtsFQ").val().length*2);
        $("#jtsMQ").attr("size",$("#jtsMQ").val().length*2);
        $("#jtsXD").attr("size",$("#jtsXD").val().length*2);
        $("#jtsZN").attr("size",$("#jtsZN").val().length*2);
        $("#gms").attr("size",$("#gms").val().length*2);
        $("#zl").attr("size",$("#zl").val().length*2);
        $("#mz").attr("size",$("#mz").val().length*2);
    }
})