/*
时间倒计时插件
TimeDown.js
*/
function TimeDown(id, endDateStr) {
    //结束时间
    var endDate = new Date(endDateStr);
    //当前时间
    var nowDate = new Date();
    //相差的总秒数
    var totalSeconds = parseInt((endDate - nowDate) / 1000);
    //天数
    var days = Math.floor(totalSeconds / (60 * 60 * 24));
    //取模（余数）
    var modulo = totalSeconds % (60 * 60 * 24);
    //小时数
    var hours = Math.floor(modulo / (60 * 60));
    modulo = modulo % (60 * 60);
    //分钟
    var minutes = Math.floor(modulo / 60);
    //秒
    var seconds = modulo % 60;
    //输出到页面
	if(totalSeconds>=0){
		document.getElementById(id).innerHTML = "还剩:" + days + "天" + hours + "小时" + minutes + "分钟" + seconds + "秒";
	}else{
		document.getElementById(id).innerHTML = "这个包已经过了售卖期了，请期待下一个包吧！";
	}
    //延迟一秒执行自己
    setTimeout(function () {
        TimeDown(id, endDateStr);
    }, 1000)
}