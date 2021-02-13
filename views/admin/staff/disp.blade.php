
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_disp.php');
?>
@extends('layouts.admin_frame')

@section('title', 'スタッフ情報参照')

@section('content')
<p>スタッフコード</p>
<?php echo $staff_code; ?><br>
<br>
<p>スタッフ名</p>
<?php echo $staff_name; ?><br>
<br>
<form>
<input type="button" onclick="history.back();" value="戻る">
</form>
@endsection