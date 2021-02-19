@extends('layouts.admin_frame')

@section('title', 'スタッフ編集フォーム')

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
        入力エラーがあります。<br>
        <input type="button" onclick="history.back();" value="戻る">
        </form>
    @else
        <form method="post" action="staff_edit_done.php">
        <input type="hidden" name="name" readonly value="{{ $staff_name }}"><br>
        <input type="hidden" name="pass" value="{{ $staff_pass_md5 }}"><br>
        <input type="hidden" name='code' value="{{ $staff_code }}">
        <br>
        <input type="button" onclick="history.back();" value="戻る" class="btn btn-primary">
        <input type="submit" value="OK!" class="btn btn-primary">
        </form>
    @endif
@endsection
