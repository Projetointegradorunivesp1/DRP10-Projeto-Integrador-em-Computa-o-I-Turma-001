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
		$loginuser = $linha_user['login'];
		$grupo = $linha_user['grupo'];
		$sexouser = $linha_user['sexo'];
		$nomeuser = $linha_user['nome'];
		}

?>
<?php include "pisem3k010.php" ?>
<center>

<!--- ------------------------------------------------------------------- ------------------------------------------------------------------->
<table width="720" border=0 >
	<tr>
		<td>
			<?php ## Se o usuário logado for professor - INICIO ?>
			<?php if ($grupo == "Professor" ) { ?> 
			<div class="caixa1">
				<?php if ($sexouser == "Feminino") { echo "Seja Bem vinda professora: " ; } else { echo "Seja Bem vindo professor: " ; } ; ?>
				<?php echo $nomeuser ;?>
			</div>

			<?php } ;?>	
			<?php ## Se o usuário logado for professor - FIM ?>
		</td>
	</tr>
	
</table>

<?php @$y = $_POST['escola'] ; ?>
<?php @$w = $_POST['bimestre'] ; ?>
<?php @$x = $_POST['anoletivo'] ; ?>




<form action="pisem3k034.php" name="form" method="post" enctype="multipart/form-data">
	<table width="720" border=0 >
		<tr>
			<td class="caixa5">
				<b> Escola: </b>
					<select name="escola" id="escola">
						<option></option>
						<?php $sql_escola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001`");
							while($linha_escola = mysqli_fetch_assoc($sql_escola)) {
								$escola 	= $linha_escola['escola'];
								$ides 		= $linha_escola['id'];
						?>
				 		<option><?php echo $escola ; ?></option>
				 		<?php } ;?>
				 	</select>
			</td>
			<td class="caixa5">
				<b>Bimestre: </b>
					<select name="bimestre" id="bimestre">
						<option></option>
				 		<option>1ºBimestre</option>
				 		<option>2ºBimestre</option>
				 		<option>3ºBimestre</option>
				 		<option>4ºBimestre</option>
				 	</select>
			</td>
			<td class="caixa5">
				<b>Ano letivo: </b>
					<select name="anoletivo" id="anoletivo">
						<option></option>
						<?php $sql_anoletivo = mysqli_query($mysqli,"SELECT * FROM `pisno_b0002` ");
							while($linha_anoletivo = mysqli_fetch_assoc($sql_anoletivo)) {
								$anoletivo	= $linha_anoletivo['anoletivo'];
								$escola 	= $linha_anoletivo['escola'];
								$idu2		= $linha_anoletivo['id'];
								$idescola	= $linha_anoletivo['idescola'];
						?>
				 		<option><?php echo $anoletivo." <font size='-3'>". substr($escola,0, 6)." </font>"; ?></option>
				 		<?php } ;?>
				 	</select>
			</td>
		</tr>
	</table>
<input type="submit" class="button_arrow" value="Listar / Cadastrar"   />
</form>

<?php ## Condição para selecinar a escola e as salas ?>
<?php if (@$y == "" and @$w == "" and @$x == "" ) { } else { ?>

<table width="720" border=0 >
	<tr>
		<td>
			<div class="caixa1">
				<?php echo "<font color=#0f0> Escola: </font> " . @$idpie . " <br> " . "<font color=#0f0>Período: </font>" .  $w .  " <br> " . "<font color=#0f0>Ano Letivo: </font>".  substr($x,0, 4) ; ?>
					
			</div>
		</td>
	</tr>
</table>

<form action="pisem3k045fx.php?idb=<?php echo $w ;?>" name="form" method="post" enctype="multipart/form-data">
	
				<?php $sql_salaid = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004` where prof='$id_user'");
					while($linha_salaid = mysqli_fetch_assoc($sql_salaid)) {
					$idsdissp 		= $linha_salaid['id'];
					$disciplinabsc 	= $linha_salaid['disciplina'];
					$idescolaid3 	= $linha_salaid['prof'];
					$idsalapisno4 	= $linha_salaid['idsala'];
				?>
					<input type="hidden" name="idsala" id="idsala" 	value="<?php echo $idsalapisno4; ?>" size="5">

					<table width="720" class="caixa5" border=0 >
						<tr >
							<td width="10">
								 <font>Nº</font>
							</td>
							
							<td  width="370" align="center" >
								<?php $sql_nomesala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id='$idsalapisno4'");
									while($linha_nomesala = mysqli_fetch_assoc($sql_nomesala)) {
									$nomesala 	= $linha_nomesala['escolaridade'];
									$anoletivo 	= $linha_nomesala['anoletivo'];

							?>
								<strong><?php echo $disciplinabsc . " [" . $idsdissp . "] " . "- <font color=#f00> [" . $nomesala . "] </font>" ;?></strong>
								<?php } ;?>
							</td>
							<td width="50">
								 <font size=-2>Mensal</font>
							</td>
							<td width="50">
								 <font size=-2>Bimestral</font>
							</td>
							<td width="50">
								 <font size=-2>Participação</font>
							</td>
							<td width="50">
								 <font size=-2>Simulado (Testes)</font>
							</td>

							<td width="50">
								 <font size=-2>Pontuação Bonus</font>
							</td>

							<td width="50">
								<font size=-2>Final do Bimestre</font>
							</td>
							
						</tr>
							<?php 
							if ($w == "1ºBimestre") {@$idbhere = 1;} ;
							if ($w == "2ºBimestre") {@$idbhere = 2;} ;
							if ($w == "3ºBimestre") {@$idbhere = 3;} ; 
							if ($w == "4ºBimestre") {@$idbhere = 4;} ;

							if (empty($idbhere)) { $idbhere = 0;}

							$sql_salaid2 = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where idsala='$idsalapisno4' ORDER BY `pisem_b0009cd`.`numaluno` ASC ");
								while($linha_salaid2 = mysqli_fetch_assoc($sql_salaid2)) {
								$nomeus2		= $linha_salaid2['nome'];
								$loginu2 		= $linha_salaid2['login'];
								$numaluno2 		= $linha_salaid2['numaluno'];
								$idu2 			= $linha_salaid2['id'];

								$i=0; 
								$id_e = $i++;

	
							?>
							<input type="hidden" name="iduser" id="iduser" 	value="<?php echo $idu2 ; ?>" size="5">

							<!----------------------------------------------------------------------------------------------------------------------------->	
							<?php 
									$sql_listar = mysqli_query($mysqli,"SELECT * FROM `pisno_b0005` where idbimestre='$idbhere'");
										while($linha_listar = mysqli_fetch_assoc($sql_listar)) {
										$mens		= $linha_listar['mensal'];
										$bimes		= $linha_listar['bimestral'];
										$parti		= $linha_listar['participacao'];
										$simul		= $linha_listar['simulado'];
										$bonus		= $linha_listar['bonus'];
										$final		= $linha_listar['finalbimestre'];
										$iduseredit = $linha_listar['iduser'];
										$iddiscedit = $linha_listar['iddisciplina'];
										$idbimmedit = $linha_listar['idbimestre'];
										$idsaladit 	= $linha_listar['idsala'];
										$idescodit 	= $linha_listar['idescola'];
								?>
							<?php  	} ;




							if (@$iduseredit == "" and @$iddiscedit == "" and @$idbimmedit == "" and  @$idsaladit == "" and @$iddiscedit == "") { 
							?>
							<?php @$y = $_POST['escola'] ; ?>
							<?php @$w = $_POST['bimestre'] ; ?>
							<?php @$x = $_POST['anoletivo'] ; ?>



							<?php } else { echo "<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k054.php?ide=$y&idb=$w&ida=$x'>" ; } ;

							?>
							<!----------------------------------------------------------------------------------------------------------------------------->
						<tr>
							<td width="10" align="rigth">
								 <font><?php echo $numaluno2 ; ?></font>
							</td>	
							<td>
								<?php echo $nomeus2 ; ?>
							</td>
							<td align="center">
								<input type="text" 	name="m<?php echo $numaluno2.$idu2.$idsdissp ; ?>" value=" " size="1">
								<input type="hidden" 	value="m<?php echo $numaluno2.$idu2.$idsdissp ; ?>" size="5">
							</td>
							<td align="center">
								<input type="text" name="b<?php echo $numaluno2.$idu2.$idsdissp ; ?>" value="" size="1">
								<input type="hidden" value="b<?php echo $numaluno2.$idu2.$idsdissp ;  ?>" size="5">
							</td>
							<td align="center">
								<input type="text" name="p<?php echo $numaluno2.$idu2.$idsdissp ; ?>" value="" size="1">
								<input type="hidden" value="p<?php echo $numaluno2.$idu2.$idsdissp ;  ?>" size="5">
							</td>
							<td align="center">
								<input type="text" name="s<?php echo $numaluno2.$idu2.$idsdissp ; ?>" value="" size="1">
								<input type="hidden" value="s<?php echo $numaluno2.$idu2.$idsdissp ;  ?>" size="5">
							</td>
							<td align="center">
								<input type="text" name="o<?php echo $numaluno2.$idu2.$idsdissp ; ?>" value="" size="1">
								<input type="hidden" value="o<?php echo $numaluno2.$idu2.$idsdissp ;  ?>" size="5">
							</td>
							<td align="center">
								<input type="text" 	name="f<?php echo $numaluno2.$idu2.$idsdissp ; ?>" value="" size="1">
								<input type="hidden" 	value="f<?php echo $numaluno2.$idu2.$idsdissp ;  ?>" size="5">
							</td>
						</tr>
								
							

						<?php } ?>	
						<input type="hidden" name="anoletivo" value="<?php echo $anoletivo ; ?>">
					</table>
				<?php } ;?>
				<br>
<input type="submit" class="button_arrow" value="Salvar"   />
</form>
<!--- ------------------------------------------------------------------- ------------------------------------------------------------------->




<!--- ------------------------------------------------------------------- ------------------------------------------------------------------->
<?php ## Se o usuário logado for Aluno - INICIO ?>
<table width="720" border=0 >
	<tr>
		<td>
<?php if ($grupo == "Aluno" ) { ?> 
			<div class="caixa1">
				<?php if ($sexouser == "Feminino") { echo "Seja Bem vinda: " ; } else { echo "Seja Bem vindo: " ; } ; ?>
				<?php echo $nomeuser ;?>
			</div>
<?php } ?>
		<td>
	</tr>
</table>
<?php ## Se o usuário logado for Aluno - FIM ?>
<!--- ------------------------------------------------------------------- ------------------------------------------------------------------->
<?php } ?>

</center>
<?php include "pisem3k002.html" ; ?>

<?php } ?>	