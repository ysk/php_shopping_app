<?php
require($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');

$array = array();

echo $blade->run("admin.staff_login.login_check", $array);

?>