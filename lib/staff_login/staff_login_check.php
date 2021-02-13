<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');

if(isset($_POST['code'])){
    $staff_code = $_POST['code'];
    $staff_code = h($staff_code);
}
if(isset($_POST['pass'])){
    $staff_pass = $_POST['pass'];
    $staff_pass = h($staff_pass);
}

$staff_pass = md5($staff_pass);

$sql = 'SELECT name FROM mst_staff WHERE code=? AND password=?';
$stmt  = $dbh->prepare($sql);
$data[] = $staff_code;
$data[] = $staff_pass;

$stmt->execute($data);

$dbh = null;

$rec = $stmt->fetch(PDO::FETCH_ASSOC);

function check_login($rec){
    if($rec == false){
        return false;
    }else{
        return true;
    }
}
