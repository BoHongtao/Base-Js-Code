<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/27
 * Time: 7:43
 */
header('Content-type:text/html;charset=utf-7');

$username = $_POST['username'];
$password = $_POST['password'];

@mysql_connect('localhost','root','root');
@mysql_query('set names utf8');
@mysql_query('use test');

$sql = "insert into user VALUE ('$username','$password')";

@$res = mysql_query($sql);
if($res && mysql_affected_rows()>0){
    echo 1;
}else{
    echo 0;
}