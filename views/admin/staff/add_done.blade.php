@extends('layouts.admin_frame')

@section('title', 'スタッフ登録フォーム')

@include('admin.includes.header')

@section('content')
{{$staff_name}}さんを登録しました。<br>
<a href="staff_list.php">戻る</a>

@endsection

@include('admin.includes.footer')
