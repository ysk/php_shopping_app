@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/product/pro_delete_done.php');
@endphp

@extends('layouts.admin_frame')

@section('title', 'スタッフ削除')

@section('content')
削除しました<br>
<a href="pro_list.php">戻る</a>
@endsection