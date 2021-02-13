<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_add_check.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフ登録フォーム</title>
</head>
<body>

    <?php if(check_staff_name($staff_name) == true): ?>
        <p>スタッフ名</p>
        <p><?php echo $staff_name; ?></p>
    <?php else: ?>
        <p>スタッフ名が入力されていません。</p>
    <?php endif; ?>

    <?php if(check_staff_pass($staff_pass, $staff_pass2) != true): ?>
        <p>パスワードが一致しません</p>
    <?php endif; ?>

    <?php if(check_input_all($staff_name, $staff_pass, $staff_pass2) != true): ?>
        <form>
        <input type="button" onclick="history:back()" value="戻る">
        </form>
    <?php else: ?>
        <?php $staff_pass=md5($staff_pass); ?>
        <form method="post" action="staff_add_done.php">
        スタッフ名：<input type="text" name="name" readonly value="<?php echo $staff_name ?>"><br>
        <input type="hidden" name="pass" value="<?php echo $staff_pass ?>"><br>
        <br>
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" value="OK!">
        </form>
    <?php endif; ?>

</body>
</html>
