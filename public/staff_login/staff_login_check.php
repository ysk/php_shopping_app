<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/staff_login/staff_login_check.php');
if(check_login($rec) != false){
    session_start();
    $_SESSION['login'] = 1;
    $_SESSION['staff_code'] = $staff_code;
    $_SESSION['staff_name'] = $rec['name'];
    header('Location: staff_top.php');
    exit();
} else {
    echo '<p>スタッフコードかパスワードが間違っています</p>';
    echo '<a href="index.html">戻る</a>';
}
?>