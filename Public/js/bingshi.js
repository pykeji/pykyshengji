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
$(".health-file").click(function(){
    $(".guanbi").parent().parent().animate({left:'-280px',opacity:'0'},1000);
})

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
    $("#"+inp).val($("#"+kuangInp).val());
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
    //$(".guanbi").parent().parent().animate({left:'-280px',opacity:'0'},1000);
})
//点击关闭按钮进行关闭
$(".clo").click(function(){
    $(this).parent('.div1').parent().hide();
})