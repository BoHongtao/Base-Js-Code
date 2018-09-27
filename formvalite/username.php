<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/7/2
 * Time: 14:31
 */

header('Content-type:text/html;charset=utf-8');
$username = $_POST['username'];
//$username = 'zhangsan';
//从服务器读取数据
$pdo = new PDO('mysql:host=localhost;dbname=test','root','root');

$sql = "select * from user where username='$username'";

$stmt = $pdo->query($sql);

$count = $stmt->rowCount();

if($count){
    echo true;
}else{
    echo false;
}