<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');

//基本認証
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/basic_auth.php');

$array = array();

echo $blade->run("admin.index", $array);
?>