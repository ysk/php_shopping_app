<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php
$post = sanitize($_POST);

if(isset($_POST['email'])){
    $member_email = $post['email'];
}
if(isset($_POST['pass'])){
    $member_pass = $post['pass'];
}

$member_pass = md5($member_pass);

$sql = 'SELECT code,name FROM dat_member WHERE email=? AND password=?';
$stmt  = $dbh->prepare($sql);
$data[] = $member_email;
$data[] = $member_pass;

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
