<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
?>
<!DOCTYPE html>
<html lang="ja">
@extends('layouts.admin_frame')

@section('title', 'スタッフ選択エラー')

@section('content')
    <p>スタッフが選択されていません。</p>
    <a href="staff_list.php">戻る</a>
@endsection