@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_edit_done.php');
@endphp

@extends('layouts.admin_frame')

@section('title', 'スタッフ編集フォーム')

@section('content')
<p>修正しました</p>
<br>
<a href="staff_list.php">戻る</a><br>
@endsection