@extends('layouts.admin_frame')

@section('title', '商品登録')

@include('admin.includes.header')

@section('content')
<form method='POST' action="pro_add_check.php" enctype="multipart/form-data">
    商品名を入力して下さい<br>
    <input type="text" name="name" value=""><br>
    <br>
    価格を入力して下さい<br>
    <input type="text" name="price" value=""><br>
    <br>
    画像を選んで下さい<br>
    <input type="file" name="gazou"><br>
    <br>
    <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
    <input type="submit" name="submit" value="OK" class="btn btn-primary">
</form>
@endsection

@include('admin.includes.footer')

