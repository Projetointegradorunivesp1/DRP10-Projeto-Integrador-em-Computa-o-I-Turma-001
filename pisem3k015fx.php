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
		$rasocial	= $_POST['rsocial'];
		$cnpj		= $_POST['cnpj'];
		$telefones 	= $_POST['Telefones'];	
		$arquivo 	= $_FILES["arquivo"];
		$edit		= " ";	
		
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
		$sql = "INSERT INTO pisno_b0001 (escola, 	razaosocial, cnpj, 		endereco, 		tel1, 			 	data, 		edit,		img) 
								VALUE 	('$escola', '$rasocial', '$cnpj', 	'$endereco', 	'$telefones', 		'$data', 	'$edit',	'$arquivo_nome')";
		if (mysqli_query($mysqli, $sql)) {
		echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='1; URL=index.php'>
			<script type=\"text/javascript\">
			alert (\"Escola Cadastrada Com Sucesso\");
			</script>
			";
			exit;
			} else {
      			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		}

  ?>	