@extends('layouts.admin_frame')

@section('title', 'スタッフ一覧')

@include('admin.includes.header')

@section('content')
    <form method="post" action="staff_branch.php">
    @foreach($result as $key=>$value)
        <div class="mb-1">
            <label>
                <input type="radio" class="form-check-input" name="staffcode" value="{{ $value['code'] }}">
                {{ $value['name'] }}
            </label>
        </div>
    @endforeach
    <div class="mb-3">
        <input type="submit" name="disp" value="参照" class="btn btn-primary">
        <input type="submit" name="add" value="追加" class="btn btn-primary">
        <input type="submit" name="edit" value="修正" class="btn btn-primary">
        <input type="submit" name="delete" value="削除" class="btn btn-primary">
    </div>
    </form>
    <br><br>
    <a href="../staff_login/staff_top.php">TOPメニューへ</a>
@endsection

@include('admin.includes.footer')
