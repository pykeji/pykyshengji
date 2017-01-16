/**
 * Created by dark on 2016/12/16.
 */
$(document).ready(function(){
    $(".mbt tr td:even").css({"text-align":"right","font-weight":"600"});
    $(".mbt1 td:even").css({"text-align":"right","font-weight":"600"});
    $(".modal-body .rtable td").css("text-align","center");
    // 得到年月日
    var date=new Date();
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var strDate = date.getDate();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    var date1=year+"-"+month+"-"+strDate;
    //接诊当前日期
    $("#dqrq").html(date1);
    //登记日期
    $(".djrq").html(date1);
    //挂号日期
    $(".ghrq").val(date1);
    //病史就诊日期
    $("#jzrq").html(date1);
    shijian();
})
// 得到时分秒
function date2(){
    var date=new Date();
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var strDate = date.getDate();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    if (hours >= 0 && hours <= 9) {
        hours = "0" + hours;
    }
    if (minutes >= 0 && minutes <= 9) {
        minutes = "0" + minutes;
    }
    var date2=year+"-"+month+"-"+strDate+" "+hours+":"+minutes;
    $(".yyrq").val(date2);
}
// 动态时间
function shijian(){
    setInterval(date2,1000);
}
