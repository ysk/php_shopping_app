
<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/staff/staff_disp.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>スタッフ情報参照</title>
</head>
<body>
<h1>スタッフ情報参照</h1>
    <p>スタッフコード</p>
    <?php echo $staff_code; ?><br>
    <br>

    <p>スタッフ名</p>
    <?php echo $staff_name; ?><br>
    <br>



    <form>
    <input type="button" onclick="history.back();" value="戻る">
    </form>
</body>
</html>