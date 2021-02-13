<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');

session_start();
session_regenerate_id(true);


//数量変更
$post = sanitize($_POST);
$max = $post['max'];
for($i=0; $i<$max; $i++){
    if (preg_match('/^[0-9]+$/',$post['kazu'.$i])==0) {
        echo '数量に誤りがあります';
        echo '<a href="shop_cartlook.php">カートに戻る</a>';
        exit();
    }
    if ($post['kazu'.$i]<1 || $post['kazu'.$i]>10) {
        echo '数量は１個以上、１０個までです。';
        echo '<a href="shop_cartlook.php">カートに戻る</a>';
        exit();
    }
    $kazu[] = $post['kazu'.$i];
}


//商品削除用
$cart=$_SESSION['cart'];
for($i=$max; 0<=$i; $i--){
    if(isset($post['sakujo' . $i])==true){
        array_splice($cart, $i, 1);
        array_splice($kazu, $i, 1);
    }
}

$_SESSION['cart']=$cart;
$_SESSION['kazu']=$kazu;

header('Location: shop_cartlook.php');
exit();


?>