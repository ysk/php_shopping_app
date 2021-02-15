@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_add.php');
@endphp

@extends('layouts.admin_frame')

@section('title', 'スタッフ登録フォーム')

@section('content')

    <form method='POST' action="staff_add_check.php">
        スタッフ名を入力して下さい<br>
        <input type="text" name="name" value=""><br>
        <br>
        パスワードを入力して下さい<br>
        <input type="password" name="pass" value=""><br>
        <br>
        パスワードをもう一度入力して下さい<br>
        <input type="password" name="pass2" value=""><br>
        <br>
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" name="submit" value="OK">
    </form>

@endsection