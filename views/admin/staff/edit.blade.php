@extends('layouts.admin_frame')

@section('title', 'スタッフ編集フォーム')

@section('content')
    {{ $staff_code }}<br>
    <form method='POST' action="staff_edit_check.php">
        <input type="hidden" name="code" value="{{ $staff_code }}">
        スタッフ名を入力して下さい<br>
        <input type="text" name="name" value="{{ $staff_name }}"><br>
        <br>
        パスワードを入力して下さい<br>
        <input type="password" name="pass" value=""><br>
        <br>
        パスワードをもう一度入力して下さい<br>
        <input type="password" name="pass2" value=""><br>
        <br>
        <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
        <input type="submit" name="submit" value="OK" class="btn btn-primary">
    </form>

@endsection
