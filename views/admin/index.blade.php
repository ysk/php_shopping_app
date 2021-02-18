@extends('layouts.admin_frame')

@section('title', 'スタッフログイン')

@section('content')


<div class="container">
    <form method='POST' action="./staff_login/staff_login_check.php">
        <div class="mb-3">
            <label class="form-label">スタッフコード</label>
            <input type="text" name="code" class="form-control">
            <div class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">パスワード</label>
            <input type="password" name="pass" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="ログイン" class="btn btn-primary">
        </div>
    </form>
</div>


@endsection
