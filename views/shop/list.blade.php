<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_list.php');
?>
@extends('layouts.site_frame')

@section('title', '商品一覧ページ')

@section('content')

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
            <img src="../../upload/<?php echo $value['gazou']; ?>" style="width:250px"></a>
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

@endsection

