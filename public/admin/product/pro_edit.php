<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_edit.php');

$array = array(
    "pro_code"  => $pro_code,
    "pro_name"  => $pro_name,
    "pro_price" => $pro_price,
    "pro_gazou_name_old" => $pro_gazou_name_old,
);

echo $blade->run("admin.product.edit", $array);

?>