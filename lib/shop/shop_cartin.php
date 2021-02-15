<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php
if(isset($_GET['procode'])){
    $pro_code = $_GET['procode'];
}
if(isset($_SESSION['cart'])==true){
    $cart = $_SESSION['cart'];
    $kazu = $_SESSION['kazu'];
    if(in_array($pro_code, $cart)==true){
        echo '<p>その商品はすでにカートに入っています</p>';
        echo '<a href="shop_list.php">商品一覧に戻る</a>';
        exit();
    }
}

$cart[] = $pro_code;
$kazu[] = 1;

$_SESSION['cart'] = $cart;
$_SESSION['kazu'] = $kazu;
?>

