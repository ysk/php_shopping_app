<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_edit.php');
?>
@extends('layouts.admin_frame')

@section('title', '商品編集フォーム')

@section('content')
<p>商品コード</p>
<?php echo $pro_code ?><br>
<p>商品画像</p>
<?php if(check_product_gazou_old_name($pro_gazou_name_old) == true): ?>
    <p><img src="../../upload/<?php echo $pro_gazou_name_old; ?>" style="width: 250px;"></p>
<?php endif; ?>
<form method='POST' action="pro_edit_check.php" enctype="multipart/form-data">
    <input type="hidden" name="code" value="<?php echo $pro_code; ?>">
    <input type="hidden" name="gazou_name_old" value="<?php echo $pro_gazou_name_old; ?>">
    商品名を入力して下さい<br>
    <input type="text" name="name" value="<?php echo $pro_name; ?>"><br>
    <br>
    価格を入力して下さい<br>
    <input type="text" name="price" value="<?php echo $pro_price; ?>"><br>
    <br>
    画像を選んで下さい<br>
    <input type="file" name="gazou"><br>
    <br>
    <input type="button" onclick="history.back();" value="戻る">
    <input type="submit" name="submit" value="OK">
</form>
@endsection