@extends('layouts.site_frame')

@section('title', '会員ログイン')

@section('content')

    <form method='POST' action="./shop/member_login_check.php">
        登録メールアドレス<br>
        <input type="text" name="email"><br>
        パスワード<br>
        <input type="password" name="pass"><br>
        <br>
        <input type="submit" value="ログイン">
    </form>

@endsection
