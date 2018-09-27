<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/7/3
 * Time: 11:29
 */

$c_parent_id = $_GET['c_parent_id'];

$pdo = new PDO('mysql:host=localhost;dbname=blog','root','root');


$sql = "select * from bl_category where c_parent_id = '$c_parent_id'";

$stmt = $pdo->query($sql);
$count = $stmt->rowCount();
$data = array();

for($i=0;$i<$count;++$i){
    $data[] = $stmt->fetch(PDO::FETCH_ASSOC);
}


echo json_encode($data);
