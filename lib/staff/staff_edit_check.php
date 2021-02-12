<?php 

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

if(isset($_POST['pass2'])){
    $staff_pass2 = $_POST['pass2'];
    $staff_pass2 = h($staff_pass2);
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


