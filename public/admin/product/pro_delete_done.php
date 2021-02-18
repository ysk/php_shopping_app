<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_delete_done.php');

$array = array(
    "pro_code"       => $pro_code,
    "pro_gazou_name" => $pro_gazou_name,
);

echo $blade->run("admin.product.delete_done", $array);
?>