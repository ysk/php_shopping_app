<?php
require($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require($_DIR . '../lib/blade/BladeOne.php');
use eftec\bladeone\BladeOne;
$views = $_DIR  . '../views';
$cache = $_DIR  . '../cache';

$blade = new eftec\bladeone\BladeOne($views,$cache,BladeOne::MODE_AUTO);
echo $blade->run("index",array("variable1"=>"value1")); // /views/hello.blade.php must exist

?>
