<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_delete.php');

$array = array(
    "staff_name"=>$staff_name,
); //変数定義

echo $blade->run("admin.staff.delete", $array);

?>
