<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session_member.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/shop/shop_list.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
</head>
<body>
<h1>商品一覧</h1>

    <?php $result = $stmt->fetchAll(); ?>
    <table border="1">
    <tr>
        <th>商品</th>
        <th>画像</th>
        <th>価格</th>
    </tr>

    <?php foreach($result as $key=>$value): ?>
        <tr>
            <td>
                <a href="shop_product.php?procode=<?php echo $value['code']; ?>">
                <img src="../product/gazou/<?php echo $value['gazou']; ?>" style="width:250px"></a>
            </td>
            <td>
                <a href="shop_product.php?procode=<?php echo $value['code']; ?>"><?php echo $value['name']; ?></a>
            </td>
            <td>
                <?php echo number_format($value['price']); ?>円</a>
            </td>
        </tr>
    <?php endforeach;?>
    </table>
<br>
<a href="shop_cartlook.php">カートを見る</a><br><br>
</body>
</html>
