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
		$login_user = $_SESSION['login_session_user'];
		$senha_user = $_SESSION['senha_session_user']; 
		$sql_user = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where login = '$login_user' AND senha = '$senha_user'");
		while($linha_user = mysqli_fetch_assoc($sql_user)) {
		$id_user = $linha_user['id'];
		$loginssuser = $linha_user['login'];
		$grupo = $linha_user['grupo'];
		}
	
		?>
	   
	<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) { ?>
		
	<?php 
		$idsala 	= $_POST['idsala'];
		$idbim 		= $_POST['idbim'];
		$idn 		= $_POST['idn'];
		$iddis 		= $_POST['iddis'];
		$idaluno 	= $_POST['idaluno'];
		$iddis		= $_POST['iddis'];
		$ida 		= $_POST['ida'];
		$idescola 		= $_POST['idescola'];

		
		
		
		
	
	
	$sql_discipl2 = mysqli_query($mysqli,"SELECT * FROM `pisno_b0007` where 
			idn			=	'$idn' 		and 
			iddis		=	'$iddis' 		and 
			idbimestre	=	'$idbim' 		and 
			idsala		=	'$idsala' 	and
			idaluno		=	'$idaluno' 	and
			anoletivo	=	'$ida' 		and
			escola		=	'$idescola'
			
			");
		while($linha_discipl2 = mysqli_fetch_assoc($sql_discipl2)) {
		$id_linha_discipl2 = $linha_discipl2['id'];
		$id_linha_discipl3 = $linha_discipl2['iddis'];
		$id_linha_discipl4 = $linha_discipl2['idn'];
		$id_linha_discipl5 = $linha_discipl2['idbimestre'];
		$id_linha_discipl6 = $linha_discipl2['idsala'];
		$id_linha_discipl7 = $linha_discipl2['escola'];
		$id_linha_discipl8 = $linha_discipl2['anoletivo'];
		$id_linha_discipl9 = $linha_discipl2['disciplina'];
		$id_linha_discip20 = $linha_discipl2['recuperacao'];
		}
	
	
	
	if(empty($id_linha_discipl2)) { 
	
	$sql = "INSERT INTO pisno_b0007 (idaluno, iddis, idn, idbimestre, idsala, data, disciplina, anoletivo, escola, finalbimestre) 
	VALUE ('$idaluno', '$iddis', '$idn', '$idbim', '$idsala', now(), '$iddis', '$ida', '$idescola', '0.00')";
		if (mysqli_query($mysqli, $sql)) {

echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k047.php?idsala=$idsala&idbim=$idbim&idn=$idn&iddis=$iddis&idaluno=$idaluno&ida=$ida&idescola=$idescola'>
			<script type=\"text/javascript\">
			</script>
			";
			exit;
		
		
		};
			
		} else {
		
	
		
			
			  $alterar = mysqli_query($mysqli,"UPDATE `pisno_b0007` SET `finalbimestre` 		= '0.00' 	
			where 
			idn			=	'$idn' 		and 
			iddis		=	'$iddis' 		and 
			idbimestre	=	'$idbim' 		and 
			idsala		=	'$idsala' 	and
			idaluno		=	'$idaluno' 	and
			anoletivo	=	'$ida' 		and
			escola		=	'$idescola'
			  LIMIT 1 ;");

echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k047.php?idsala=$idsala&idbim=$idbim&idn=$idn&iddis=$iddis&idaluno=$idaluno&ida=$ida&idescola=$idescola'>
			<script type=\"text/javascript\">
			</script>
			";
			exit;		
			
	};
	?>	
		
	 	
		
	<?php } else {  
		echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
		exit;
	} ?> 		
<?php } ?>			