<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
?>
<?php
session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()]) == true){
    setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>
<html>
<body>
    カートを空にしました。<br>


</body>
</html>
