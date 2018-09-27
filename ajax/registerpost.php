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

if($_POST['username'] == 'lyl'){
    echo "lyl已存在";
}else{
    echo "用户名合法";
}