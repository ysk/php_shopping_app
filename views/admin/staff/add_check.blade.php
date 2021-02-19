@extends('layouts.admin_frame')

@section('title', 'スタッフ登録フォーム')

@include('admin.includes.header')

@section('content')

    @if(check_staff_name($staff_name) == true)
        <p>スタッフ名</p>
        <p>{{ $staff_name }}</p>
    @else
        <p>スタッフ名が入力されていません。</p>
    @endif

    @if(check_staff_pass($staff_pass, $staff_pass2) != true)
        <p>パスワードが一致しません</p>
    @endif

    @if(check_input_all($staff_name, $staff_pass, $staff_pass2) != true)
        <form>
        <input type="button" onclick="history:back()" value="戻る" class="btn btn-primary">
        </form>
    @else
        <form method="post" action="staff_add_done.php">
        <input type="hidden" name="pass" value="{{ $staff_pass_md5 }}">
        <input type="hidden" name="name" value="{{ $staff_name }}">
        <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
        <input type="submit" value="OK!" class="btn btn-primary">
        </form>
    @endif

@endsection

@include('admin.includes.footer')
