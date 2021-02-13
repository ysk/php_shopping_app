<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/order/order_download.php');
?>
@extends('layouts.admin_frame')

@section('title', 'CSV注文ダウンロード')

@section('content')
<p>ダウンロードしたい注文日を選択して下さい。</p>
<form method="post" action="order_download_done.php">
<?php select_year(); ?>
年
<?php select_month(); ?>
月
<?php select_day(); ?>
日<br>
<br>
<input type="submit" value="CSVをダウンロードする">
</form>
@endsection