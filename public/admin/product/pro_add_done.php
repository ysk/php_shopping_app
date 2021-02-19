<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_add_done.php');

$array = array();

echo $blade->run("admin.product.add_done", $array);
?>