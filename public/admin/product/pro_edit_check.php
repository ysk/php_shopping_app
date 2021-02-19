<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_edit_check.php');

$array = array(
    "pro_code"  => $pro_code,
    "pro_name"  => $pro_name,
    "pro_price" => $pro_price,
    "pro_gazou" => $pro_gazou,
    "pro_code"  => $pro_code,
    "pro_gazou_name_old" => $pro_gazou_name_old,
);

echo $blade->run("admin.product.edit_check", $array);

?>