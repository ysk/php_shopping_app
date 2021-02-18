<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_add_done.php');

$array = array(
    'staff_name' => $staff_name,
);

echo $blade->run("admin.staff.add_done", $array);
?>
