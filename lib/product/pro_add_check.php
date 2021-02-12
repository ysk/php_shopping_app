<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/common/DB.php');
?>

<?php
if(isset($_POST['code'])){
    $pro_code = $_POST['code'];
    $pro_code = h($pro_code);
}

if(isset($_POST['name'])){
    $pro_name = $_POST['name'];
    $pro_name = h($pro_name);
}

if(isset($_POST['price'])){
    $pro_price = $_POST['price'];
    $pro_price = h($pro_price);
}

if(isset($_FILES['gazou'])){
    $pro_gazou = $_FILES['gazou'];
}


function check_product_name($pro_name){
    if($pro_name == ''){
        return false;
    } else {
        return true;
    }
};


function check_product_price($pro_price){
    if (preg_match('/^[0-9]+$/',$pro_price)==0) {
        return false;
    } else {
        return true;
    }
};


function check_product_all($pro_name, $pro_price, $pro_gazou){
    if ($pro_name == '' || preg_match('/^[0-9]+$/',$pro_price)==0 || $pro_gazou['size'] > 1000000) {
        return false;
    } else {
        return true;
    }
};


function check_product_gazou($pro_gazou){
    if ($pro_gazou['size'] > 0){
        if($pro_gazou['size'] > 1000000){
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
};