@extends('layouts.admin_frame')

@section('title', '商品一覧')

@section('content')

    <form method="post" action="pro_branch.php">
        @foreach($result as $key=>$value)
        <div class="mb-1">
            <label>
                <input type="radio" class="form-check-input" name="procode" value="{{ $value['code'] }}">
                {{ $value['name'] }} --- {{ $value['price'] }}円
            </label>
        </div>
        @endforeach
        <input type="submit" name="disp" value="参照" class="btn btn-primary">
        <input type="submit" name="add" value="追加" class="btn btn-primary">
        <input type="submit" name="edit" value="修正" class="btn btn-primary">
        <input type="submit" name="delete" value="削除" class="btn btn-primary">
    </form>
    <br><br>
    <a href="../staff_login/staff_top.php" class="btn btn-primary">TOPメニューへ</a>

@endsection


