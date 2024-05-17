<?php Session_start(); ?>
<?php include "pisem3k000.php" ?>
<?php include "pisem3k001.php" ?>
<link rel="stylesheet" href="stylesheet.css">
<script src="jquery-2.1.4.min.js"></script>
<script src="javascript.js"></script>
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
		$idsala 	= $_GET['idsala'];
		$idbim 		= $_GET['idbim'];
		$idn 		= $_GET['idn'];
		$iddis 		= $_GET['iddis'];
		$idaluno 	= $_GET['idaluno'];
		$ida 		= $_GET['ida'];
		$idescola	= $_GET['idescola'];
		
		?>
<form action="pisem3k048fx.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="idsala" id="idsala" value="<?php echo $idsala ; ?>" />
<input type="hidden" name="idbim" id="idbim" value="<?php echo $idbim ; ?>"/  />
<input type="hidden" name="idn" id="idn" value="<?php echo $idn ; ?>" />
<input type="hidden" name="iddis" id="iddis" value="<?php echo $iddis ; ?>"/  />
<input type="hidden" name="idaluno" id="idaluno" value="<?php echo $idaluno ; ?>" />
<input type="hidden" name="ida" id="ida" value="<?php echo $ida ; ?>" />
<input type="hidden" name="idescola" id="idescola" value="<?php echo $idescola ; ?>" />
	
	   
	<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) { ?>
		<?php include "pisem3k010.php" ?>
		<center>
		
		<table width="720" border="0">
			<tr >	
				<td colspan="2">
					<div class="caixa1" >
					<?php $sql_aluno = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where id = '$idaluno'");
						while($linha_aluno = mysqli_fetch_assoc($sql_aluno)) {
							$alunonome 	= $linha_aluno['nome'];
							$imgaluno	= $linha_aluno['avatar'];
					?>
					<div> [ <?php echo  $idn ; ?> ] <?php echo  $alunonome ; ?> </div>
					<?php } ?>	
				</td>
				<td>
				<img src="<?php echo  $imgaluno ; ?>" class="imgaluno"/>
				</td>
			</tr>
			<tr>	
					
				<td >
				<?php $sql_sala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id = '$idsala'");
						while($linha_sala = mysqli_fetch_assoc($sql_sala)) {
							$salae = $linha_sala['ecolaridade'];
							$turmae = $linha_sala['turma'];
							$anoletivoe = $linha_sala['anoletivo'];
							$idescolae = $linha_sala['idescola'];
					?>
				<div class="caixa1"> Sala: <?php echo  $salae ; ?> Turma: <?php echo  $turmae ; ?> [<?php echo  $anoletivoe ; ?>] [<?php echo  $idescolae ; ?>] </div> 
				<?php } ?>	
				</td>
				<td>
				<?php $sql_escolae = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id = '$idescolae'");
						while($linha_escola = mysqli_fetch_assoc($sql_escolae)) {
							$escola = $linha_escola['escola'];
							$img = $linha_escola['img'];

					?>
				<div class="caixa1">Escola: <?php echo  $escola ; ?>	 </div> 
				<?php } ?>		
				</td>
				<td>
				<img class="imgaluno" src="<?php echo  $img ; ?> "
				</td>
			</tr>
		</table>
		</div>
		
		<table align="center" width="770" class="caixa2" border="0">
			<tr>
				<td>
				<?php $sql_disce = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004` where id = '$iddis'");
						while($linha_discipl = mysqli_fetch_assoc($sql_disce)) {
							$disciplina = $linha_discipl['disciplina'];
							$idprof 		= $linha_discipl['prof'];

					?>
				<div class="">Disciplina: <strong><?php echo  $disciplina ; ?></strong>	 </div> 
				<?php } ?>	
				</td>
			</tr>
		</table>

		
		<table align="center" width="770" class="caixa2" border="0">
			<tr>
				<td class="foo2" valign="center" align="right" >
				<strong><?php echo $mensao ; ?> 1: </strong>
				</td>
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $mensao ; ?> 2:</strong>
				</td>
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $mensao ; ?> 3:</strong>
				</td>
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $mensao ; ?> 4:</strong>
				</td>
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $mensao ; ?> 5:</strong>
				</td>
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $mensao ; ?> 6:</strong>
				</td >
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $avaliacaoM ; ?>: </strong>
				</td >
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $avaliacaoB ; ?>: </strong>
				</td >
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $participacao ; ?>: </strong>
				</td >
				<td class="foo2" valign="center" align="right">
				<strong><?php echo $simulado ; ?>: </strong>
				</td >
				
				<td>
				&nbsp;&nbsp;
				</td>
				
				<td class="foo" class="foo2" valign="center" align="right">
				<strong><?php echo $fparcial ; ?>: </strong>
				</td >
				<td class="foo" class="foo2" valign="center" align="right">
				<strong><?php echo $recup ; ?>: </strong>
				</td >
				
				<td>
				&nbsp;&nbsp;
				</td>
				
				<td class="foo" class="foo2" valign="center" align="right">
				<strong><?php echo $FinalB ; ?>: </strong>
				</td >
			</tr>
			<tr>
					<?php 
					
					$sql_discipl2 = mysqli_query($mysqli,"SELECT * FROM `pisno_b0007` where 
						idn			=	'$idn' 		and 
						iddis		=	'$iddis' 		and 
						idbimestre	=	'$idbim' 		and 
						idsala		=	'$idsala' 	and
						idaluno		=	'$idaluno' 	and
						anoletivo	=	'$ida' 		and
						escola		=	'$idescola'
						
						");
							while($linha_discipl2 = mysqli_fetch_assoc($sql_discipl2)) {
							$id_linha_discipl2 = $linha_discipl2['id'];
							$id_linha_discipl3 = $linha_discipl2['iddis'];
							$id_linha_discipl4 = $linha_discipl2['idn'];
							$id_linha_discipl5 = $linha_discipl2['idbimestre'];
							$id_linha_discipl6 = $linha_discipl2['idsala'];
							$id_linha_discipl7 = $linha_discipl2['escola'];
							$id_linha_discipl8 = $linha_discipl2['anoletivo'];
							$id_linha_discipl9 = $linha_discipl2['disciplina'];
							
							$id_linha_discip20me1 = $linha_discipl2['mensao1'];
							$id_linha_discip20me2 = $linha_discipl2['mensao2'];
							$id_linha_discip20me3 = $linha_discipl2['mensao3'];
							$id_linha_discip20me4 = $linha_discipl2['mensao4'];
							$id_linha_discip20me5 = $linha_discipl2['mensao5'];
							$id_linha_discip20me6 = $linha_discipl2['mensao6'];
							
							$id_linha_discip20me7 = $linha_discipl2['mensal'];
							$id_linha_discip20me8 = $linha_discipl2['bimestral'];
							$id_linha_discip20me9 = $linha_discipl2['participacao'];
							$id_linha_discip20me10 = $linha_discipl2['simulado'];
							$id_linha_discip20me11 = $linha_discipl2['parcial'];
							$id_linha_discip20me12 = $linha_discipl2['recuperacao'];
							
							$id_linha_discip20me13 = $linha_discipl2['finalbimestre'];
							
							}

					?>
				<td class="foo">
				<input type="text" size="1" name="me1" id="me1" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me1  ; }?>" />
				</td>
				<td>
				<input type="text" size="1" name="me2" id="me2" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me2  ; }?>"/>
				</td>
				<td>
				<input type="text" size="1" name="me3" id="me3" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me3  ; }?>"/>
				</td>
				<td>
				<input type="text" size="1" name="me4" id="me4" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me4  ; }?>"/>
				</td>
				<td>
				<input type="text" size="1" name="me5" id="me5" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me5  ; }?>"/>
				</td>
				<td>
				<input type="text" size="1" name="me6" id="me6" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me6  ; }?>"/>
				</td>
				<td>
				<input type="text" size="1" name="mensal" id="mensal" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me7  ; }?>"/>
				</td>
				<td>
<input type="text" size="1" name="bimestral" id="bimestral" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me8  ; }?>"/>
				</td>
				<td>
				<?php 
				
				if (empty($id_linha_discip20me1)) { $id_linha_discip20me1 = "0.00" ;} 
				if (empty($id_linha_discip20me2)) { $id_linha_discip20me2 = "0.00" ;}
				if (empty($id_linha_discip20me3)) { $id_linha_discip20me3 = "0.00" ;}
				if (empty($id_linha_discip20me4)) { $id_linha_discip20me4 = "0.00" ;}
				if (empty($id_linha_discip20me5)) { $id_linha_discip20me5 = "0.00" ;}
				if (empty($id_linha_discip20me6)) { $id_linha_discip20me6 = "0.00" ;}
				if (empty($id_linha_discip20me7)) { $id_linha_discip20me7 = "0.00" ;}
				if (empty($id_linha_discip20me8)) { $id_linha_discip20me8 = "0.00" ;}
				if (empty($id_linha_discip20me9)) { $id_linha_discip20me9 = "0.00" ;}
				if (empty($id_linha_discip20me10)) { $id_linha_discip20me10 = "0.00" ;}
				if (empty($id_linha_discip20me11)) { $id_linha_discip20me11 = "0.00" ;}
				if (empty($id_linha_discip20me12)) { $id_linha_discip20me12 = "0.00" ;}
				if (empty($id_linha_discip20me13)) { $id_linha_discip20me13 = "0.00" ;}
				
				
				$wi = 
				$id_linha_discip20me1 + 
				$id_linha_discip20me2 + 
				$id_linha_discip20me3 + 
				$id_linha_discip20me4 + 
				$id_linha_discip20me5 + 
				$id_linha_discip20me6 ;
				
				$w2 = $wi/6 ;
				?>
				
<input type="text" size="1" name="particip" id="particip" value="<?php echo $w2 ; ?>"/>
				</td>
				<td>
<input type="text" size="1" name="simulado" id="simulado" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me10  ; }?>"/>
				</td>
				<td>
				&nbsp;&nbsp;&nbsp;
				</td>
				<td>
				<?php 
				$wii =
				$id_linha_discip20me7 + 
				$id_linha_discip20me8 +
				$id_linha_discip20me9 + 
				$id_linha_discip20me10 ;

				$w3 = $wii/4 ;
				?>
				
				
				<input type="text" size="2" name="finalparcial" id="finalparcial"  value="<?php echo $w3 ; ?>" readonly/>
				</td>
				<td>
<input type="text" size="1" name="recuperac" id="recuperac" value="<?php if (empty($id_linha_discip20me1)) { echo "" ; } else { echo $id_linha_discip20me12 ; }?>"/>
				</td>
				<td>
				&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td>
				<?php
				$wiii =
				$id_linha_discip20me11 + $id_linha_discip20me12 ; 
				
				$w4 = $wiii/2 ; 
				?>
<?php if (empty($id_linha_discip20me13) or $id_linha_discip20me13 == "0.00") { $w4 = $wiii/2 ; } else { $w4 = $id_linha_discip20me13 ; } ; ?>				
<input type="text" size="1" name="finalbimestral" id="finalbimestral" value="<?php  echo $w4 ; ?>"/>
<?php  ?>
				</td>
			</tr>
			<tr>
				<td colspan="15" align="center" valign="bottom" height="45">
				<br />
					<table border="0">
						<tr>
							<td align="center" valign="top">
								<input type="submit" size="1" value="<?php echo $calcmedia ; ?>" />
								<input type="submit" size="1" value="<?php echo $lanatualiz ; ?>" />
								&nbsp;&nbsp;&nbsp;
								
								&nbsp;&nbsp;&nbsp;
								</form>
							</td>
							<td align="center" valign="bottom">
							<form action="pisem3k049fx.php" name="form" method="post" enctype="multipart/form-data">
<?php 
$idsala 	= $_GET['idsala'];
		$idbim 		= $_GET['idbim'];
		$idn 		= $_GET['idn'];
		$iddis 		= $_GET['iddis'];
		$idaluno 	= $_GET['idaluno'];
		$ida 		= $_GET['ida'];
		$idescola	= $_GET['idescola'];
		
?>
<input type="hidden" name="idsala" id="idsala" value="<?php echo $idsala ; ?>" />
<input type="hidden" name="idbim" id="idbim" value="<?php echo $idbim ; ?>"/  />
<input type="hidden" name="idn" id="idn" value="<?php echo $idn ; ?>" />
<input type="hidden" name="iddis" id="iddis" value="<?php echo $iddis ; ?>"/  />
<input type="hidden" name="idaluno" id="idaluno" value="<?php echo $idaluno ; ?>" />
<input type="hidden" name="ida" id="ida" value="<?php echo $ida ; ?>" />
<input type="hidden" name="idescola" id="idescola" value="<?php echo $idescola ; ?>" />
<input type="submit" size="1" value="<?php echo $recalc ; ?>">
</form>
							</td>
							<td align="center" valign="bottom">
							
							</td>
							<td align="center" valign="bottom">
						<form action="pisem3k036.php?id=<?php echo $idsala ; ?>&b=<?php echo $idbim ; ?>" name="form" method="post" enctype="multipart/form-data">
<input type="submit" size="1" value="<?php echo $voltar ; ?>" >
</form>
							</td>
						</tr>
					</table>



				</td>
			</tr>	
		</table>	


		</center>
	<?php } else {  
		echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
		exit;
	} ?> 		
<?php } ?>			