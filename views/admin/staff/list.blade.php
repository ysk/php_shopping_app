@extends('layouts.admin_frame')

@section('title', 'スタッフ一覧')

    @section('content')
    <form method="post" action="staff_branch.php">

    @foreach($result as $key=>$value)
    <label>
        <input type="radio" name="staffcode" value="{{ $value['code'] }}">
        {{ $value['name'] }}<br>
    @endforeach

    <input type="submit" name="disp" value="参照">
    <input type="submit" name="add" value="追加">
    <input type="submit" name="edit" value="修正">
    <input type="submit" name="delete" value="削除">
    </form>
    <br><br>
    <a href="../staff_login/staff_top.php">TOPメニューへ</a>

@endsection
