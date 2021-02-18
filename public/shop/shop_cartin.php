<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_cartin.php');

$array = array();

echo $blade->run("shop.cartin", $array);
?>
