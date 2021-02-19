<?php
session_start();
session_regenerate_id(true); 
?>

<?php if(isset($_SESSION['member_login'])==false): ?>
    ようこそゲスト様<br>
    <a href="member_login.php">会員ログイン</a>
    <?php exit(); ?>
<?php else: ?>

    <?php $_SESSION['member_name']; ?>さんログイン中<br>

<?php endif; ?>
