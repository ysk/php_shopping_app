@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_list.php');
@endphp

@extends('layouts.site_frame')

@section('title', '商品一覧ページ')

@section('content')

    @php 
        $result = $stmt->fetchAll(); 
    @endphp

    <table border="1">
    <tr>
        <th>商品</th>
        <th>画像</th>
        <th>価格</th>
    </tr>

    @foreach($result as $key=>$value)
        <tr>
            <td>
                <a href="shop_product.php?procode={{$value['code']}}">
                <img src="../../upload/{{$value['gazou']}}" style="width:250px"></a>
            </td>
            <td>
                <a href="shop_product.php?procode={{$value['code']}}">{{$value['name']}}</a>
            </td>
            <td>
                {{number_format($value['price'])}}円</a>
            </td>
        </tr>
    @endforeach
    </table>
    <br>
    <a href="shop_cartlook.php">カートを見る</a><br><br>

@endsection

