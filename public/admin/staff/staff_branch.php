<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
?>
<?php

session_start();
session_regenerate_id(true);

$post = sanitize($_POST);

if(isset($_SESSION['login'])==false){
     exit();
}

if(isset($post['disp']) == true){
    if(isset($post['staffcode']) == false){
        header('Location:staff_ng.php');
        exit();
    }
    $staff_code = $post['staffcode'];
    header('Location:staff_disp.php?staffcode=' . $staff_code);
    exit();
}

if(isset($post['add'])== true) {
    header('Location:staff_add.php');
    exit();
}

if(isset($post['edit'])== true) {
    if(isset($post['staffcode'])==false){
        header('Location:staff_ng.php');
        exit();
    }
    $staff_code = $post['staffcode'];
    header('Location:staff_edit.php?staffcode=' . $staff_code);
    exit();
}

if(isset($post['delete']) == true) {
    if(isset($post['staffcode'])==false){
        header('Location:staff_ng.php');
        exit();
    }
    $staff_code = $post['staffcode'];
    header('Location:staff_delete.php?staffcode=' . $staff_code);
    exit();
}

