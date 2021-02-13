<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
?>
@extends('layouts.admin_frame')

@section('title', '商品選択エラー')

@section('content')
    商品が選択されていません。<br>
    <a href="pro_list.php">戻る</a>
@endsection