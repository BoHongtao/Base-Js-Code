<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/26
 * Time: 10:18
 */
header("Content-Type:text/xml;charset=utf-8");
//
header("Cache-Control:no-cache");
$username = $_GET['username'];
if($username == 'lyl'){
    echo "用户名不可用";
}else{
    echo "用户可用";
}