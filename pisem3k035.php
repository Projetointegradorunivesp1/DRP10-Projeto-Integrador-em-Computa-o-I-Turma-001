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
<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) { ?> 		

<?php include "pisem3k010.php" ?>
<center>

<table width="720">
	<tr>
		<td>
			<div class="caixa1"> Salas de Aula Cadastradas</div>
		</td>
	</tr>
	<tr>
		<td>
		<?php $sql_usala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` ORDER BY `pisno_b0003`.`id` DESC");
		while($linha_usala = mysqli_fetch_assoc($sql_usala)) {
		$id_usala			= $linha_usala['id'];
		$usala				= $linha_usala['sala'];
		$anoletivo_usala 	= $linha_usala['anoletivo'];
		$data_usala 		= $linha_usala['data'];
		$escolaridade_usala 	= $linha_usala['escolaridade'];
		$turma_usala 		= $linha_usala['turma'];
		$numero_usala 		= $linha_usala['numero'];
		$idescola_usala 	= $linha_usala['idescola'];
		?>
							<div class="imgassin21">
							<?php $sql_esc = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$idescola_usala'");
								while($linha_uesc = mysqli_fetch_assoc($sql_esc)) {
								$img_esc			= $linha_uesc['img'];
								$nome_esc			= $linha_uesc['escola'];
								$id_esc35			= $linha_uesc['id'];
								}
							?>
<?php if (empty($img_esc)) { $img_esc = "" ; } ?>		
<?php if (empty($nome_esc)) { $nome_esc = "" ; } ?>						
								
				<table border="0" width="214" height="135" >
					<tr>

						<td align="center"  width="75" height="75" 
								<?php 	$sql_esc35d = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$idescola_usala'");
										while($linha_uesc35d = mysqli_fetch_assoc($sql_esc35d)) {
										$img_esc			= $linha_uesc35d['img'];
								?>
								<?php if (empty($img_esc)) { ?>
									style="background:url("img02/escolaexclui.png"); border-radius:45px; opacity:0.4; width:75px; height:75px; " >
								<?php } else { ?>	
									style="background:url(<?php echo $img_esc ; ?>); border-radius:45px; opacity:0.4; width:75px; height:75px; " >  
								<?php } ?>	
							<?php } ?>
							Id: <font size="+3" style="opacity:2.0; " > <?php echo $id_usala ;?></font> 
						</td>	
						<td colspan="2" align="center" valign="top" style="padding-top:4px"> 
							<font  size="-1"><strong><?php echo $escolaridade_usala ;?></font> <br /> Turma: <font size="+2"><?php echo $turma_usala ;?></font></strong>
							<br />
							<center>
							<table>
								<tr>
									<td width="42" class="p3fg1">
										<div><strong><a href ="pisem3k036.php?id=<?php echo $id_usala ; ?>&b=1" > 1B </a></strong> </div> 
									</td>
									<td width="42" class="p3fg1">
										 <div><strong><a href="" > 2B </a></strong> </div> 
									</td>
									<td width="42" class="p3fg1">
										 <div><strong><a href="" > 3B </a></strong> </div> 
									</td >
									<td width="42" class="p3fg1">
										 <div><strong><a href="" > 4B </a></strong> </div> 
									</td>
								</tr>
							</table>	
							</center>		
						</td>
					</tr>
					<tr>
						<td > 
								 <center>
								 <font size="-2">Escola Ref: <?php echo $idescola_usala ; ?></font><br />
								 <?php 	$sql_esc35e = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id = '$idescola_usala' ");
										while($linha_uesc35e	= mysqli_fetch_assoc($sql_esc35e)) {
										$id_esc35e				= $linha_uesc35e['id'];
								?> 
								
									<?php  if ($id_esc35e != $idescola_usala) { ?>
											<?php echo "Essa Escola foi Deletada" . $id_esc35e . "=" .  $idescola_usala ; ?>
									<?php } else { ?>
											<br /><font size="-3" color="#FF0000">Sala Ref: <?php echo $id_usala  ; ?></font>
									<?php } ?>
									
								<?php } ?>
															
								 </center>
						</td>	
						<td> 
						<?php 	$sql_esc35e = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id = '$idescola_usala' ");
										while($linha_uesc35e	= mysqli_fetch_assoc($sql_esc35e)) {
										$id_esc35e				= $linha_uesc35e['id'];
						?> 
							<?php  if ($id_esc35e != $idescola_usala) { ?>
								<font size="-3" color="#FF0000"><?php echo "Deletar essa sala, pois a escola na qual ela estava ligada foi deletada" ; ?></font>
							<?php  } else {	?>
								<center>Ano Letivo: <strong><?php echo $anoletivo_usala ;?></strong><br />
								<font size="-2"><?php echo $nome_esc ; ?></font></center>
							<?php } ?>	
						<?php } ?>	
						</td>
						<td align="right"> 

						<div style="padding: 3px 3px 3px 3px ;"><a href="pisem3k028.php?id=<?php echo $id_usala ; ?>&ide=<?php echo $idescola_usala ; ?>&idvol=1" /><img src="img01/edita.png"/></a></div>	
						<div style="padding: 3px 3px 3px 3px ;"><a href="pisem3k030.php?id=<?php echo $id_usala ; ?>&ide=<?php echo $idescola_usala ; ?>&idvol=1" /><img src="img01/lixeira.png"/></a>	</div>
					</tr>
				</table>				
			</div>
		<?php } ?>	
		</td>
	</tr>
</table>			
</center>
<?php include "pisem3k002.html" ; ?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	