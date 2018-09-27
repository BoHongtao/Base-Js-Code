//1、自调用匿名函数
(function () {
    //2、获取dom对象
    var $ = function (id) {
        return document.getElementById(id);
    }
    //3、初始化Ajax
    $.init = function () {
        try{return new ActiveXObject('Microsoft.XMLHTTP');}catch (e){}
        try{return new XMLHttpRequest();} catch (e){}
        alert('浏览器不支持Ajax技术');
    }
    //4、实现get请求，callback是一个函数，用来处理服务器返回的结果
    $.get = function (url,date,callback) {
        var xhr = $.init();
        xhr.onreadystatechange = function () {
            if(xhr.status == 200 && xhr.readyState ==4){
                callback(xhr.responseText);
            }
        };
        if(date!=null){
            url = url+'?'+date;
        }
        xhr.open('get',url);
        xhr.setRequestHeader('If-Modified-Since',0);
        xhr.send(null);
    };
    //5、实现post请求
    $.post = function (url,data,callback) {
        var xhr = $.init();
        //设置回调函数
        xhr.onreadystatechange = function () {
            if(xhr.status == 200 && xhr.readyState == 4){
                callback(xhr.responseText);
            }
        };
        xhr.open('post',url);
        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        xhr.send(data);
    };

    //3、把局部变量$赋值给全局中的$属性
    window.$ = $;
})();


