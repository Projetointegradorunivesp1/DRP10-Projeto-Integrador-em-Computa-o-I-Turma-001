<?php Session_start(); ?>
<?php include "pisem3k000.php" ?>
<?php include "pisem3k001.php" ?>

		<?php 
		$login_user = $_SESSION['login_session_user'];
		$senha_user = $_SESSION['senha_session_user'];
		
		$sql_user = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where login = '$login_user' AND senha = '$senha_user'");
		while($linha_user = mysqli_fetch_assoc($sql_user)) {
		$id_user = $linha_user['id'];
		$cssuser = $linha_user['login'];
		$grupo = $linha_user['grupo'];
		}
		?>
<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) { ?> 		
		
<?php 
$id_get			= $_POST['id_get'];
$idu			= $_POST['iduser'];
$idescola		= $_POST['idescola'];

$ip 			= getenv("REMOTE_ADDR"); 
$data 			= date("d/m/Y");
$hora 			= date("H:i:s");
$nome 			= $_POST['nome'];
$dn				= date("H:i:s");
$dndia			= $_POST['dndia'];
$dnmes			= $_POST['dnmes'];
$dnano			= $_POST['dnano'];
$login 			= $_POST['login'];
$email 			= $_POST['email'];
$localidade 	= $_POST['localidade'];
$ecolaridade 	= $_POST['ecolaridade'];
$senha 			= $_POST['senha'];

$grupo 			= $_POST['grupo'];
$estado 		= $_POST['estado'];

$css 			= "pisem_00008tm" ;
$avatar			= "img04/avatarneutro.png" ;
$sexo 			= $_POST['sexo'];
$opescol		= $_POST['opescol'];
$numaluno		= $_POST['numaluno'];
$idescola	   	= $_POST['idescola'] ; 
?>

	
<?php
if ($nome == "") {
echo "

	<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k032.php?id=$id_get'>
	<script type=\"text/javascript\">
	alert (\"$semnome2w\");
	</script>
";
	exit;
	}
	


if ($login == "") {
echo "

	<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k032.php?id=$id_get'>
	<script type=\"text/javascript\">
	alert (\"$semlogin2w\");
	</script>

";
	exit;
	}
	
if ($senha == "") {
echo "

	<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k032.php?id=$id_get'>
	<script type=\"text/javascript\">
	alert (\"$semsenha2w\");
	</script>

";
	exit;
	}		
	
// verificar nomes, emails, e logis iguais
$sql_conferencia2a = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where login = '$login'")or die("Erro");
	if (!empty($sql_conferencia2a->notEmpty))  {

		echo "

	<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k032.php?id=$id_get'>
	<script type=\"text/javascript\">
	alert (\"$jaexistelogin\");
	</script>
";
	exit;
	}		

$vartresbs	=  substr($opescol, 0, 5); 	//id Sala
$vartresba	=  substr($opescol, 7, 5);  	//id ano letivo


$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `nome` 			= '$nome' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `login` 		= '$login' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `senha` 		= '$senha' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `email` 		= '$email' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `sexo` 			= '$sexo' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `dndia` 		= '$dndia' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `dnmes` 		= '$dnmes' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `dnano` 		= '$dnano' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `localidade` 	= '$localidade' 	WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `ecolaridade` 	= '$ecolaridade' 	WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `estado` 		= '$estado' 		WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `sexo` 			= '$sexo' 			WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `opescol` 		= '$opescol' 		WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `numaluno` 		= '$numaluno' 		WHERE  id = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisem_b0009cd` SET `idsala` 		= '$vartresbs' 		WHERE  id = '$idu'  LIMIT 1 ;");

$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0006` SET `idsala` 			= '$vartresbs' 		WHERE  idaluno = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0006` SET `idescola`		= '$idescola' 		WHERE  idaluno = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0006` SET `idnumero`		= '$numaluno' 		WHERE  idaluno = '$idu'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0006` SET `idanoletivo`		= '$vartresba'		WHERE  idaluno = '$idu'  LIMIT 1 ;");


echo "<br> Aa: Id Sala: " . $vartresbs . "<br> Bb: Ano Letivo: " . $vartresba . "<br> Bb: Id Escola: " . $idescola ; 

echo 

" 

	<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k032.php?id=$idescola'>
	<script type=\"text/javascript\">
	alert (\"$editcadastrous\");
	</script>
";


?>
<?php
} else { include "index.php" ; 
	}  ; ?>
