<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false){
    echo 'ログインされていません。<br>';
    echo '<a href="../staff_login/index.html">ログイン画面へ</a>';
    exit();
} else {
    echo $_SESSION['staff_name'];
    echo 'さんログイン中<br>';
}
?>