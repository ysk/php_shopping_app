<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/common/DB.php');
?>

<?php
$post = sanitize($_POST);

if(isset($_POST['year'])){
    $year = $post['year'];
}
if(isset($_POST['month'])){
    $month = $post['month'];
}
if(isset($_POST['day'])){
    $day = $post['day'];
}

$sql='
SELECT
    dat_sales.code,
    dat_sales.date,
    dat_sales.code_member,
    dat_sales.name AS dat_sales_name,
    dat_sales.email,
    dat_sales.postal1,
    dat_sales.postal2,
    dat_sales.address,
    dat_sales.tel,
    dat_sales_product.code_product,
    mst_product.name AS mst_product_name,
    dat_sales_product.price,
    dat_sales_product.quantity    
FROM
    dat_sales, dat_sales_product, mst_product
WHERE 
    dat_sales.code=dat_sales_product.code_sales
AND dat_sales_product.code=mst_product.code
AND substr(dat_sales.date,1,4)=?
AND substr(dat_sales.date,6,2)=?
AND substr(dat_sales.date,9,2)=?
';
$stmt = $dbh->prepare($sql);
$data[] = $year;
$data[] = $month;
$data[] = $day;
$stmt->execute($data);

$dbh = null;

$csv = '注文コード,注文日時,会員番号,お名前,メール,郵便番号,住所,TEL,商品コード,商品名,価格,数量';
$csv .="\n";
while(true){
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec == false){
        break;
    }
    $csv .= $rec['code'];
    $csv .= ',';
    $csv .= $rec['date'];
    $csv .= ',';
    $csv .= $rec['code_member'];
    $csv .= ',';
    $csv .= $rec['dat_sales_name'];
    $csv .= ',';
    $csv .= $rec['email'];
    $csv .= ',';
    $csv .= $rec['postal1'];
    $csv .= ',';
    $csv .= $rec['postal2'];
    $csv .= ',';
    $csv .= $rec['address'];
    $csv .= ',';
    $csv .= $rec['tel'];
    $csv .= ',';
    $csv .= $rec['code_product'];
    $csv .= ',';
    $csv .= $rec['mst_product_name'];
    $csv .= ',';
    $csv .= $rec['price'];
    $csv .= ',';
    $csv .= $rec['quantity'];
    $csv .= "\n";
}

//echo nl2br($csv);

$file = fopen('./chumon.csv', 'w');
$csv  = mb_convert_encoding($csv, 'SJIS', 'UTF-8');
fputs($file, $csv);
fclose($file);


?>