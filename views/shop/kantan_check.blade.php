@extends('layouts.site_frame')

@section('title', 'お客様情報の入力 - 確認')

@section('content')
    <table border="1">
        <tr>
            <th>お名前</th>
            <td><p>{{ $onamae }}</p></td>
        </tr>
        <tr>
        <th>メールアドレス</th>
            <td><p>{{ $email }}</p></td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td><p>{{ $postal1 }} - {{ $postal2 }}</p></td>
        </tr>
        <tr>
            <th>住所</th>
            <td><p>{{ $address }}</p></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><p>{{ $tel }}</p></td>
        </tr>
    </table>

    <br>


    <form method='POST' action="shop_kantan_done.php">
    <input type="hidden" name="onamae" value="{{ $onamae }}">
    <input type="hidden" name="email" value="{{ $email }}">
    <input type="hidden" name="postal1" value="{{ $postal1 }}">
    <input type="hidden" name="postal2" value="{{ $postal2 }}">
    <input type="hidden" name="address" value="{{ $address }}">
    <input type="hidden" name="tel" value="{{ $tel }}">
    <input type="hidden" name="chumon" value="{{ $chumon }}">

    <br>
    <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" value="OK">
    </form>

@endsection