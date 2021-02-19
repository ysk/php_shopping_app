@extends('layouts.admin_frame')

@section('title', 'ショップ管理TOP')

@include('admin.includes.header')

@section('content')

    <a href="/admin/product/pro_list.php">商品管理</a><br>
    <br>
    <a href="/admin/staff/staff_list.php">スタッフ管理</a><br>
    <br>
    <a href="/admin/order/order_download.php">注文ダウンロード</a><br>
    <br>

@endsection

@include('admin.includes.footer')