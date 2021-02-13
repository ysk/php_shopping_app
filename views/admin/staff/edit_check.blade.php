<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_edit_check.php');
?>
@extends('layouts.admin_frame')

@section('title', 'スタッフ編集フォーム')

@section('content')
<?php if(check_staff_name($staff_name) == true): ?>
    <p>スタッフ名</p>
    <p><?php echo $staff_name; ?></p>
<?php else: ?>
    <p>スタッフ名が入力されていません。</p>
<?php endif; ?>

<?php if(check_staff_pass($staff_pass, $staff_pass2) != true): ?>
    <p>パスワードが一致しません</p>
<?php endif; ?>

<?php if(check_input_all($staff_name, $staff_pass, $staff_pass2) != true): ?>
    <form>
    入力エラーがあります。<br>
    <input type="button" onclick="history.back();" value="戻る">
    </form>
<?php else: ?>
    <?php $staff_pass=md5($staff_pass); ?>
    <form method="post" action="staff_edit_done.php">
    <input type="hidden" name="name" readonly value="<?php echo $staff_name; ?>"><br>
    <input type="hidden" name="pass" value="<?php echo $staff_pass; ?>"><br>
    <input type="hidden" name='code' value="<?php echo $staff_code; ?>">
    <br>
    <input type="button" onclick="history.back();" value="戻る">
    <input type="submit" value="OK!">
    </form>
<?php endif; ?>
@endsection