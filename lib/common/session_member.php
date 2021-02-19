<?php
session_start();
session_regenerate_id(true); 
?>

<?php if(isset($_SESSION['member_login'])==false): ?>
    ようこそゲスト様<br>
    <a href="member_login.php">会員ログイン</a>
<?php else: ?>
    <?php echo $_SESSION['member_name']; ?>さんログイン中<br>
    <a href="/shop/member_logout.php">ログアウト</a>
<?php endif; ?>
