<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php
$post = sanitize($_POST);

if(isset($_POST['onamae'])){
    $onamae = $post['onamae'];
}
if(isset($_POST['email'])){
    $email = $post['email'];
}
if(isset($_POST['postal1'])){
    $postal1 = $post['postal1'];
}
if(isset($_POST['postal2'])){
    $postal2 = $post['postal2'];
}
if(isset($_POST['address'])){
    $address = $post['address'];
}
if(isset($_POST['tel'])){
    $tel = $post['tel'];
}
if(isset($_POST['chumon'])){
    $chumon = $post['chumon'];
}
if(isset($_POST['pass'])){
    $pass = $post['pass'];
}
if(isset($_POST['pass2'])){
    $pass2 = $post['pass2'];
}
if(isset($_POST['danjo'])){
    $danjo = $post['danjo'];
}
if(isset($_POST['birth'])){
    $birth = $post['birth'];
}

$dbh = null;

$ok_flg = true;

function check_name($onamae){
    if($onamae == ""){
        return false;
    } else {
        return true;
    }
}

function check_mail($email){
    if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $email)==0){
        $error_flg = false;
        return false;
    } else {
        return true;
    }   
}

function check_zipcode($postal1, $postal2){
    if(preg_match('/^[0-9]+$/', $postal1)==0 || preg_match('/^[0-9]+$/', $postal2)==0){
        return false;
    } else {
        return true;
    }   
}

function check_address($address){
    if($address == ""){
        return false;
    } else {
        return true;
    }
}

function check_tel($tel){
    if(preg_match('/^(0{1}\d{1,4}-{0,1}\d{1,4}-{0,1}\d{4})$/', $tel)==0){
        return false;
    } else {
        return true;
    }   
}

function check_member_pass($chumon, $pass, $pass2){
    if($chumon=='chumontouroku'){
        if($pass != $pass2 || $pass=='' || $pass2 == ''){
            return false;
        } else {
            return true;
        }
    }
}

function check_gender($danjo){
    if($danjo == 'dan'){
        return 'mail';
    } else {
        return 'femail';
    }
}









?>
