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
		if ($idb == "1ºBimestre") {$idbhere = 1;} ;
		if ($idb == "2ºBimestre") {$idbhere = 2;} ;
		if ($idb == "3ºBimestre") {$idbhere = 3;} ; 
		if ($idb == "4ºBimestre") {$idbhere = 4;} ;

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

				 $sql_nomesala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id='$idsala'");
									while($linha_nomesala = mysqli_fetch_assoc($sql_nomesala)) {
									$nomesala = $linha_nomesala['escolaridade'];
							
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

					$iopm 	= $_POST["$m"] ;
					$iopb 	= $_POST["$b"] ;
					$iopp 	= $_POST["$p"] ;
					$iops 	= $_POST["$s"] ;
					$iopo 	= $_POST["$o"] ;
					$iopf 	= $_POST["$f"] ;

					$anoletivo = $_POST['anoletivo'] ;

					#echo $idbhere ; 
					#echo "<br>variaveis  - " . $iopm  ; 
					#echo "<br>variaveis  - " . $iopb  ; 
					#echo "<br>variaveis  - " . $iopp  ; 
					#echo "<br>variaveis  - " . $iops  ;
					#echo "<br>variaveis  - " . $iopo  ;
					#echo "<br>variaveis  - " . $iopf  ;	

$sql  = "INSERT INTO pisno_b0005 	(iduser, iddisciplina, idbimestre, 	mensal, bimestral, participacao, simulado, bonus,  finalbimestre,  idsala, data, idescola, aluno, numaluno, anoletivo) 
						VALUE 		('$idu2', '$idsdissp', '$idbhere', '$iopm', '$iopb', '$iopp', '$iops', '$iopo', '$iopf',  '$idsala', now(), '$idescola', '$nomeus2', '$numaluno2', '$anoletivo' )"; 
	
			if (mysqli_query($mysqli, $sql)) {
				} else {
	      			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}			
} ;
} ;
} ;
 } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ; ?>
<?php } ?>	