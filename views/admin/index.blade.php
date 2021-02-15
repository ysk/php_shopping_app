@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/basic_auth.php');
@endphp

@extends('layouts.admin_frame')

@section('title', 'スタッフログイン')

@section('content')

    <form method='POST' action="./staff_login/staff_login_check.php">
        スタッフコード<br>
        <input type="text" name="code"><br>
        パスワード<br>
        <input type="password" name="pass"><br>
        <br>
        <input type="submit" value="ログイン">
    </form>

@endsection
