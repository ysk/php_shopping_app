<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_delete_done.php');
?>

@extends('layouts.admin_frame')

@section('title', 'スタッフ削除フォーム')

@section('content')
<p>削除しました</p>
<br>
<a href="staff_list.php">戻る</a><br>
<br>
@endsection