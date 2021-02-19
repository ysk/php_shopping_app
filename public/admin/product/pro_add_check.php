<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_add_check.php');

$array = array(
    "pro_name"  => $pro_name,
    "pro_price" => $pro_price,
    "pro_gazou" => $pro_gazou,
);

echo $blade->run("admin.product.add_check", $array);
?>