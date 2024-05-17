


<?php Session_start(); ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Igans</title>
    <link rel="stylesheet" href="css/css01.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/pisem_css01.min.css">
    <link rel="stylesheet" href="css/pisem_css02.min.css">
    <link rel="stylesheet" href="css/pisem_css07.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/pisem_css08.css">
</head>

<body>
<div class="bounce animated login-dark" style="background-color: rgb(89,44,18);color: rgb(170,174,177); background-image: url(IMG1/bmath.jpg)">
<?php
//Busca da conexão 
include "pisem3k000.php" ;
//Busca da conexão ok

//Senha e logim
$login_user = $_POST['login'];
$senha_user = $_POST['senha'];
//Senha e logui ok

//conectando com a tabela do banco
// MySqli connection

// Errors
if($mysqli->connect_error) {
  echo "<b>Failed to connect to MySQL: </b>" . $mysqli->connect_error;
}

// conectando com a tabela do banco 
$selectQuery = $mysqli->prepare("SELECT * FROM pisem_b0009cd WHERE login = '$login_user' AND senha = '$senha_user'");
$selectQuery->execute();
$selectQueryResult = $selectQuery->get_result();
// anteiormente em php5 eu usava $sql = mysqli_query("SELECT * FROM `pisem_b0009cd` WHERE login = '$login_user' AND senha = '$senha_user'");
//conectando com a tabela do banco - ok

//conectando com a linha da tabela
$num_rows = mysqli_num_rows($selectQueryResult);
//conectando com a linha da tabela - ok

//Estabelecendo condição para erro ou acerto do login
 if ($num_rows == 1){
	$_SESSION['login_session_user'] = $login_user;
	$_SESSION['senha_session_user'] = $senha_user;
	include "pisem3k005.php";
} else {
	unset($_SESSION['login_session_user']);
	unset($_SESSION['senha_session_user']);
	include "pisem3k006.php";
}
//Estabelecendo condição para erro ou acerto do login - ok
?>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
	 
