@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff_login/staff_login_check.php');
@endphp

@if(check_login($rec) != false)

@php 
    session_start();
    $_SESSION['login'] = 1;
    $_SESSION['staff_code'] = $staff_code;
    $_SESSION['staff_name'] = $rec['name'];
    header('Location: staff_top.php');
    exit();
@endphp

@else

    @extends('layouts.admin_frame')

    @include('admin.includes.header')

    @section('content')
        <p>スタッフコードかパスワードが間違っています</p>
        <a href="../index.php">戻る</a>
    @endsection

    @include('admin.includes.footer')

@endif
