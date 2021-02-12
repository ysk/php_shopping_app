<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/shop/shop_form_done.php');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>注文完了</title>
</head>
<body>
<h1>注文完了</h1>
<?php echo $onamae ?>様<br>
<br>
ご注文ありがとうございました。<br>
<?php echo $email ?>にメールを送りましたのでご確認ください。<br>
<br>
商品は以下の住所に発送させていただきます。<br>
〒<?php echo $postal1 ?>-<?php echo $postal2 ?><br>
<?php echo $address ?><br>
<br>
ご連絡先<br>
<?php echo $tel ?>
<br>
<br>

<a href="shop_list.php">商品画面へ戻る</a>

</body>
</html>