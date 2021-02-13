<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');

if(isset($_POST['code'])){
    $staff_code = $_POST['code'];
    $staff_code = h($staff_code);
}
if(isset($_POST['name'])){
    $staff_name = $_POST['name'];
    $staff_name = h($staff_name);
}
if(isset($_POST['pass'])){
    $staff_pass = $_POST['pass'];
    $staff_pass = h($staff_pass);
}

$sql = 'UPDATE mst_staff SET name=?, password=? WHERE code=?';
$stmt  = $dbh->prepare($sql);
$data[] = $staff_name;
$data[] = $staff_pass;
$data[] = $staff_code;
$stmt->execute($data);

//DB接続解除
$dbh = null;


