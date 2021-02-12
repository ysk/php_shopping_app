<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session_member.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/common/DB.php');
?>

<?php
$post    = sanitize($_POST);

$onamae  = $post['onamae'];
$email   = $post['email'];
$postal1 = $post['postal1'];
$postal2 = $post['postal2'];
$address = $post['address'];
$tel     = $post['tel'];

$cart  = $_SESSION['cart'];
$kazu  = $_SESSION['kazu'];
$max   = count($cart);

$mail_text = "";
$mail_text .= $onamae."様\nこの度はご注文ありがとうございました。\n";
$mail_text .= "\n";
$mail_text .= "■ご注文商品\n";
$mail_text .= "------------------------------\n";

for($i=0; $i<$max; $i++){
    $sql   = 'SELECT * FROM mst_product WHERE code=?';
    $stmt  = $dbh->prepare($sql);
    $data[0]= $cart[$i];
    $stmt->execute($data);
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    $name = $rec['name'];
    $price = $rec['price'];
    $kakaku[] = $price;
    $suryo = $kazu[$i];
    $shokei = $price*$suryo;

    $mail_text .= $name." ";
    $mail_text .= $price."円 × ";
    $mail_text .= $suryo."個 = ";
    $mail_text .= $shokei."円\n";

}


$mail_text .= "送料は無料です\n";
$mail_text .= "------------------------------\n";
$mail_text .= "\n";
$mail_text .= "代金は以下の口座にお振込み下さい\n";
$mail_text .= "確認が取れ次第発送いたします。\n";
$mail_text .= "\n";
$mail_text .= "■振り込み先\n";
$mail_text .= "------------------------------\n";
$mail_text .= "三井住友銀行荻窪支店\n";
$mail_text .= "口座番号41111111(普)\n";
$mail_text .= "------------------------------\n";
$mail_text .= "\n";
$mail_text .= "〇〇のお店 ほげほげ\n";
$mail_text .= "品川区五反田1-2-3 ○○ビル4F\n";
$mail_text .= "mail yusuke@sample.com\n";
$mail_text .= "tel 090-5555-8888\n";


$title = 'ご注文ありがとうございます';
$header = 'From:info@yahoo.co.jp';
$mail_text = html_entity_decode($mail_text, ENT_QUOTES, 'UTF-8');
mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail($email, $title, $mail_text, $header);


$title = 'お客様からご注文がありました。';
$header = 'From:'.$email;
$mail_text = html_entity_decode($mail_text, ENT_QUOTES, 'UTF-8');
mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail('yusuke_aono_@yahoo.co.jp', $title, $mail_text, $header);

$sql = 'LOCK TABLES dat_sales WRITE, dat_sales_product WRITE';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$sql = 'INSERT INTO dat_sales (code_member, name, email, postal1, postal2, address, tel) VALUE (?, ?, ?, ?, ?, ?, ?)';
$stmt  = $dbh->prepare($sql);
$data = array();
$data[] = 0;
$data[] = $onamae;
$data[] = $email;
$data[] = $postal1;
$data[] = $postal2;
$data[] = $address;
$data[] = $tel;
$stmt->execute($data);


$sql = 'SELECT LAST_INSERT_ID()';
$stmt  = $dbh->prepare($sql);
$stmt->execute();
$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$lastcode = $rec['LAST_INSERT_ID()'];

for($i=0; $i<$max; $i++){
    $sql = 'INSERT INTO dat_sales_product (code_sales, code_product, price, quantity) VALUE (?,?,?,?)';
    $stmt  = $dbh->prepare($sql);
    $data = array();
    $data[] = $lastcode;
    $data[] = $cart[$i];
    $data[] = $kakaku[$i];
    $data[] = $kazu[$i];
    $stmt->execute($data);
}

$sql = 'UNLOCK TABLES';
$stmt = $dbh->prepare($sql);
$stmt->execute();

//SELECT * FROM dat_sales, dat_sales_product WHERE dat_sales.code=dat_sales_product.code_sales
$dbh = null;
?>
