function $(id) {
    return document.getElementById(id);
}


function create() {
    // try{
    //     //IE内核
    //     return new ActiveXObject("Microsoft.XMLHTTP");
    // }catch (e){}
    try {
        //W3C
        return new XMLHttpRequest();
    }catch (e){}
    alert('你的浏览器不支持Ajax');
}