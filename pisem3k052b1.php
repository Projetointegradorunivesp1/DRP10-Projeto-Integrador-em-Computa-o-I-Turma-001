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
$bimestre	= $_GET['bim'] ;
$Turma		= $_GET['tu'] ;
?>	   
	<?php if ($grupo == "Coordenador" or $grupo =="Administrador" or $grupo =="Professor") { ?>
	<?php include "pisem3k010.php" ?>
	<center>
<form action=".php" name="form" method="post" enctype="multipart/form-data">
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
	<a href="pisem3k052b1.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>"> <font size="+3"><strong>1B</strong></font> </a> 
	<a href="pisem3k052b2.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>"> 2B </a>
	<a href="pisem3k052b3.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>"> 3B </a>
	<a href="pisem3k052b4.php?idp=<?php echo $id_idprof ; ?>&iddis=<?php echo $id_dis ; ?>&idesc=<?php echo $id_idesco ; ?>"> 4B </a>
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

					<div class="caixa2">
<?php  
$sqlguia = mysqli_query($mysqli,"SELECT * FROM `pisno_b0008` where 
professor 	= '$professor' 		and 
escola 		= '$Escola' 		and 
disciplina 	= '$disciplina'		and 
Turma		= '$Turma'			and 
Bimestre 	= '$bimestre'	 
");
while($dadosguia 	= mysqli_fetch_assoc($sqlguia)) {
$idguia 			= $dadosguia['id'] ;
$profeguia			= $dadosguia['professor'] ;
$discipguia			= $dadosguia['disciplina'] ;
$Turmaguia			= $dadosguia['Turma'] ;
$bimestreguia		= $dadosguia['Bimestre'] ;
}
?>
<?php if ($idguia =! "") { ?>
						<table width="700">
							<tr>
								<td width="150" valign="top">
									<strong><?php echo $bim1 ; ?></strong> <br />
									
									<strong>Turma:</strong> <input type="text" name="" id="" value="" size="3" />
								</td>
								<td valign="top">
									<strong>Justificativa da unidade:</strong><br />
									<textarea name="" id="" value="" size="3" rows="6" cols="70" > </textarea><br /> <br />
									
									<strong>Objetivo Geral:</strong><br />
									<textarea name="" id="" value="" size="3" rows="6" cols="70" > </textarea><br /> <br />
									
									<strong>Objeto de conhecimento:</strong><br />
									<textarea name="" id="" value="" size="3" rows="6" cols="70" > </textarea><br /> <br />
									
									<strong>Habilidade a serem desenvolvidas no bimetre:</strong><br />
									<textarea name="" id="" value="" size="3" rows="6" cols="70" > </textarea><br /> <br />
								</td>
							</tr>
						</table>
					</div>
					
					<div class="caixa2">
						<table width="700">
							<tr>
								<td width="" valign="top">
								<strong><?php echo $comptensocio ; ?></strong><br />
								<center><textarea name="" id="" value="" size="3" rows="6" cols="89" > </textarea></center> 
								</td>
							</tr>
						</table>
					</div>
					
					<div class="caixa2">
						<strong><?php echo $estrtgididat ; ?></strong><br />
					</div>
					
					<div class="caixa2">
					<table width="700">
							<tr>
								<td width="" valign="bottom">
								<strong><?php echo $ativautodida ; ?></strong><br />
								<center><textarea name="" id="" value="" size="3" rows="13" cols="28" > </textarea></center> 
								</td>
								
								<td width="" valign="bottom">
								<strong><?php echo $estratautodi ; ?></strong><br />
								<center><textarea name="" id="" value="" size="3" rows="13" cols="28" > </textarea></center>
								</td>
								
								<td width="" valign="bottom">
								<strong><?php echo $atividadeait ; ?></strong><br />
								<center><textarea name="" id="" value="" size="3" rows="13" cols="28" > </textarea></center>
								</td>
							</tr>
					</table>
					<table width="700">
							<tr>
								<td width="" valign="bottom">
								<strong><?php echo $valorestraba ; ?></strong><br />
								<center><textarea name="" id="" value="" size="3" rows="13" cols="44" > </textarea></center> 
								</td>
								
								<td width="" valign="bottom">
								<strong><?php echo $criteriavali ; ?></strong><br />
								<center><textarea name="" id="" value="" size="3" rows="13" cols="43" > </textarea></center>
								</td>
								

							</tr>
					</table>
					</div>
		</td>
	</tr>
</table>
</center>
				<center>
					<div class="caixa3">
					<table width="700" border="0">
							<tr>
								<td width="" valign="bottom" align="left">
								<strong><?php echo $layoutimpres ; ?></strong>
								</td>
								
								<td width="" valign="bottom">
								
								</td>
								
								<td width="" valign="bottom" align="right">
								<?php // para aaprecer apenas se ele ja tiver a linha na tabela pronta.
								$sql_guia = mysqli_query($mysqli,"SELECT * FROM `pisno_b0008` where 
									professor 	= '$professor' AND 
									escola 		= '$Escola' AND
									disciplina 	= '$disciplina' AND
									Turma		= '$senha_user' AND
									Bimestre	= '$senha_user'
									");
								while($linha_guia = mysqli_fetch_assoc($sql_guia)) {
								$id_user = $linha_guia['id'];
								}
								?>
								<input type="submit" value="Salvar" class="btnA" />
								</td>
								

							</tr>
					</table>
<?php } else { echo " Liberar acesso ao bimestre " ; } ?>
					</div>
				</center>
</form>


	<?php } else {  
		echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
		exit;
	} ?> 		
<?php } ?>

<?php include "pisem3k002.html" ; ?>			