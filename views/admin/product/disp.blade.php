
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_disp.php');
?>
@extends('layouts.admin_frame')

@section('title', '商品参照')

@section('content')
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