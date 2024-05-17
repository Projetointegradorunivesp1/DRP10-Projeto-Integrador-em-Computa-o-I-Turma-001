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

		$ip 		= $_POST['ip']; 
		$data 		= $_POST['data'];
		$hora 		= $_POST['hora'];
		$escola 	= $_POST['escola'];
		$endereco	= $_POST['endereco'];
		$rsocial	= $_POST['rsocial'];
		$cnpj		= $_POST['cnpj'];
		$Telefones 	= $_POST['Telefones'];	
		$idescola	= $_POST['idescola'];	
		$arquivo 	= $_FILES["arquivo"];	
		
$id_user2a = $_POST['id_user'] ; 	
if(isset($_FILES["arquivo"])){

$arquivo = $_FILES["arquivo"];


$pasta_dir = "img02/";	//diretorio dos arquivos
								//se não existir a pasta ele cria uma
if(!file_exists($pasta_dir)){
mkdir($pasta_dir);
}
$rename =   date('Ymd_His'); ;
$arquivo_nome = $pasta_dir . $rename . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);

//conecta no banco
include "pisem3k000.php" ;
include "pisem3k001.php" ;
//aqui salva no banco o path da foto
// Aqui esta salvando juntamente com o catalogo de banners, não usar a linha de comando abaixo
//mysql_query("INSERT INTO `pisem_b0005cd` (imagem) VALUE ('$arquivo_nome')");

} 

$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0001` SET `img` 		= '$arquivo_nome' 	WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0001` SET `escola` 		= '$escola' 		WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0001` SET `razaosocial` = '$rsocial' 		WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0001` SET `cnpj` 		= '$cnpj' 			WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0001` SET `endereco` 	= '$endereco' 		WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0001` SET `tel1` 		= '$Telefones' 		WHERE  id = '$idescola'  LIMIT 1 ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0001` SET `edit` 		= now() 			WHERE  id = '$idescola'  LIMIT 1 ;");


echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
			<script type=\"text/javascript\">
			alert (\"$editconfirm\");
			</script>
			";
			exit;
}  ?>