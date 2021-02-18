<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_form_done.php');

$array = array(
    'onamae'  => $onamae,
    'email'   => $email,
    'chumon'  => $chumon,
    'postal1' => $postal1,
    'postal2' => $postal2,
    'address' => $address,
    'tel'     => $tel,
);

echo $blade->run("shop.form_done", $array);
?>
