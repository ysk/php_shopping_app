
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_edit_done.php');
?>
@extends('layouts.admin_frame')

@section('title', '商品編集フォーム')

@section('content')
修正しました<br>
<a href="pro_list.php">戻る</a>
@endsection