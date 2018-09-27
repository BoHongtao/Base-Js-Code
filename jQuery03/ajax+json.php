<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/7/2
 * Time: 10:49
 */

$pdo = new PDO('mysql:host=localhost;dbname=blog','root','root');

$sql = "select a_name,c_id from bl_article";

$stmt = $pdo->query($sql);
$count = $stmt->rowCount();
$data = array();
for($i=0;$i<$count;++$i){
    $data[] = $stmt->fetch(PDO::FETCH_ASSOC);
}
echo json_encode($data);