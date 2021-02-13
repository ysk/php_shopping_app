@extends('layouts.admin_frame')

@section('title', '商品登録')

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
    <input type="button" onclick="history.back();" value="戻る">
    <input type="submit" name="submit" value="OK">
</form>
@endsection
