@php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_form_done.php');
@endphp

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>注文完了</title>
</head>
<body>
<h1>注文完了</h1>
{{ $onamae }}様<br>
<br>
ご注文ありがとうございました。<br>
{{ $email }}にメールを送りましたのでご確認ください。<br>
<br>

@if($chumon=='chumontouroku')
会員登録が完了いたしました。<br>
次回からメールアドレスとパスワードでログインして下さい。<br>
ご注文が簡単にできるようになります<br>
@endif

<br>
商品は以下の住所に発送させていただきます。<br>
〒{{ $postal1 }}-{{ $postal2 }}<br>
{{ $address }}<br>
<br>
ご連絡先<br>
{{ $tel }}
<br>
<br>



<a href="shop_list.php">商品画面へ戻る</a>

</body>
</html>