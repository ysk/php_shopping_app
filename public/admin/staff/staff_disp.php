<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_disp.php');

$array = array(
    "staff_code" => $staff_code,
    "staff_name" => $staff_name,
); 

echo $blade->run("admin.staff.disp", $array);
?>
