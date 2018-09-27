<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/6/24
 * Time: 8:53
 */
//$str = 'vsyugaishdu()*&$%^$)(*34459&(*&jhvjd545kksdphp你好济南';
//$reg = '/.+/';
//preg_match($reg,$str,$match);
//var_dump($match);


$arr = [1,2,3,4,5,6,7,8,9];
//遍历
for($i = 0 ; $i < count($arr) ; ++$i){
    echo $arr[$i];
}
echo "<hr>";
//foreach ($arr as $k=>$v){
//    echo $v;
//}
//echo "<hr>";
while(list($k,$v) = each($arr)){
    echo $v;
}