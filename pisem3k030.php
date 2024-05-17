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
<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) {

$id_get = $_GET['id'];
$ide_get = $_GET['ide'];
$idvol = $_GET['idvol'];

?>
<?php include "pisem3k010.php" ?>
<center>

<table width="720" border="0" >
  <tr>
    <td valign="bottom">
	<div class="">
		<?php 
		$sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$ide_get'") or die("Erro");
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
					<div class="imgassin16"> 
					<img src="<?php echo $img ;	?>" />
					<?php echo $id_e . " - <font size=+2>" . $escola . "</font>" 	;	?> <br />	
					<strong>End:	</strong> 	<?php echo $endereco  	;	?>  <br />	
					<strong>CNPJ: 	</strong>	<?php echo $cnpj  		;	?>  <br />	
					<strong>Tel:	</strong> 	<?php echo $tel1  		;	?>  <br />
					</div>
					</a>
					
					<div  class="" align="right" > 
					<a href="pisem3k026.php?id=<?php echo $id_e ; ?>"><abbr title='Cadastrar Sala'><img class="p2fg1" src="img01/b_addsala.png"/ width="35"> </abbr></a>
					<a href="pisem3k016.php?id=<?php echo $id_e ; ?>"> <abbr title='Editar essa escola'> <img class="p2fg1" src="img01/b_edit.png"/ width="35"> </a>
					<a href="pisem3k017.php?id=<?php echo $id_e ; ?>"> <abbr title='Excluir essa escola'><img class="p2fg1" src="img01/b_excluir.png"/ width="35"> </a>
					</div>
					<br />
					<?php
					}
					?>
					</div>
	</td>
	</tr>
</table>
<div class="caixa3">
<form action="pisem3k031fx.php?id=<?php echo $id_get ; ?>&ide=<?php echo $ide_get ; ?>" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="idescola" id="idescola" value="<?php echo $id_get ; ?>"/  />
<input type="hidden" name="idvol" id="idvol" value="<?php echo $idvol ; ?>"  />
<table width="720" border="0" >
  <tr>
    <td valign="bottom" align="center">
	<strong><?php echo "Excluir Sala" ; ?></strong>
	</td>
	</tr>
	<td>
	<strong><?php echo $serieano ; ?> </strong>
			<select name="escolaridade" id="escolaridade" />
			<?php $sqlsala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003`  where id='$id_get'") or die("Erro");
				while($dadossala=mysqli_fetch_assoc($sqlsala))
				{
			$escolaridade 		= $dadossala['escolaridade'] ;
			?>
			<?php } ?>
			<option><?php echo $escolaridade  ; ?></option>
			
		  	<?php if ($sia1f == $escolaridade) {} else { echo "<option>" . $sia1f . "</option>" ;} ; ?>
		    <?php if ($sia2f == $escolaridade) {} else { echo "<option>" . $sia2f . "</option>" ;} ; ?>
		    <?php if ($sia3f == $escolaridade) {} else { echo "<option>" . $sia3f . "</option>";} ; ?>
			<?php if ($sia4f == $escolaridade) {} else { echo "<option>" . $sia4f . "</option>";} ; ?>
			<?php if ($sia5f == $escolaridade) {} else { echo "<option>" . $sia5f . "</option>";} ; ?>
			<?php if ($sia6f == $escolaridade) {} else { echo "<option>" . $sia6f . "</option>";} ; ?>
			<?php if ($sia7f == $escolaridade) {} else { echo "<option>" . $sia7f . "</option>";} ; ?>
			<?php if ($sia8f == $escolaridade) {} else { echo "<option>" . $sia8f . "</option>";} ; ?>
			<?php if ($sia9f == $escolaridade) {} else { echo "<option>" . $sia9f . "</option>";} ; ?>
			<?php if ($sia1mf == $escolaridade) {} else { echo "<option>" . $sia1mf . "</option>";} ; ?>
			<?php if ($sia2mf == $escolaridade) {} else { echo "<option>" . $sia2mf . "</option>";} ; ?>
			<?php if ($sia3mf == $escolaridade) {} else { echo "<option>" . $sia3mf . "</option>";} ; ?>
			<?php if ($sia4mf == $escolaridade) {} else { echo "<option>" . $sia4mf . "</option>";} ; ?>
			<?php if ("Recursos Diversos" == $escolaridade) {} else { echo "<option>Recursos Diversos</option>" ;} ; ?>
	      	</select>
			

			
	     &nbsp; &nbsp;&nbsp;<strong> Turma:</strong> 
		  	<select name="turma" id="turma" />
			<?php $sqlsala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003`  where id='$id_get'") or die("Erro");
				while($dadossala=mysqli_fetch_assoc($sqlsala))
				{
			$turma 		= $dadossala['turma'] ;
			} ?>
			
			<option><?php echo $turma  ; ?></option>
			<?php if ("A" == $turma) {} else { echo "<option>A</option>" ; } ; ?></option>
		  	<?php if ("B" == $turma) {} else { echo "<option>B</option>" ; } ; ?></option>
			<?php if ("C" == $turma) {} else { echo "<option>C</option>" ; } ; ?></option>
			<?php if ("D" == $turma) {} else { echo "<option>D</option>" ; } ; ?></option>
			<?php if ("E" == $turma) {} else { echo "<option>E</option>" ; } ; ?></option>
			<?php if ("F" == $turma) {} else { echo "<option>F</option>" ; } ; ?></option>
	      	</select>
			
	 		&nbsp;&nbsp;&nbsp; <strong> Ano Letivo:</strong> 	
		 	<select name="anoletivo" id="anoletivo" />
			<?php $sqlsala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003`  where id='$id_get'") or die("Erro");
				while($dadossala=mysqli_fetch_assoc($sqlsala))
				{
			$anoletivow 		= $dadossala['anoletivo'] ;
			} ?>
			<option><?php echo $anoletivow  ; ?></option>
		 	<?php 
			
			if (empty($id_e)) { $id_e = "" ; }
			$sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0002`  where idescola='$id_e' ORDER BY `pisno_b0002`.`anoletivo` DESC ") or die("Erro");
				while($dadosescola=mysqli_fetch_assoc($sqlescola))
					{
					$anoletivo 		= $dadosescola['anoletivo'] ;
					$id_a 			= $dadosescola['id'] ;
					?>
			<?php if ($anoletivo == $anoletivow) {} else { echo "<option>" . $anoletivo . "</option>" ; } ; ?>		
		  	
			
			
			<?php } ?>
	      	</select>
			
			&nbsp;&nbsp;&nbsp;<strong><?php echo $nsala ; ?></strong> 
			
			
					<?php $sqlescolasala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id='$id_get'") or die("Erro");
					while($dadosescolasala=mysqli_fetch_assoc($sqlescolasala))
					{
					$numero	= $dadosescolasala['numero'] 	;
					$id_a 	= $dadosescolasala['id'] 	;
					}?>
			 
			 <input type="text" name="numero" id="numero" size="1" value="<?php echo $numero ; ?>" />
			
			<br />	<br />	
			<div align="right"><input type="submit" value="<?php echo $exclconfirm2 ; ?>" />&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<br />
			<font color="#FFFF00"><?php echo $deletarinfo ; ?></font>	
	</td>
	</tr>
</table>
</form>
</div>

</center>
<?php include "pisem3k002.html" ; ?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	