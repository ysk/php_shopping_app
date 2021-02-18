<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_edit_check.php');

$staff_pass_md5=md5($staff_pass);

$array = array(
    "staff_code" => $staff_code,
    "staff_name" => $staff_name,
    "staff_pass" => $staff_pass,
    "staff_pass2"=> $staff_pass2,
    "staff_pass_md5"=> $staff_pass_md5,
);

echo $blade->run("admin.staff.edit_check", $array);
?>
