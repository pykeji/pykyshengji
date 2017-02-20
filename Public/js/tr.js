/**
 * Created by dark on 2017/1/18.
 */
$(".sty1").click(function(){
    var tsty1=document.getElementsByName("tableSty");
    for(var i=0;i<tsty1.length;i++){
        tsty1[i].className="sty1";
    }
    $(this).attr("class","sty2");
})
$(".cxtr1").click(function(){
    var cxtsty1=document.getElementsByName("cxtableSty");
    for(var i=0;i<cxtsty1.length;i++){
        cxtsty1[i].className="cxtr1";
    }
    $(this).attr("class","cxtr2");
})
