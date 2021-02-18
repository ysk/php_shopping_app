@extends('layouts.admin_frame')

@section('title', 'ショップ管理TOP')

@section('content')

    <a href="staff_logout.php">ログアウト</a><br>
    <br>
    <a href="../product/pro_list.php">商品管理</a><br>
    <br>
    <a href="../staff/staff_list.php">スタッフ管理</a><br>
    <br>
    <a href="../order/order_download.php">注文ダウンロード</a><br>
    <br>

@endsection