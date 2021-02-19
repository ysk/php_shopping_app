<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/member_login_check.php');
if(check_login($rec) != false){
    session_start();
    $_SESSION['member_login'] = 1;
    $_SESSION['member_code'] = $rec['code'];
    $_SESSION['member_name'] = $rec['name'];
    header('Location: shop_list.php');
    exit();
} else {
    echo '<p>メールアドレスかパスワードが間違っています</p>';
    echo '<a href="member_login.php">戻る</a>';
}
?>