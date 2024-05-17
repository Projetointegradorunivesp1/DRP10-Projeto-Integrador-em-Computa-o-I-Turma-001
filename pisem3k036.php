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
		$id_get = $_GET['id'];
		$id_b 	= $_GET['b'];
		?>
<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) { ?> 		

<?php include "pisem3k010.php" ?>

<center>


		<?php $sql_usala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id='$id_get' ORDER BY `pisno_b0003`.`id` DESC");
		while($linha_usala = mysqli_fetch_assoc($sql_usala)) {
		$id_usala			= $linha_usala['id'];
		$usala				= $linha_usala['sala'];
		$anoletivo_usala 	= $linha_usala['anoletivo'];
		$data_usala 		= $linha_usala['data'];
		$escolaridade_usala = $linha_usala['escolaridade'];
		$turma_usala 		= $linha_usala['turma'];
		$numero_usala 		= $linha_usala['numero'];
		$idescola_usala 	= $linha_usala['idescola'];
		?>
		
		<?php $sql_esc = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$idescola_usala'");
			while($linha_uesc = mysqli_fetch_assoc($sql_esc)) {
			$img_esc  = $linha_uesc['img'];
			$nome_esc = $linha_uesc['escola'];				
		}
		?>

<?php } ?>				
</center>

<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	

<!------- Refazendo as linhas para aparecer os nomes na lista da sala ------>
<CENTER>
<table width="720" border=0 >
	<tr>
		<td>
			<div class="caixa1">  <?php echo "[" . $anoletivo_usala  . "] Sala: " . " [" . $id_usala . "] "   . $escolaridade_usala .  " Turma: " . $turma_usala . " - " . $nome_esc  ; ?></div>
			<input type="hidden" name="anoletivo" 	id="anoletivo" 	value="<?php echo $anoletivo_usala	 	; ?>" />
			<input type="hidden" name="idescola" 	id="idescola" 	value="<?php echo $idescola_usala	 	; ?>" />
			<input type="hidden" name="idsala" 		id="idsala" 	value="<?php echo $id_usala	 			; ?>" />
			<input type="hidden" name="bimestre" 	id="bimestre" 	value="<?php echo $id_b	 				; ?>" />
		</td>
	</tr>
	<tr>	
		<td class="caixa5">
			<table width="" border="0">
			<tr>
				
				<td valign="bottom" ><strong><?php echo $nuabre	 ; ?></strong></td>
				<td valign="bottom" width="450"><strong>Dados do Aluno</strong></td>
				<?php $sql_salaid = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004` where idsala='$id_usala'");
					while($linha_salaid = mysqli_fetch_assoc($sql_salaid)) {
					$idsdissp = $linha_salaid['id'];
					$idsalaid3 = $linha_salaid['disciplina'];
					$idescolaid3 = $linha_salaid['prof'];
				?>
				<td valign="bottom" width="65" align="center" > <div class="foo"> <?php echo $idsalaid3 ; ?></div></td>
				<?php } ?>

			</tr>
					<?php $sqld2 = mysqli_query($mysqli, "SELECT * FROM `pisem_b0009cd`  where idsala= '$id_usala' ORDER BY `pisem_b0009cd`.`numaluno` ASC");
						while($linhad2 = mysqli_fetch_assoc($sqld2)) {
							$nomealunou 	= $linhad2['nome'];
							$nomealunologin	= $linhad2['login'];		
							$idalunologin	= $linhad2['id'];	
							$imgaluno  		= $linhad2['avatar'];
							$numaluno  		= $linhad2['numaluno'];
								
					?>
			<tr>
				<td>
						<div class=""> <?php echo $numaluno   ; ?></div>
				</td>
				<td>
						<div class=""> <font size="-2"><?php echo  $nomealunou . " [" . $nomealunologin . "] "  ; ?></font></div>
				</td>

			</tr>
					<?php } ?>
		</table>
		</td>
	</tr>
</table>

<form action="pisem3k045fx.php?id=<?php echo $id_get ; ?>&b=<?php echo $id_b ; ?>" name="form" method="post" enctype="multipart/form-data">		
<input type="submit" class="button_arrow" value="Atualizar"   />
</form>

<?php include "pisem3k002.html" ; ?>
</CENTER>


