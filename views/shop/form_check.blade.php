@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_form_check.php');
@endphp

@extends('layouts.site_frame')

@section('title', 'お客様情報の入力 - 確認')

@section('content')
    <table border="1">
        <tr>
            <th>お名前</th>
            <td>
                @if(check_name($onamae))
                    <p>{{ $onamae }}</p>
                @else
                    <p>お名前を入力して下さい</p>
                    @php $ok_flg = false; @endphp
                @endif
            </td>
        </tr>
        <tr>
        <th>メールアドレス</th>
            <td>
                @if(check_mail($email))
                    <p>{{ $email }}</p>
                @else
                    <p>メールアドレスを入力して下さい</p>
                    @php $ok_flg = false; @endphp
                @endif
            </td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td>
                @if(check_zipcode($postal1, $postal2))
                    <p>{{ $postal1 }} - {{ $postal2 }}</p>
                @else
                    <p>郵便番号を入力して下さい</p>
                    @php $ok_flg = false; @endphp
                @endif
            </td>
        </tr>
        <tr>
            <th>住所</th>
            <td>
                @if(check_address($address))
                    <p>{{ $address }}</p>
                @else
                    <p>住所を入力して下さい</p>
                    @php $ok_flg = false; @endphp
                @endif
            </td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>
                @if(check_tel($tel))
                    <p>{{ $tel }}</p>
                @else
                    <p>電話番号を入力して下さい</p>
                    @php $ok_flg = false; @endphp
                @endif
            </td>
        </tr>
    </table>
    <form method='POST' action="shop_form_done.php">
    <input type="hidden" name="onamae" value="{{ $onamae }}">
    <input type="hidden" name="email" value="{{ $email }}">
    <input type="hidden" name="postal1" value="{{ $postal1 }}">
    <input type="hidden" name="postal2" value="{{ $postal2 }}">
    <input type="hidden" name="address" value="{{ $address }}">
    <input type="hidden" name="tel" value="{{ $tel }}">
    <br>
    <input type="button" onclick="history.back();" value="戻る">
    @if($ok_flg==true)
        <input type="submit" value="OK">
    @else
        <input type="submit" value="OK" disabled>
    @endif
    </form>

@endsection