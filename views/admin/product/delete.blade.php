@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_delete.php');
@endphp

@extends('layouts.admin_frame')

@section('title', '商品削除')

@section('content')
商品名<br>
{{ $pro_name }}<br>
<br>

@if(check_product_gazou($pro_gazou_name) == true)
    <img src="../../upload/{!! $pro_gazou_name !!}" style="width: 250px;">
@endif

この商品を削除してよろしいですか？<br>
<br>
<form method='POST' action="pro_delete_done.php">
    <input type="hidden" name="code" value="{{ $pro_code }}">
    <input type="hidden" name="gazou_name" value="{{ $pro_gazou_name }}">
    <input type="button" onclick="history.back();" value="戻る">
    <input type="submit" name="submit" value="OK">
</form>
@endsection