<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php
$post = sanitize($_POST);

if(isset($_POST['name'])){
    $staff_name = $post['name'];
}

if(isset($_POST['pass'])){
    $staff_pass = $post['pass'];
}

if(isset($_POST['pass2'])){
    $staff_pass2 = $post['pass2'];
}

function check_staff_name($staff_name){
    if($staff_name == ''){
        return false;
    } else {
        return true;
    }
};

function check_staff_pass($staff_pass, $staff_pass2){
    if($staff_pass != $staff_pass2){
        return false;
    } else {
        return true;
    }
};

function check_input_all($staff_name, $staff_pass, $staff_pass2){
    if($staff_name=='' || $staff_pass=='' || $staff_pass!=$staff_pass2){
        return false;
    } else {
        return true;
    }
};


