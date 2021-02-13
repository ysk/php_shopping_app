<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
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
if(isset($_POST['gazou_name'])){
    $pro_gazou_name = $_POST['gazou_name'];
    $pro_gazou_name = h($pro_gazou_name);
}
if(isset($_POST['gazou_name_old'])){
    $pro_gazou_name_old = $_POST['gazou_name_old'];
    $pro_gazou_name_old = h($pro_gazou_name_old);
}

$sql = 'UPDATE mst_product SET name=?, price=?, gazou=? WHERE code=?';
$stmt  = $dbh->prepare($sql);
$data[] = $pro_name;
$data[] = $pro_price;
$data[] = $pro_gazou_name;
$data[] = $pro_code;

$stmt->execute($data);

//DB接続解除
$dbh = null;


//古い画像があった場合削除する

if($pro_gazou_name_old != $pro_gazou_name){
    if($pro_gazou_name_old != ''){
        unlink('../../upload/'.$pro_gazou_name_old);
    }
}


