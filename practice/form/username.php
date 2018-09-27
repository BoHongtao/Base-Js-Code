<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2017/7/3
 * Time: 14:56
 */
//① html标签不能自定义，从标签上不能达到“见词知意”的目的html代码：
//② html将数据与格式绑定在一起
//③ 不同浏览器解析html不同html具有兼容性问题，可能在不同的浏览器下解析的结果不同
//④ html语法要求不严格
//$(‘input’) 选取页面中的所有input表单元素
//$(‘:input’) 选取页面中的所有表单元素，包含select以及textarea元素
$username = $_POST['username'];
echo $username;