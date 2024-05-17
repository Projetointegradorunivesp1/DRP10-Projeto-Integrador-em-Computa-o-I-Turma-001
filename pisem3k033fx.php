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


  
echo  substr($opescol, 0, 6);
$vartresbs	=  substr($opescol, 0, 5); 

$vartresba	=  substr($opescol, 7, 5); 


$sql = mysqli_query($mysqli, "INSERT INTO pisem_b0009cd (sexo, ip, data, hora, nome, dn, dndia, dnmes, dnano, login, email, localidade, estado, ecolaridade, senha, grupo, avatar, css, opescol, aluno, idescola, numaluno, idsala) 
VALUE ('$sexo', '$ip', '$data', '$hora','$nome', '$dn', '$dndia', '$dnmes', '$dnano', '$login', '$email', '$localidade', '$estado', '$ecolaridade',  '$senha', '$grupo', '$avatar', '$css', '$opescol', '$vartresbs', '$id_get', '$numaluno', '$vartresbs')");

$sql_idwe = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` ORDER BY `pisem_b0009cd`.`id` DESC LIMIT 1") ;
	while($linha_idew = mysqli_fetch_assoc($sql_idwe)) {
		$id_userinserir = $linha_idew['id'];
		}

$sql2 = mysqli_query($mysqli, "INSERT INTO pisno_b0006 (idsala, idescola, idaluno, data, idnumero, idanoletivo) 
VALUE ('$vartresbs', '$id_get', '$id_userinserir', now(), '$numaluno', '$vartresba')");

echo "ano letivo: " . $vartresba . 
" 
	<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k032.php?id=$id_get'>
	<script type=\"text/javascript\">
	alert (\"$cadastrook\");
	</script>
";


?>
<?php
} else { include "index.php" ; 
	}  ; ?>
