<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/common/DB.php');
?>

<?php
$sql = 'SELECT * FROM mst_product WHERE 1';
$stmt  = $dbh->prepare($sql);
$stmt->execute();
$dbh = null;
