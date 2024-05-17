<?php Session_start(); ?>
<?php include "pisem3k000.php" ?>
<?php include "pisem3k001.php" ?>
<?php 
	if (!isset ($_SESSION['login_session_user']) AND !isset ($_SESSION['senha_session_user']))  
		{
		echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
			<script type=\"text/javascript\">
			alert (\"$voltaridex\");
			</script>
			";
			exit;
		} 
			else 
		{  

		$idescola	= $_POST['idescola'];	

$sqlr = mysqli_query($mysqli, "DELETE FROM `pisno_b0001` WHERE id='$idescola'");	


echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
			<script type=\"text/javascript\">
			alert (\"Escola Excluida com Sucesso\");
			</script>
			";
			exit;
}  ?>