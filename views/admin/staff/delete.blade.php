@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_delete.php');
@endphp

@extends('layouts.admin_frame')

@section('title', 'スタッフ削除フォーム')

@section('content')

    スタッフ名<br>
    {{ $staff_name }}<br>
    <br>
    このスタッフを削除してよろしいですか？<br>
    <br>
    <form method='POST' action="staff_delete_done.php">
        <input type="hidden" name="code" value="{{ $staff_code }}">
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" name="submit" value="OK">
    </form>

@endsection