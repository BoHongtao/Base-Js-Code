<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/27
 * Time: 10:33
 */
require_once 'init.php';
require_once 'core/mypdo.php';
$dao = Mypdo::getSingleton('product');

//$sql = "select * from product";

//$res = $dao->getAll($sql);

//每页显示的数量
$perpage = 2;
//总数量
$sql = "select count(*) as c from product";
$res = $dao->getAll($sql);
$total = $res[0]['c'];





