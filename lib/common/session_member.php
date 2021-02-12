<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['member_login'])==false){
    echo 'ようこそゲスト様<br>';
    echo '<a href="member_login.html">会員ログイン</a>';
} else {
    echo 'ようこそ' . $_SESSION['member_name'] . '様';
    echo '<a href="member_logout.php">ログアウト</a><br>';
}
?>
