<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録フォーム</title>
</head>
<body>
    
    <h1>商品登録</h1>

    <form method='POST' action="pro_add_check.php" enctype="multipart/form-data">
        商品名を入力して下さい<br>
        <input type="text" name="name" value=""><br>
        <br>
        価格を入力して下さい<br>
        <input type="text" name="price" value=""><br>
        <br>
        画像を選んで下さい<br>
        <input type="file" name="gazou"><br>
        <br>
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>