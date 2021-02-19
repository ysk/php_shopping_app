@extends('layouts.admin_frame')

@section('title', '注文ダウンロード')

@section('content')
    <a href="chumon.csv" class="btn btn-primary">注文データのダウンロード</a><br>
    <br>
    <a href="order_download.php" class="btn btn-primary">日付選択へ</a><br>
    <br>
    <a href="/admin/staff_login/staff_top.php">トップメニューへ</a><br>
    <br>
@endsection
