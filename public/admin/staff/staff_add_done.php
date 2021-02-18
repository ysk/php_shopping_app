<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_add_done.php');

$array = array(
    'staff_name' => $staff_name,
); //変数定義

echo $blade->run("admin.staff.add_done", $array);
?>
