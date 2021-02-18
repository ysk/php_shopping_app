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
    if(isset($post['procode']) == false){
        header('Location:pro_ng.php');
        exit();
    }
    $pro_code = $post['procode'];
    header('Location:pro_disp.php?procode=' . $pro_code);
    exit();
}

if(isset($post['add'])== true) {
    header('Location:pro_add.php');
    exit();
}

if(isset($post['edit'])== true) {
    if(isset($post['procode'])==false){
        header('Location:pro_ng.php');
        exit();
    }
    $pro_code = $post['procode'];
    header('Location:pro_edit.php?procode=' . $pro_code);
    exit();
}

if(isset($post['delete']) == true) {
    if(isset($post['procode'])==false){
        header('Location:pro_ng.php');
        exit();
    }
    $pro_code = $post['procode'];
    header('Location:pro_delete.php?procode=' . $pro_code);
    exit();
}

