<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/28
 * Time: 1:35
 */
@mysql_connect('localhost','root','root');
@mysql_query('set names utf8');
@mysql_query('use test');

$sql = "select * from product";
@$res = mysql_query($sql);
$data = array();
while($row = mysql_fetch_assoc($res)){
    $data[] = $row;
}
$json = json_encode($data);
echo $json;