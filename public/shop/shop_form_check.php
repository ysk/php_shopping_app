<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session_member.php');
require_once($_DIR . '../lib/common/functions.php');
require_once($_DIR . '../lib/shop/shop_form_check.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>お客様情報の入力確認</title>
</head>
<body>
<h1>お客様情報の入力確認</h1>
    <table border="1">
        <tr>
            <th>お名前</th>
            <td>
                <?php if(check_name($onamae)): ?>
                    <p><?php echo $onamae ?></p>
                <?php else: ?>
                    <p>お名前を入力して下さい</p>
                    <?php $ok_flg = false; ?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
        <th>メールアドレス</th>
            <td>
                <?php if(check_mail($email)): ?>
                    <p><?php echo $email ?></p>
                <?php else: ?>
                    <p>メールアドレスを入力して下さい</p>
                    <?php $ok_flg = false; ?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td>
                <?php if(check_zipcode($postal1, $postal2)): ?>
                    <p><?php echo $postal1; ?> - <?php echo $postal2; ?></p>
                <?php else: ?>
                    <p>郵便番号を入力して下さい</p>
                    <?php $ok_flg = false; ?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <th>住所</th>
            <td>
                <?php if(check_address($address)): ?>
                    <p><?php echo $address; ?></p>
                <?php else: ?>
                    <p>住所を入力して下さい</p>
                    <?php $ok_flg = false; ?>
                <?php endif;?>
            </td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>
                <?php if(check_tel($tel)): ?>
                    <p><?php echo $tel; ?></p>
                <?php else: ?>
                    <p>電話番号を入力して下さい</p>
                    <?php $ok_flg = false; ?>
                <?php endif;?>
            </td>
        </tr>
    </table>
    <form method='POST' action="shop_form_done.php">
    <input type="hidden" name="onamae" value="<?php echo $onamae ?>">
    <input type="hidden" name="email" value="<?php echo $email ?>">
    <input type="hidden" name="postal1" value="<?php echo $postal1 ?>">
    <input type="hidden" name="postal2" value="<?php echo $postal2 ?>">
    <input type="hidden" name="address" value="<?php echo $address ?>">
    <input type="hidden" name="tel" value="<?php echo $tel ?>">
    <br>
    <input type="button" onclick="history.back();" value="戻る">
    <?php if($ok_flg==true): ?>
        <input type="submit" value="OK">
    <?php else: ?>
        <input type="submit" value="OK" disabled>
    <?php endif;?>
    </form>
</body>
</html>