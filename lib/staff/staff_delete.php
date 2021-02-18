<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php 

$staff_code = h($_GET['staffcode']);

$sql    = 'SELECT name FROM mst_staff WHERE code=?';
$stmt   = $dbh->prepare($sql);
$data[] = $staff_code;
$stmt->execute($data);
$rec = $stmt->fetch(PDO::FETCH_ASSOC);

$staff_name = $rec['name'];

$dbh = null;
?>
