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
				<?php if ($grupo == "Coordenador" or $grupo =="Administrador" or $grupo == "Professor" ) { 
		$idb=$_GET['idb'];
		$ida=$_GET['ida'];	
		$idbnow=$_POST['idbnow'];	
		$idanow=$_POST['idanow'];	


		$sql_salaid = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004` where prof='$id_user'");
					while($linha_salaid = mysqli_fetch_assoc($sql_salaid)) {
					$idsdissp 		= $linha_salaid['id'];
					$disciplinabsc 	= $linha_salaid['disciplina'];
					$idescolaid3 	= $linha_salaid['prof'];
					$idsalapisno4 	= $linha_salaid['idsala'];

					$idsala 		= $_POST['idsala'];
					$idescola 		= $linha_salaid['idescola'];

					echo $idsala . " eh o id da sala <br>" ;
					echo $idescola . " eh o id da escola <br>" ;
					echo $idanow . " eh o id do ano letivo <br>" ;
					echo $idbnow . " eh o id do bimestre <br>" ;
		} ;	

				 $sql_nomesala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id='$idsala'");
									while($linha_nomesala = mysqli_fetch_assoc($sql_nomesala)) {
									$nomesala = $linha_nomesala['escolaridade'];
									$anoletivo2		= $linha_nomesala['anoletivo'];
						
		} ;					
					$sql_salaid2 = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where idsala='$idsala' ORDER BY `pisem_b0009cd`.`numaluno` ASC");
								while($linha_salaid2 = mysqli_fetch_assoc($sql_salaid2)) {
								$nomeus2		= $linha_salaid2['nome'];
								$loginu2 		= $linha_salaid2['login'];
								$numaluno2 		= $linha_salaid2['numaluno'];
								$idu2 			= $linha_salaid2['id'];
								
						
					$m = "m".$numaluno2.$idu2.$idsdissp ;
					$b = "b".$numaluno2.$idu2.$idsdissp ;
					$p = "p".$numaluno2.$idu2.$idsdissp ;
					$s = "s".$numaluno2.$idu2.$idsdissp ;
					$o = "o".$numaluno2.$idu2.$idsdissp ;
					$f = "f".$numaluno2.$idu2.$idsdissp ;

					@$iopm 	= $_POST["$m"] ;
					@$iopb 	= $_POST["$b"] ;
					@$iopp 	= $_POST["$p"] ;
					@$iops 	= $_POST["$s"] ;
					@$iopo 	= $_POST["$o"] ;
					@$iopf 	= $_POST["$f"] ;


					echo "<br>variaveis  - " . $iopm  ; 
					echo "<br>variaveis  - " . $iopb  ; 
					echo "<br>variaveis  - " . $iopp  ; 
					echo "<br>variaveis  - " . $iops  ;
					echo "<br>variaveis  - " . $iopo  ;
					echo "<br>variaveis  - " . $iopf  ;	

echo "<br><br><br>verificando dados para update <br> " . "iduser = " . $idu2 . "<br> id da diciplina = " . $idsdissp . "<br>id do bimestre = " . $idb . "<br> id da escola = " . $idanow  . "<br> id do ano letivo = " . $anoletivo2 ;

$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0005` SET `mensal` 			= '$iopm' 	WHERE  iduser = '$idu2' and iddisciplina = '$idsdissp' and  idbimestre = '$idb' and idescola = '$idanow' and idsala = '$idsala' and Anoletivo = '$anoletivo2' ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0005` SET `bimestral` 		= '$iopb' 	WHERE  iduser = '$idu2' and iddisciplina = '$idsdissp' and  idbimestre = '$idb' and idescola = '$idanow' and idsala = '$idsala' and Anoletivo = '$anoletivo2' ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0005` SET `participacao`	= '$iopp' 	WHERE  iduser = '$idu2' and iddisciplina = '$idsdissp' and  idbimestre = '$idb' and idescola = '$idanow' and idsala = '$idsala' and Anoletivo = '$anoletivo2' ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0005` SET `simulado`		= '$iops' 	WHERE  iduser = '$idu2' and iddisciplina = '$idsdissp' and  idbimestre = '$idb' and idescola = '$idanow' and idsala = '$idsala' and Anoletivo = '$anoletivo2' ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0005` SET `bonus`			= '$iopo' 	WHERE  iduser = '$idu2' and iddisciplina = '$idsdissp' and  idbimestre = '$idb' and idescola = '$idanow' and idsala = '$idsala' and Anoletivo = '$anoletivo2' ;");
$alterar = mysqli_query($mysqli,"UPDATE `pisno_b0005` SET `finalbimestre`	= '$iopf' 	WHERE  iduser = '$idu2' and iddisciplina = '$idsdissp' and  idbimestre = '$idb' and idescola = '$idanow' and idsala = '$idsala' and Anoletivo = '$anoletivo2' ;");

} ;


#$sql  = "INSERT INTO pisno_b0005 	(iduser, iddisciplina, idbimestre, 	mensal, bimestral, participacao, simulado, bonus,  finalbimestre,  idsala, data, idescola) 
#						VALUE 		('$idu2', '$idsdissp', '$idbhere', '$iopm', '$iopb', '$iopp', '$iops', '$iopo', '$iopf',  '$idsala', now(), '$idescola')"; 
	
#			if (mysqli_query($mysqli, $alterar)) {
#			} else {
#	      			echo "Error: " . $alterar . "<br>" . mysqli_error($conn);
#				}			


 } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k054.php?ide=$idescola&idb=$idbnow&ida=$anoletivo2'> " ;			
	exit;
; } ?> 
<?php echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k054.php?ide=$idescola&idb=$idbnow&ida=$anoletivo2'> 
<script type=\"text/javascript\">
			alert (\"Notas editadas com Sucesso\");
			</script>
			" ; ?>
<?php } ?>	