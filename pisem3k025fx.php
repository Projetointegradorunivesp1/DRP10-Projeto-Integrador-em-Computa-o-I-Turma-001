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

		$idescola 		= $_POST['idescola']; 
		$idanoletivo 	= $_POST['idanoletivo']; 
		$anoletivo 		= $_POST['anoletivo']; 
		


$sqlr = mysqli_query($mysqli, "DELETE from `pisno_b0002` WHERE  id='$idanoletivo' ");



echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k020.php?id=$idescola'>
			<script type=\"text/javascript\">
			alert (\"$exclusasucesso\");
			</script>
			";
			exit;
}  ?>