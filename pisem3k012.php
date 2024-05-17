<?php 	
ob_start();
Session_start();
 include "pisem3k000.php" ;
 include "pisem3k001.php" ;
	unset($_SESSION['login_session_user']);
	unset($_SESSION['senha_session_user']);
	session_destroy();
	include "index.php";
	
?>

<?php echo "<meta HTTP-EQUIV='Refresh' CONTENT='3;URL=index.php'>" ; ?>
<?php
ob_end_flush();
?>