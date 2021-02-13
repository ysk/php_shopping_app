<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_cartin.php');
?>
@extends('layouts.site_frame')

@section('title', 'カートに追加しました')

@section('content')
カートに追加しました。<br>
<br>
<a href="shop_list.php">商品一覧に戻る</a>
@endsection