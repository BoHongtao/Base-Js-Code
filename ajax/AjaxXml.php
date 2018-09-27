<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/26
 * Time: 14:29
 */
header("Content-Type:text/xml;charset=utf-8");
//不用缓存
header("Cache-Control:no-cache");
$username = $_POST['username'];
$info = "";
if($username == 'lyl'){
    $info.="<res><mes>用户名已存在</mes></res>";
}else{
    $info.="<res><mes>用户名可用</mes></res>";
}
echo $info;