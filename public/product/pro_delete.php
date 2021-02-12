<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/product/pro_delete.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品削除フォーム</title>
</head>
<body>
    <h1>商品削除</h1>

    商品名名<br>
    <?php echo $pro_name; ?><br>
    <br>

    <?php if(check_product_gazou($pro_gazou_name) == true): ?>
        <img src="./gazou/<?php echo $pro_gazou_name; ?>" style="width: 250px;">
    <?php endif; ?>

    この商品を削除してよろしいですか？<br>
    <br>
    <form method='POST' action="pro_delete_done.php">
        <input type="hidden" name="code" value="<?php echo $pro_code ?>">
        <input type="hidden" name="gazou_name" value="<?php echo $pro_gazou_name ?>">
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>