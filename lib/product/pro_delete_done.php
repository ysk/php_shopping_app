<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/DB.php');
?>
<?php

$post = sanitize($_POST);

if(isset($_POST['code'])){
    $pro_code = $post['code'];
}

if(isset($_POST['gazou_name'])){
    $pro_gazou_name = $post['gazou_name'];
}

$sql  = 'DELETE FROM mst_product WHERE code=?';
$stmt = $dbh->prepare($sql);
$data[] = $pro_code;
$stmt->execute($data);

$dbh = null;

//古い画像があった場合削除する

if($pro_gazou_name != ''){
    unlink('../../upload/'.$pro_gazou_name);
}





