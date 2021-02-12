<?php
session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()]) == true){
    setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウトしました。</title>
</head>
<body>
    ログアウトしました。<br>
    <br>
    <a href="../staff_login/">ログイン画面へ</a>

</body>
</html>
