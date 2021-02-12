<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/staff/staff_edit.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフ編集フォーム</title>
</head>
<body>
    <h1>スタッフ編集</h1>
    <p>スタッフコード</p>

    <?php echo $staff_code ?>    <br>

    <form method='POST' action="staff_edit_check.php">
        <input type="hidden" name="code" value="<?php echo $staff_code ?>">
        スタッフ名を入力して下さい<br>
        <input type="text" name="name" value="<?php echo $staff_name ?>"><br>
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