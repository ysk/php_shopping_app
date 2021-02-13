<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_product.php');
?>
@extends('layouts.site_frame')

@section('title', '商品詳細ページ')

@section('content')

<a href="shop_cartin.php?procode=<?php echo $pro_code; ?>">カートに入れる</a><br>
<br>
<p>商品コード：<?php echo $pro_code; ?></p>
<p>商品名：<?php echo $pro_name; ?></p>
<p>価格：<?php echo $pro_price; ?></p>

<?php if(check_product_gazou_name($pro_gazou_name) == true): ?>
<p>商品画像：<img src="../../upload/<?php echo $pro_gazou_name; ?>" style="width: 250px;"></p> 
<?php endif; ?>

<form>
    <input type="button" onclick="history.back();" value="戻る">
</form>

@endsection