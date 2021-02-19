@extends('layouts.admin_frame')

@section('title', '商品編集フォーム')

@section('content')

    @if(check_product_name($pro_name) == true)
        <p>商品名</p>
        <p>{{ $pro_name }}</p>
    @else
        <p>商品名が入力されていません。</p>
    @endif

    @if(check_product_price($pro_price) != true)
        <p>価格をきちんと入力して下さい。</p>
    @else
        <p>価格  {{ $pro_price }}円</p>
    @endif

    @if(check_product_gazou($pro_gazou) != true)
        <p>画像が大きすぎます。</p>
    @else
        @php 
        move_uploaded_file($pro_gazou['tmp_name'], '../../upload/'.$pro_gazou['name']);
        @endphp
        <img src="../../upload/{{ $pro_gazou['name'] }}" style="width: 250px;">
    @endif

    @if(check_product_all($pro_name, $pro_price, $pro_gazou) != true)
        <form>
        <p>商品名をちゃんと入力して下さい。</p>
        <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
        </form>
    @else
        <p>上記の商品を追加します。</p>
        <form method="post" action="pro_edit_done.php">
        <input type="hidden" name="name" value="{{ $pro_name }}">
        <input type="hidden" name="price" value="{{ $pro_price }}">
        <input type="hidden" name="code" value="{{ $pro_code }}">
        <input type="hidden" name="gazou_name_old" value="{{ $pro_gazou_name_old }}">
        <input type="hidden" name="gazou_name" value="{{ $pro_gazou['name'] }}">
        <br>
        <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
        <input type="submit" value="OK!" class="btn btn-primary">
        </form>
    @endif

@endsection
