<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/common/DB.php');
?>

<?php
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

$sql = 'INSERT INTO mst_product (name, price, gazou) VALUE (?,?,?)';
$stmt  = $dbh->prepare($sql);
$data[] = $pro_name;
$data[] = $pro_price;
$data[] = $pro_gazou_name;

$stmt->execute($data);

$dbh = null;

echo $pro_name . 'を追加しました。';
