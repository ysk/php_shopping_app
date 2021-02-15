
@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_disp.php');
@endphp

@extends('layouts.admin_frame')

@section('title', '商品参照')

@section('content')
<p>商品コード：{{ $pro_code }}</p>
<p>商品名：{{ $pro_name }}</p>
<p>価格：{{ $pro_price }}</p>

@if(check_product_gazou_name($pro_gazou_name) == true)
<p>商品画像：<img src="../../upload/{!! $pro_gazou_name !!}" style="width: 250px;"></p> 
@endif

<form>
<input type="button" onclick="history.back();" value="戻る">
</form>
@endsection