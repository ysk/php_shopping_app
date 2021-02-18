<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_form_check.php');

$array = array(
    'onamae'  => $onamae,
    'email'   => $email,
    'postal1' => $postal1,
    'postal2' => $postal2,
    'address' => $address,
    'tel'     => $tel,
    'chumon'  => $chumon,
    'pass'    => $pass,
    'pass2'   => $pass2,
    'danjo'   => $danjo,
    'birth'   => $birth,
    'ok_flg'  => $ok_flg,
);

echo $blade->run("shop.form_check", $array);
?>
