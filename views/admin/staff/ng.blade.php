<!DOCTYPE html>
<html lang="ja">
@extends('layouts.admin_frame')

@section('title', 'スタッフ選択エラー')

@include('admin.includes.header')

@section('content')
    <p>スタッフが選択されていません。</p>
    <a href="staff_list.php">戻る</a>
@endsection

@include('admin.includes.footer')
