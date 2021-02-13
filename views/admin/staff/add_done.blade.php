<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_add_done.php');
?>
@extends('layouts.admin_frame')

@section('title', 'スタッフ登録フォーム')

@section('content')
登録しました。<br>
<a href="staff_list.php">戻る</a>

@endsection