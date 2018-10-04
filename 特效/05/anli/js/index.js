function refresWeb() {
    if(confirm('确定要刷新吗？')){
        location.reload();
    }
}
//关闭窗口
function closeWin() {
    if(confirm('确定关闭当前的窗口吗')){
        setTimeout('window.close()',3000);
    }
}

//删除
function  confirmDel(id) {
    if(confirm('确定删除当前行？')){
        //跳转到del.html
        location.href="del.html?id="+id;
    }
}

function del() {
    //获取到地址栏中传递过来的id
    var str = location.search;
    //alert(str);
    //从str中得到编号
    var id = str.split("=")[1];
    //alert(id);
    var spanObj = document.getElementById("info");
    spanObj.innerHTML = id+"记录已删除";
    //使用定时器，每隔1s就执行倒计时功能的函数
    setInterval("getHome()",1000);
}

var sec = 3;
function getHome() {
    var spanObj = document.getElementById("sec");
    spanObj.innerHTML = sec;
        sec--;
    if(sec == 0){
        history.go(-1);
    }
}