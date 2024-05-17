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
		$ecolaridade 		= $_POST['ecolaridade']; 
		$turma 				= $_POST['turma'];
		$anoletivo 			= $_POST['anoletivo'];
		$idescola			= $_POST['idescola'];
		$numero				= $_POST['numero'];
		$idvol				= $_POST['idvol'];
		
		$id					= $_GET['id'] ;
		$ide				= $_GET['ide'] ;
		

	$sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0002`  where anoletivo='$anoletivo' ORDER BY `pisno_b0002`.`anoletivo` DESC ") or die("Erro");
		while($dadosescola=mysqli_fetch_assoc($sqlescola))
			{
				$anoletivo 		= $dadosescola['anoletivo'] ;
				$idan 			= $dadosescola['id'] ;
			}
			
echo $ecolaridade . " - " . $turma . " - " . $anoletivo . " - " . $idan   ;				
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0003` SET `ecolaridade` 	= '$ecolaridade' 	WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0003` SET `turma` 			= '$turma' 			WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0003` SET `anoletivo` 		= '$anoletivo' 		WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0003` SET `numero` 			= '$numero' 		WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0003` SET `edit` 			= now()				WHERE  id = '$idescola'  LIMIT 1 ;");
if ($idvol == 1) { 
echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k035.php?id=$ide'>
			<script type=\"text/javascript\">
			alert (\"$editconfirm\");
			</script>
			";
			exit;
} 			

if ($idvol == 0) { 
echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k026.php?id=$ide'>
			<script type=\"text/javascript\">
			alert (\"$editconfirm\");
			</script>
			";
			exit;
}			
}  ?>
}
?>		