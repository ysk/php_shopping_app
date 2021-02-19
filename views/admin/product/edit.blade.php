@extends('layouts.admin_frame')

@section('title', '商品編集フォーム')

@include('admin.includes.header')

@section('content')
    <p>商品コード</p>
    {{ $pro_code }}<br>
    <p>商品画像</p>

    @if(check_product_gazou_old_name($pro_gazou_name_old) == true)
        <p><img src="../../upload/{!! $pro_gazou_name_old !!}" style="width: 250px;"></p>
    @endif

    <form method='POST' action="pro_edit_check.php" enctype="multipart/form-data">
        <input type="hidden" name="code" value="{{ $pro_code }}">
        <input type="hidden" name="gazou_name_old" value="{{ $pro_gazou_name_old }}">
        商品名を入力して下さい<br>
        <input type="text" name="name" value="{{ $pro_name }}"><br>
        <br>
        価格を入力して下さい<br>
        <input type="text" name="price" value="{{ $pro_price }}"><br>
        <br>
        画像を選んで下さい<br>
        <input type="file" name="gazou"><br>
        <br>
        <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
        <input type="submit" name="submit" value="OK" class="btn btn-primary">
    </form>

@endsection

@include('admin.includes.footer')
