<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php
if(isset($_SESSION['cart'])==true){
    $cart = $_SESSION['cart'];
    $kazu = $_SESSION['kazu'];
    $max = count($cart);
} else {
    $cart = array();
    $max = 0;
}

function check_cart($max){
    if($max==0){
        return false;
    }else{
        return true;
    }  
}

foreach($cart as $key=>$val){
    $sql  = 'SELECT code,name,price,gazou FROM mst_product WHERE code=?';
    $stmt = $dbh->prepare($sql);
    $data[0] = $val;
    $stmt->execute($data);
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    $pro_name[]  = $rec['name'];
    $pro_price[] = $rec['price'];

    if($rec['gazou'] == false){
        $pro_gazou[] = '';
    } else {
        $pro_gazou[] = '<img src="../../upload/' . $rec['gazou'] . '" style="width:250px"><br>';
    }
}

$dbh = null;
?>
