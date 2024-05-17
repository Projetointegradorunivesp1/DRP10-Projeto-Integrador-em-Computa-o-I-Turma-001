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

		$anoletivo	= $_POST['anoletivo'];	
		$escola		= $_POST['escola'];	
		$ide		= $_POST['ide'];	
		$anoletivo	= $_POST['anoletivo'];	

		$sql = "INSERT INTO pisno_b0002 (escola, idescola, anoletivo, data) VALUE ('$escola', '$ide', '$anoletivo', now())";
		if (mysqli_query($mysqli, $sql)) {

echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k020.php?id=$ide'>
			<script type=\"text/javascript\">
			alert (\"Ano Letivo Cadastrado com Sucesso\");
			</script>
			";
			exit;
			} else {
      			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		}
?>