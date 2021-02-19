<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_cartlook.php');

$array = array(
    'max'  => $max,
    'kazu' => $kazu,
    'pro_name'  => $pro_name,
    'pro_gazou' => $pro_gazou,
    'pro_price' => $pro_price,
    'is_login' => $_SESSION['member_login'],
);

echo $blade->run("shop.cartlook", $array);
?>
