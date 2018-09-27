<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/7/3
 * Time: 9:32
 */
$length = count($_POST);
if($length==0){
    echo 'GET';
}else{
    echo $_POST['username'];
}
