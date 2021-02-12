<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/product/pro_add_check.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スタッフ登録フォーム</title>
</head>
<body>

    <?php if(check_product_name($pro_name) == true): ?>
        <p>商品名</p>
        <p><?php echo $pro_name; ?></p>
    <?php else: ?>
        <p>商品名が入力されていません。</p>
    <?php endif; ?>


    <?php if(check_product_price($pro_price) != true): ?>
        <p>価格をきちんと入力して下さい。</p>
    <?php else: ?>
        <p>価格  <?php echo $pro_price; ?>円</p>
    <?php endif; ?>

    
    <?php if(check_product_gazou($pro_gazou) != true): ?>
        <p>画像が大きすぎます。</p>
    <?php else: ?>
        <?php move_uploaded_file($pro_gazou['tmp_name'], './gazou/'.$pro_gazou['name']); ?>
        <img src="./gazou/<?php echo $pro_gazou['name']; ?>" style="width: 250px;">
    <?php endif; ?>

    <?php if(check_product_all($pro_name, $pro_price, $pro_gazou) != true): ?>
        <form>
        <p>商品名をちゃんと入力して下さい。</p>
        <input type="button" onclick="history.back();" value="戻る">
        </form>
    <?php else: ?>

        <p>上記の商品を追加します。</p>
        <form method="post" action="pro_add_done.php">
        <input type="hidden" name="name" value="<?php echo $pro_name; ?>">
        <input type="hidden" name="price" value="<?php echo $pro_price; ?>">
        <input type="hidden" name="gazou_name" value="<?php echo $pro_gazou['name']; ?>">
        <br>
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" value="OK!">
        </form>
    <?php endif; ?>

</body>
</html>