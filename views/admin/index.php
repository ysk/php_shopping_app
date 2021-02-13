<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/basic_auth.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフログイン</title>
</head>
<body>
    <h1>スタッフログイン</h1>
    <br>
    <form method='POST' action="./staff_login/staff_login_check.php">
        スタッフコード<br>
        <input type="text" name="code"><br>
        パスワード<br>
        <input type="password" name="pass"><br>
        <input type="submit" value="ログイン">
    </form>
</body>
</html>