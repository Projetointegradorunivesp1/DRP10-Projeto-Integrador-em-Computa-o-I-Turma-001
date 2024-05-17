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
			
		?>
		
		<?php 
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
	   
	<?php if ($grupo == "Coordenador" or $grupo =="Administrador") { ?>
	<?php include "pisem3k010.php" ?>
	
	<center>
	<div class="caixa2"> <strong>Documentos de Professores</strong> </div>
	<table border="0" width=""  >
		<tr class="">
		<td width="" background="img01/02g.png" valign="bottom"> <strong>ID</strong>  </td>
		<td width="230" background="img01/02g.png" valign="bottom"> <strong>Professor</strong>  </td>
		<td width="" background="img01/02g.png" valign="bottom"> <strong>Disciplina</strong>  </td>
		<td width="" background="img01/02g.png" valign="bottom"> <strong>Turma</strong>  </td>
		<td width="80" background="img01/02g.png" valign="bottom"> <strong>Guia</strong> </td>
		<td width="80" background="img01/02g.png" valign="bottom"> <strong>Programa</strong> </td>
		<td width="80" background="img01/02g.png" valign="bottom"> <strong>Plano Semanal</strong> </td>
		<td width="80" background="img01/02g.png" valign="bottom"> <strong>Plano Mensal</strong> </td>
		<td width="80" background="img01/02g.png" valign="bottom"> <strong>Plano Anual</strong> </td>
	</tr>
	
	<?php 
	$sql_profs = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004`");
		while($linha_profs = mysqli_fetch_assoc($sql_profs)) {
		$id_dis 	= $linha_profs['id'];
		$id_idprof 	= $linha_profs['prof'];
		$id_discip 	= $linha_profs['disciplina'];
		$id_idesco 	= $linha_profs['idescola'];
		$idsala		= $linha_profs['idsala'];
	?>
	<tr class="" >
	<td  > <?php echo $id_dis ; ?> </td>
	<td  > 
	<?php $sql_pr = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where id = '$id_idprof'");
				while($linha_prof = mysqli_fetch_assoc($sql_pr)) {
				$nome_prof = $linha_prof['nome'];
				}
		?>
	<?php echo $nome_prof	 ; ?>  </td>
	<td> 
		<?php echo $id_discip	 ; ?>
	</td>
	<td width="" align="">
				<?php $sql_sert = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id = '$idsala' ");
				while($linha_sert = mysqli_fetch_assoc($sql_sert)) {
				$nome_sala = $linha_sert['escolaridade'];
				$nome_turma = $linha_sert['turma'];
				echo $nome_sala . " - " . $nome_turma . "<br>"  ;
				}
				?>
				<?php  ?>
		</td>
	<td>
		<a href="pisem3k052.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>&idt=<?php echo $id_idesco ; ?>">
		<img src="img01/ver.png" width=20 />
		</a> 
		<a href=""><img src="img01/avisarpro.png" width=20 /></a>
	</td>
	
	<td><img src="img01/ver.png" width=20 /> <img src="img01/avisarpro.png" width=20 /></td>
	<td><img src="img01/ver.png" width=20 /> <img src="img01/avisarpro.png" width=20 /></td>
	<td><img src="img01/ver.png" width=20 /> <img src="img01/avisarpro.png" width=20 /></td>
	<td><img src="img01/ver.png" width=20 /> <img src="img01/avisarpro.png" width=20 /></td>
	
	</tr>	
	<?php 	
	}
	?> 
	
	</table>
	</center>
	<?php } else {  
		echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
		exit;
	} ?> 		
<?php } ?>	
<?php include "pisem3k002.html" ; ?>		