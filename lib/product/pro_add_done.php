<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>

<?php
$post = sanitize($_POST);

if(isset($_POST['name'])){
    $pro_name = $post['name'];
}
if(isset($_POST['price'])){
    $pro_price = $post['price'];
}
if(isset($_POST['gazou_name'])){
    $pro_gazou_name = $post['gazou_name'];
}

$sql = 'INSERT INTO mst_product (name, price, gazou) VALUE (?,?,?)';
$stmt  = $dbh->prepare($sql);
$data[] = $pro_name;
$data[] = $pro_price;
$data[] = $pro_gazou_name;

$stmt->execute($data);

$dbh = null;

echo $pro_name . 'を追加しました。';
