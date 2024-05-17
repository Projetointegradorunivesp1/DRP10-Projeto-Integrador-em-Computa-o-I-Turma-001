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
<?php 		
$professor 	= $_GET['idp'] ;	
$disciplina = $_GET['iddis'] ;
$Escola		= $_GET['idesc'] ; 
$Turno		= $_GET['idt'] ; 

?>	   
	<?php if ($grupo == "Coordenador" or $grupo =="Administrador" or $grupo =="Professor") { ?>
	<?php include "pisem3k010.php" ?>
	<center>

<table border="0" width="720">
	<tr>
		<td>
		<?php 	$sql_pr = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where id = '$professor'");
				while($linha_prof = mysqli_fetch_assoc($sql_pr)) {
				$nome_prof = $linha_prof['nome'];
				}
		?>
		
		<?php 
				$sql_profs = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004` where id ='$disciplina'");
				while($linha_profs = mysqli_fetch_assoc($sql_profs)) {
				$id_dis 	= $linha_profs['id'];
				$id_idprof 	= $linha_profs['prof'];
				$id_discip 	= $linha_profs['disciplina'];
				$id_idesco 	= $linha_profs['idescola'];
				}
		?>
					<div class="caixa2">	
					<table border="0" width="707">
						<tr>
							<td>
								<strong>Professor:</strong> <?php echo $nome_prof ; ?> <br />
								<strong>Guia de Aprendizagem - Disciplina: </strong> <?php echo $id_discip ; ?>
							</td>
							<td align="center">
								
							</td>
							<td align="right" valign="top">
							<strong>Ano:</strong> <input type="text" name="" id="" value="" size="1"  /><br />
							<strong>Bimestre: </strong> 
	<a href="pisem3k052b1.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>&bim=1&tu=<?php echo $Turno ; ?>"> 1B </a> 
	<a href="pisem3k052b2.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>&bim=2&tu=<?php echo $Turno ; ?>"> 2B </a>
	<a href="pisem3k052b3.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>&bim=3&tu=<?php echo $Turno ; ?>"> 3B </a>
	<a href="pisem3k052b4.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>&bim=4&tu=<?php echo $Turno ; ?>"> 4B </a>
							</td>
						</tr>
					</table>
					</div>
					
					<div class="caixa2">	
								<table width="720" border="0" >
								  <tr>
									<td valign="bottom">
										<?php 
										$sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$Escola'") or die("Erro");
												while($dadosescola=mysqli_fetch_assoc($sqlescola))
													{
														$escola 		= $dadosescola['escola'] ;
														$cnpj 			= $dadosescola['cnpj'] ;
														$endereco 		= $dadosescola['endereco'] ;
														$tel1 			= $dadosescola['tel1'] ;
														$data 			= $dadosescola['data'] ;
														$img 			= $dadosescola['img'] ;
														$id_e 			= $dadosescola['id'] ;
													?>
													<a href="pisem3k020.php?id=<?php echo $id_e ; ?>">
													<img src="<?php echo $img ;	?>" />
													<?php echo $id_e . " - <font size=+2>" . $escola . "</font>" 	;	?> <br />	
													<strong>End:	</strong> 	<?php echo $endereco  	;	?>  <br />	
													<strong>CNPJ: 	</strong>	<?php echo $cnpj  		;	?>  <br />	
													<strong>Tel:	</strong> 	<?php echo $tel1  		;	?>  <br />
													</a>
													<?php
													}
													?>
									</td>
									</tr>
								</table>
				</div>
							</td>
						</tr>
					</table>


					<div class="caixa2">
					<center> <strong><?php echo $bimnao	; ?></strong> <center>
		</td>
	</tr>
</table>
</center>
</div>
	<?php } else {  
		echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
		exit;
	} ?> 		
<?php } ?>
<?php include "pisem3k002.html" ; ?>			