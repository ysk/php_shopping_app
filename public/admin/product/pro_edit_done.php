<?php
require($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOne.php');
require($_SERVER['DOCUMENT_ROOT'] . '../lib/blade/BladeOneCommon.php');

$array = array("variable1"=>"value1"); //変数定義
echo $blade->run("admin.product.edit_done", $array);
?>