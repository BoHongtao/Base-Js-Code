<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/27
 * Time: 2:50
 */
header('Content-type:text/html;charset=utf-8');
//echo '返回的数据';
$username = $_GET['username'];

@mysql_connect('localhost','root','root');
@mysql_query('set names utf8');
@mysql_query('use test');

$sql = "select * from user where username = '$username'";
$res = mysql_query($sql);

$row = mysql_fetch_assoc($res);
if($row['username']){
    //不合法
    echo 0;
}else{
    //合法
    echo 1;
}
