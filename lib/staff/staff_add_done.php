<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php

if(isset($_POST['name'])){
    $staff_name = $_POST['name'];
    $staff_name = h($staff_name);
}
if(isset($_POST['pass'])){
    $staff_pass = $_POST['pass'];
    $staff_pass = h($staff_pass);
}

$sql = 'INSERT INTO mst_staff (name, password) VALUE (?,?)';
$stmt  = $dbh->prepare($sql);
$data[] = $staff_name;
$data[] = $staff_pass;
$stmt->execute($data);

$dbh = null;

echo $staff_name . 'さんを追加しました。';
