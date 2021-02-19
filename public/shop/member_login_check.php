<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');

$array = array();

echo $blade->run("shop.login_check", $array);

?>