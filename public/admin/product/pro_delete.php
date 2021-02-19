<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_delete.php');

$array = array(
    "pro_code"       => $pro_code,
    "pro_name"       => $pro_name,
    "pro_gazou_name" => $pro_gazou_name,
);

echo $blade->run("admin.product.delete", $array);
?>