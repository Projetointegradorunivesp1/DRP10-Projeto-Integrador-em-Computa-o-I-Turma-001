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
$disciplina = $_POST['disciplina'] ; 
$idescola = $_POST['idescola'] ;
$prof		= $_POST['prof'] ; 
$salai		= $_POST['salai'] ;

$salaiba	=  substr($salai, 7, 5); 

$sql_iduser = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where nome = '$prof' ");
		while($linha_iduser = mysqli_fetch_assoc($sql_iduser)) {
		$id_user = $linha_iduser['id'];
		}

$sql 		= "INSERT INTO pisno_b0004 (disciplina, data, idescola, prof, idsala) VALUE ('$disciplina', now(), '$idescola', '$id_user', '$salai')"; 

if (mysqli_query($mysqli, $sql)) {
		echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k043.php?id=$idescola'>
			<script type=\"text/javascript\">
			alert (\"Disciplina Cadastrada Com Sucesso\");
			</script>
			";
			exit;
			} else {
      			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		
?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	