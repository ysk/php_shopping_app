<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/order/order_download_done.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文ダウンロード</title>
</head>
<body>
<h1>注文ダウンロード</h1>

<a href="chumon.csv">注文データのダウンロード</a><br>
<br>
<a href="order_download.php">日付選択へ</a><br>
<br>
<a href="../staff_login/staff_top.php">トップメニューへ</a><br>
<br>

<br>
</body>
</html>