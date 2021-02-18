<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php

$post = sanitize($_POST);

if(isset($_POST['code'])){
    $staff_code = $post['code'];
}

$sql   = 'DELETE FROM mst_staff WHERE code=?';
$stmt  = $dbh->prepare($sql);
$data[] = $staff_code;
$stmt->execute($data);

$dbh = null;
?>


