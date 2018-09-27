<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/27
 * Time: 10:47
 */

@mysql_connect('localhost','root','root');
@mysql_query('set names utf8');
@mysql_query('use test');

$sql = "select * from product";

@$res = mysql_query($sql);
$str="<shop>";
while($row = mysql_fetch_assoc($res)){
    $str.="<product>";
    $str.="<pro_id>{$row['pro_id']}</pro_id>";
    $str.="<pro_name>{$row['pro_name']}</pro_name>";
    $str.="<pro_price>{$row['price']}</pro_price>";
    $str.="<pro_chandi>{$row['chandi']}</pro_chandi>";
    $str.="</product>";
}
$str.="</shop>";
header('Content-type:text/xml');
echo $str;

