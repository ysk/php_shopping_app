<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php
$pro_code = $_GET['procode'];

$sql   = 'SELECT * FROM mst_product WHERE code=?';
$stmt  = $dbh->prepare($sql);
$data[]= $pro_code;
$stmt->execute($data);
$rec = $stmt->fetch(PDO::FETCH_ASSOC);

$pro_name  = $rec['name'];
$pro_price = $rec['price'];
$pro_gazou_name = $rec['gazou'];

$dbh = null;

function check_product_gazou_name($pro_gazou_name){
    if ($pro_gazou_name == ''){
        return false;
    } else {
        return true;
    }
};
?>
