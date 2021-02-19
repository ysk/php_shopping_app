@extends('layouts.admin_frame')

@section('title', '注文ダウンロード')

@include('admin.includes.header')

@section('content')
    <a href="chumon.csv">注文データのダウンロード</a><br>
    <br>
    <a href="order_download.php">日付選択へ</a><br>
    <br>
    <a href="/admin/staff_login/staff_top.php">トップメニューへ</a><br>
    <br>
@endsection

@include('admin.includes.footer')