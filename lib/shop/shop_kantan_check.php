<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php

$code=$_SESSION['member_code'];

$sql   = 'SELECT name,email,postal1,postal2,address,tel FROM dat_member WHERE code=?';

$stmt  = $dbh->prepare($sql);
$data[]= $code;
$stmt->execute($data);
$rec = $stmt->fetch(PDO::FETCH_ASSOC);

$onamae  = $rec['name'];
$email   = $rec['email'];
$postal1 = $rec['postal1'];
$postal2 = $rec['postal2'];
$address = $rec['address'];
$tel     = $rec['tel'];


$dbh = null;



?>
