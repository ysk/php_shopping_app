<?php
require $_SERVER['DOCUMENT_ROOT'] ."../vendor/autoload.php";

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/blade_common.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_kantan_check.php');

$array = array(
    'onamae'  => $onamae,
    'email'   => $email,
    'postal1' => $postal1,
    'postal2' => $postal2,
    'address' => $address,
    'tel'     => $tel,
);

echo $blade->run("shop.kantan_check", $array);
?>
