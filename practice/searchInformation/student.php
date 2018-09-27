<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/7/3
 * Time: 16:06
 */
//
$studentname = $_POST['studentname'];
//echo $studentname;

$pdo = new PDO('mysql:host=localhost;dbname=blog','root','root');

$sql = "select * from bl_article where a_name = '$studentname'";

$stmt = $pdo->query($sql);
$res = $stmt->fetchAll();
echo json_encode($res);
