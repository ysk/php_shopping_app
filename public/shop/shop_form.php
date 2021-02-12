<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/setting.php');
require_once($_DIR . '../lib/common/session_member.php');
require_once($_DIR . '../lib/common/functions.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お客様情報の入力</title>
</head>
<body>
    <h1>お客様情報を入力して下さい</h1>
    <br>
    <form method='POST' action="shop_form_check.php">
        <table border="1">
            <tr>
                <th>お名前</th>
                <td><input type="text" name="onamae" style="width: 150px;" value="<?php //echo $_SESSION['onamae']; ?>"></td>
            </tr>
            <tr>
            <th>メールアドレス</th>
                <td><input type="text" name="email" style="width: 150px;" value="<?php //echo $_SESSION['email']; ?>"></td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td><input type="text" name="postal1" style="width: 50px;" value="<?php //echo $_SESSION['postal1']; ?>">
                    - <input type="text" name="postal2" style="width: 50px;" value="<?php //echo $_SESSION['postal2']; ?>">
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td><input type="text" name="address" style="width: 500px;" value="<?php //echo $_SESSION['address']; ?>"></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="text" name="tel" style="width: 150px;" value="<?php //echo $_SESSION['tel']; ?>"></td>
            </tr>
        </table>
        <br>
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" value="OK">
    </form>
</body>
</html>