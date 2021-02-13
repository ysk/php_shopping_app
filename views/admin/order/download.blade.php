<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/order/order_download.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV注文ダウンロード</title>
</head>
<body>
<h1>CSV注文ダウンロード</h1>


<p>ダウンロードしたい注文日を選択して下さい。</p>

<form method="post" action="order_download_done.php">
<?php select_year(); ?>
年
<?php select_month(); ?>
月
<?php select_day(); ?>
日<br>
<br>
<input type="submit" value="CSVをダウンロードする">
</form>
<br>
</body>
</html>