<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/common/DB.php');
?>

<?php
$pro_code = $_GET['procode'];

$sql   = 'SELECT * FROM mst_product WHERE code=?';
$stmt  = $dbh->prepare($sql);
$data[]= $pro_code;
$stmt->execute($data);
$rec = $stmt->fetch(PDO::FETCH_ASSOC);

$pro_name=$rec['name'];
$pro_price=$rec['price'];
$pro_gazou_name_old=$rec['gazou'];

function check_product_gazou_old_name($pro_gazou_name_old){
    if ($pro_gazou_name_old == ''){
        return false;
    } else {
        return true;
    }
};


$dbh = null;
?>
