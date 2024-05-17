<?php
   session_start();
    if ($_POST["palavra"] == $_SESSION["palavra"]){
        include "pisem3k000.php" ; 
		include "pisem3k001.php" ;
		
		$ip 		= $_POST['ip']; 
		$data 		= $_POST['data'];
		$hora 		= $_POST['hora'];
		$nome 		= $_POST['nome'];
		$dndia		= $_POST['dndia'];
		$dnmes		= $_POST['dnmes'];
		$dnano		= $_POST['dnano'];
		$login 		= $_POST['login'];
		$email 		= $_POST['email'];
		$localidade = $_POST['localidade'];
		$ecolaridade = $_POST['ecolaridade'];
		$senha 		= $_POST['senha'];
		$confirmsenha = $_POST['confirmsenha'];
		$grupo 		= $_POST['grupo'];
		$avatar 	= $_POST['avatar'];
		$estado 	= $_POST['estado'];
		$sexo 		= $_POST['sexo'];
		$assin 		= "pisem_IMG005/assin_neutra.png";
		$css2 		= "pisem_00008tm" ;
		$css 		= $_POST['temaprinc'];
		
		
		// verificar nomes, emails, e logis iguais
		$sql = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where login = '$login'") or die("Erro");
			while($dados=mysqli_fetch_assoc($sql))
				{
					echo $nomec1 . $dados['nome'].'<br>';
					echo $lomec1 . $dados['login'].'<br>';
					
					$logincadcar = $dados['login'] ;
					$nomecadcar = $dados['nome'] ;
				}
				
		if (empty($nome)) {	
			echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k008.php'>
			<script type=\"text/javascript\">
			alert (\"$nomebran\");
			</script>
			";	
			exit;
			}	
			
		if (empty($email)) {	
			echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k008.php'>
			<script type=\"text/javascript\">
			alert (\"$emailbran\");
			</script>
			";	
			exit;
			}
			
		if (empty($senha)) {	
			echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k008.php'>
			<script type=\"text/javascript\">
			alert (\"$senhabran\");
			</script>
			";	
			exit;
			}
			
		if (empty($confirmsenha)) {	
			echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k008.php'>
			<script type=\"text/javascript\">
			alert (\"$confirmsenhab\");
			</script>
			";	
			exit;
			}
		
		if ($senha != $confirmsenha){			
			echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k008.php'>
			<script type=\"text/javascript\">
			alert (\"$naocoincidem\");
			</script>
			";	
			exit;
			}
			
			
		if (empty($login)) {
			echo $nomecadcar  ;
			echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k008.php'>
			<script type=\"text/javascript\">
			alert (\"$loginbran\");
			</script>
			";
			exit;
		} else {
			echo $carreglogin . $login ; 
		}
		
		if (empty($logincadcar)) {
			echo "<br>" . $podecadast ;
			if ($senha == $confirmsenha){
			$sql = "INSERT INTO pisem_b0009cd (ip, data, hora, nome, dndia, dnmes, dnano, login, email, localidade, estado, ecolaridade, senha, grupo, avatar, sexo, assinatura, css) 
			VALUE ('$ip', '$data', '$hora','$nome', '$dndia', '$dnmes', '$dnano', '$login', '$email', '$localidade', '$estado', '$ecolaridade', '$senha', '$grupo', '$avatar', '$sexo', '$assin', '$css')";
			if (mysqli_query($mysqli, $sql)) {
      		 	require_once ('class.phpmailer.php');
				$corpo .= "Registro de um novo usuario em www.igans.com.br\n";
				$corpo .= "Nome: " . $_POST["nome"] . "\n";
				$corpo .= "Login: " . $_POST["login"] . "\n";
				$corpo .= "E-mail: " . $_POST["email"] . "\n";
				
				$mail_adm = "prof.ale.igans@gmail.com" ; 
				mail($mail_adm, "Recado - Registro de um novo usuario em igans.com.br", $corpo);	
				
				echo "
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
			<script type=\"text/javascript\">
			alert (\"$cadastrook\");
			</script>
			";
			exit;
			} else {
      			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		}
			
		} else {
			echo "<br>" . $jaexistelogin .
			"
			<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k008.php'>
			<script type=\"text/javascript\">
			alert (\"$jaexistelogin\");
			</script>
			";
			exit;
			
		}

}else{
        include "pisem3k011.php" ;
       
    }
?>				