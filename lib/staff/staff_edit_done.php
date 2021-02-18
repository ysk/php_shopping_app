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
if(isset($_POST['name'])){
    $staff_name = $post['name'];
}
if(isset($_POST['pass'])){
    $staff_pass = $post['pass'];
}

$sql   = 'UPDATE mst_staff SET name=?, password=? WHERE code=?';
$stmt  = $dbh->prepare($sql);
$data[] = $staff_name;
$data[] = $staff_pass;
$data[] = $staff_code;

$stmt->execute($data);

//DB接続解除
$dbh = null;


