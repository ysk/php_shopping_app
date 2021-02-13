<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/order/order_download_done.php');
?>
@extends('layouts.admin_frame')

@section('title', '注文ダウンロード')

@section('content')
<a href="chumon.csv">注文データのダウンロード</a><br>
<br>
<a href="order_download.php">日付選択へ</a><br>
<br>
<a href="../staff_login/staff_top.php">トップメニューへ</a><br>
<br>
@endsection