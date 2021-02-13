<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>

<?php
if(isset($_POST['code'])){
    $staff_code = $_POST['code'];
    $staff_code = h($staff_code);
}

$sql = 'DELETE FROM mst_staff WHERE code=?';
$stmt  = $dbh->prepare($sql);
$data[] = $staff_code;
$stmt->execute($data);

$dbh = null;
?>


