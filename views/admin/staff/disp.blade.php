@extends('layouts.admin_frame')

@section('title', 'スタッフ情報参照')

@include('admin.includes.header')

@section('content')
    <p>スタッフコード</p>
    {{ $staff_code }}<br>
    <br>
    <p>スタッフ名</p>
    {{ $staff_name }}<br>
    <br>
    <form>
    <input type="button" onclick="history.back();" value="戻る" class="btn btn-secondary">
    </form>

@endsection

@include('admin.includes.footer')
