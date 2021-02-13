<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_list.php');
?>
@extends('layouts.admin_frame')

@section('title', '商品一覧')

@section('content')
<form method="post" action="pro_branch.php">
    <?php $result = $stmt->fetchAll(); ?>
    <?php foreach($result as $key=>$value): ?>
    <label>
        <input type="radio" name="procode" value="<?php echo $value['code']; ?>">
        <?php echo $value['name']; ?> --- <?php echo $value['price']; ?>円<br>
    <?php endforeach;?>
    <input type="submit" name="disp" value="参照">
    <input type="submit" name="add" value="追加">
    <input type="submit" name="edit" value="修正">
    <input type="submit" name="delete" value="削除">
</form>
<br><br>
<a href="../staff_login/staff_top.php">TOPメニューへ</a>
@endsection

