<?php Session_start(); ?>
<?php include "pisem3k000.php" ; ?>
<?php include "pisem3k001.php" ; ?>
<html>
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

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Igans</title>
    <link rel="stylesheet" href="css/Pisem_css01.min.css">
    <link rel="stylesheet" href="css/Pisem_css02.min.css">
    <link rel="stylesheet" href="css/Pisem_css07.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/Pisem_css08.css">
    <link rel="stylesheet" href="css/css01.css">

</head>
<body>

<?php include "pisem3k010.php" ?>
<?php include "pisem3k013.php" ?>
<?php include "pisem3k002.html" ?>

</body>


<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>		
</html>