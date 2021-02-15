<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_add_done.php');
?>
@extends('layouts.admin_frame')

@section('title', '商品登録')

@section('content')
商品を登録しました。<br>
<a href="pro_list.php">戻る</a>
@endsection