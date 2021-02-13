<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_list.php');


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフ一覧</title>
</head>
<body>

<h1>スタッフ一覧</h1>

<form method="post" action="staff_branch.php">

<?php $result = $stmt->fetchAll(); ?>
<?php foreach($result as $key=>$value): ?>
<label>
    <input type="radio" name="staffcode" value="<?php echo $value['code']; ?>">
    <?php echo $value['name']; ?><br>
<?php endforeach;?>
<input type="submit" name="disp" value="参照">
<input type="submit" name="add" value="追加">
<input type="submit" name="edit" value="修正">
<input type="submit" name="delete" value="削除">
</form>
<br><br>
<a href="../staff_login/staff_top.php">TOPメニューへ</a>
</body>
</html>

