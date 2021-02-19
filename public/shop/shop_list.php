<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_list.php');

$result = $stmt->fetchAll();

$array = array(
    'result' => $result,
);

echo $blade->run("shop.list", $array);
?>
