<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショップ管理TOP</title>
</head>
<body>

<h1>ショップ管理TOP</h1>

<a href="staff_logout.php">ログアウト</a><br>
<br>
<a href="../product/pro_list.php">商品管理</a><br>
<br>
<a href="../staff/staff_list.php">スタッフ管理</a><br>
<br>
<a href="../order/order_download.php">注文ダウンロード</a><br>

<br>
</body>
</html>