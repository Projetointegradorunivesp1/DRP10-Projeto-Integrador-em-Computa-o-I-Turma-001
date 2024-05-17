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
<form action="pisem3k045fx.php?id=<?php echo $id_get ; ?>&b=<?php echo $id_b ; ?>" name="form" method="post" enctype="multipart/form-data">		
<table width="720" >
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
				<td valign="bottom"><strong></strong></td>
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
				
				<?php $id_get = $_GET['id']; ?>	
				<?php $sql_esc = mysqli_query($mysqli,"SELECT * FROM `pisno_b0006` where idsala='$id_get '");
					while($linha_uesc = mysqli_fetch_assoc($sql_esc)) {
					$idsala36 = $linha_uesc['idsala'];
					$idescola36 = $linha_uesc['idescola'];
					$idaluno36 = $linha_uesc['idaluno'];
					$idnumero36 = $linha_uesc['idnumero'];
					$idanoletivo36 = $linha_uesc['idanoletivo'];	
				?>


			  <tr>
			  	<?php $sql_aluno_user = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where id ='$idaluno36' ");
				while($linha_aluno_user = mysqli_fetch_assoc($sql_aluno_user)) {
					$img_aluno_user  = $linha_aluno_user['avatar'];
					$id_aluno_user  = $linha_aluno_user['id'];		
				?>
			  	<td valign="top"><img class="imgaluno" src="<?php echo $img_aluno_user ; ?>" /></td>
				<?php } ?>
				
				<td valign="top"><?php echo $idnumero36 ; ?></td>
				<?php $sql_aluno_user = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where id ='$idaluno36' ");
				while($linha_aluno_user = mysqli_fetch_assoc($sql_aluno_user)) {
					$nome_aluno_user 	= $linha_aluno_user['nome'];
					$nome_aluno_login 	= $linha_aluno_user['login'];		
					$id_aluno_login 	= $linha_aluno_user['id'];		
				?>
				<td valign="top">
					<input type="text" name="idaluno" 	id="idaluno" 	value="<?php echo $id_aluno_login	; ?>" />
					<strong>Nome: </strong><?php echo $nome_aluno_user ; ?><br />
					<strong>Login: </strong><?php echo $nome_aluno_login ; ?>
				</td>
				<?php } ?>
				
				
				
				
				
				<?php $sql_salaid = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004` where idsala='$id_usala'");
					while($linha_salaid = mysqli_fetch_assoc($sql_salaid)) {
					$idsalaid3 		= $linha_salaid['disciplina'];
					$idescolaid3 	= $linha_salaid['prof'];
					$ide_id 		= $linha_salaid['id'];
							
					$campoadd = 1  ; 			
					$campofaa = 2  ;
					
					
	$camponota		=  $campoadd . "00" . $id_b . $idsala36  . $idnumero36 . $ide_id     ; // bimestre . sala . numero do aluno . disciplina . numero diferencial
	$campofalta   	=  $campofaa . "00" . $id_b . $idsala36  . $idnumero36 . $ide_id     ; // bimestre . sala . numero do aluno . disciplina . numero diferencial
				?>
				
				<td valign="top" align="center" bgcolor="#eee"> 
<font face="Geneva, Arial, Helvetica, sans-serif" size="-3"> <strong>Nota</strong> </font>
<?php $sqlnota = mysqli_query($mysqli,"SELECT * FROM `pisno_b0007` where 
			idn			=	'$numero_usala' 	and
			iddis		=	'$idsdissp' 		and
			idaluno		=	'$id_aluno_user'	and
			anoletivo 	= 	'$anoletivo_usala'	and
			escola		=	'$idescola_usala'	and
			idsala		=	'$id_usala' 		and
			idbimestre 	=	'$id_b'				and  
			idn			=	'$numero_usala'
			");
			while($linha_notA = mysqli_fetch_assoc($sqlnota)) {
			$inota 	= $linha_notA['finalbimestre']; 
			}	
			?>
			<?php
			 ?>

			
<input type="text" 	id="<?php echo $camponota ; ?>" name="<?php echo $camponota ; ?>" size="1" Value="<?php echo $inota ; ?>" disabled="disabled" /><br /> 
 <?php  ?>
<font face="Geneva, Arial, Helvetica, sans-serif" size="-3"> <strong>Faltas</strong> </font>
<input type="text" id="<?php echo $campofalta ; ?>" name="<?php echo $campofalta ; ?>" size="1"  Value="" disabled="disabled"/><br />
<a href="pisem3k047.php?idsala=<?php echo $idsala36 ; ?>&idbim=<?php echo $id_b ; ?>&idn=<?php echo $idnumero36 ; ?>&iddis=<?php echo $ide_id ; ?>&idaluno=<?php echo $id_aluno_user ;?>&ida=<?php echo $anoletivo_usala ; ?>&idescola=<?php echo $idescola_usala ; ?>"> <img src="img01/edit_al.png" width="15"/> </a>
<a href=".php"> <img src="img01/b_excl.png" width="15"/>  </a>
<br /><br />
				 
				</td> 
				<?php } ?>
			  </tr>
			  <?php } ?>
			</table>
		</td>
	</tr>
</table>

<input type="submit" class="button_arrow" value="Atualizar"   />
</form>
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
			<table width="" border="1">
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
<?php include "pisem3k002.html" ; ?>
</CENTER>


