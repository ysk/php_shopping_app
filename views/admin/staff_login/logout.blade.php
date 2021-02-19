@php
session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()]) == true){
    setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
@endphp
<html>
@extends('layouts.admin_frame')

@section('title', 'ログアウト')

    @section('content')
    ログアウトしました。<br>
    <br>
    <a href="../" class="btn btn-primary">ログイン画面へ</a>

@endsection

