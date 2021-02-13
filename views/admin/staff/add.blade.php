<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフ登録フォーム</title>
</head>
<body>
    
    <h1>スタッフ登録</h1>

    <form method='POST' action="staff_add_check.php">
        スタッフ名を入力して下さい<br>
        <input type="text" name="name" value=""><br>
        <br>
        パスワードを入力して下さい<br>
        <input type="password" name="pass" value=""><br>
        <br>
        パスワードをもう一度入力して下さい<br>
        <input type="password" name="pass2" value=""><br>
        <br>
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>