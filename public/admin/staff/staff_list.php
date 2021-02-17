<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_list.php');

$result =$stmt->fetchAll();

$array = array(
    "result"=>$result,
);

echo $blade->run("admin.staff.list", $array);
?>

