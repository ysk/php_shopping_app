@extends('layouts.admin_frame')

@section('title', '商品削除')

@include('admin.includes.header')

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
        <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
        <input type="submit" name="submit" value="OK" class="btn btn-primary">
    </form>
@endsection

@include('admin.includes.footer')