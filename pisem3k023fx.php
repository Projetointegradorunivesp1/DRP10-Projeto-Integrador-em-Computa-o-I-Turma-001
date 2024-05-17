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
		


$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0002` SET `anoletivo` = '$anoletivo' 	WHERE  id = '$idanoletivo'  LIMIT 1 ;");



echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k020.php?id=$idescola'>
			<script type=\"text/javascript\">
			alert (\"$editconfirm\");
			</script>
			";
			exit;
}  ?>