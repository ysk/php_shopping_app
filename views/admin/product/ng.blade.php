@extends('layouts.admin_frame')

@section('title', '商品選択エラー')

@include('admin.includes.header')

@section('content')
    商品が選択されていません。<br>
    <a href="pro_list.php">戻る</a>
@endsection

@include('admin.includes.footer')
