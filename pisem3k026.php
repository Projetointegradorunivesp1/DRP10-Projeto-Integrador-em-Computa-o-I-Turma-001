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

<?php $id_get = $_GET['id'];

?>
<?php include "pisem3k010.php" ?>
<center>

<table width="720" border="0" >
  <tr>
    <td valign="bottom">
	<div class="">
		<?php 
		$sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$id_get'") or die("Erro");
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
					<?php include "pisem3k042.php" ; ?>
					</div>
					<br />
					<?php
					}
					?>
					</div>
	</td>
	</tr>
</table>
<div class="caixa2">
<form action="pisem3k027fx.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="idescola" id="idescola" value="<?php echo $id_get ; ?>"/  />
<table width="720" border="0" >
  <tr>
    <td valign="bottom" align="center">
	<strong>Cadastro de Sala:</strong>
	</td>
	</tr>
	<td>
	<strong><?php echo $serieano ; ?> </strong>
			<select name="ecolaridade" id="ecolaridade" />
			<option></option>
		  	<option><?php echo $sia1f ; ?></option>
		    <option><?php echo $sia2f ; ?></option>
		    <option><?php echo $sia3f ; ?></option>
			<option><?php echo $sia4f ; ?></option>
			<option><?php echo $sia5f ; ?></option>
			<option><?php echo $sia6f ; ?></option>
			<option><?php echo $sia7f ; ?></option>
			<option><?php echo $sia8f ; ?></option>
			<option><?php echo $sia9f ; ?></option>
			<option><?php echo $sia1mf ; ?></option>
			<option><?php echo $sia2mf ; ?></option>
			<option><?php echo $sia3mf ; ?></option>
			<option><?php echo $sia4mf ; ?></option>
			<option>Recursos Diversos</option>
	      	</select>
			

			
	     &nbsp; &nbsp;&nbsp;<strong> Turma:</strong> 
		  	<select name="turma" id="turma" />
		  	<option>A</option>
			<option>B</option>
			<option>C</option>
			<option>D</option>
			<option>E</option>
			<option>F</option>
	      	</select>
			

			
			
	 		&nbsp;&nbsp;&nbsp; <strong> Ano Letivo:</strong> 	
		 	<select name="anoletivo" id="anoletivo" />
			<?php if (empty($id_e)) {$id_e = "" ;} ?>
		 	<?php $sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0002`  where idescola='$id_e' ORDER BY `pisno_b0002`.`anoletivo` DESC ") or die("Erro");
				while($dadosescola=mysqli_fetch_assoc($sqlescola))
					{
					$anoletivo 		= $dadosescola['anoletivo'] ;
					$id_a 			= $dadosescola['id'] ;
					?>
		  	<option><?php echo $anoletivo  ; ?></option>
			<?php } ?>
	      	</select>
			
			&nbsp;&nbsp;&nbsp;<strong><?php echo $nsala ; ?></strong> <input type="text" name="numero" id="numero" size="1" />
			
			<br />	<br />	
			<div align="right"><input type="submit" value="Cadastrar" />&nbsp;&nbsp;&nbsp;&nbsp;</div>	
	</td>
	</tr>
</table>
</form>
</div>
<br />
<div class="caixa2">
<table width="720" border="0" >
	<tr>
		<td> <strong>Escolaridade</strong> </td>
		<td align="center" > <strong>Tuma</strong> </td>
		<td align="center"> <strong><?php echo $nsala ; ?></strong> </td>
		<td align="center"> <strong><?php echo $anoletivosdet ; ?></strong> </td>
		<td align="center"> <strong><?php echo $adm ; ?></strong> </td>
	</tr>	


  	<?php 

  	$sqlsala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003`  where idescola='$id_get' ORDER BY `pisno_b0003`.`escolaridade` DESC ") or die("Erro");
		while($dadossala=mysqli_fetch_assoc($sqlsala))
		{
			$anoletivo 		= $dadossala['anoletivo'] ;
			$sala 			= $dadossala['sala'] ;
			$escolaridade	= $dadossala['escolaridade'] ;
			$turma			= $dadossala['turma'] ;
			$numero			= $dadossala['numero'] ;
			$idsala			= $dadossala['id'] ;

		?>
	<tr>	
   	 <td valign="top" align="">
		<?php echo $escolaridade ; ?> 
	</td>
	<td valign="top" align="center">
		<?php echo $turma ; ?> 
	</td>
	<td valign="top" align="center">
		<?php echo $numero ; ?>
	</td>
	<td valign="top" align="center">
		<?php echo $anoletivo ; ?>
	</td>
	<td valign="top" align="center">
		<a href="pisem3k028.php?id=<?php echo $idsala ; ?>&ide=<?php echo $id_e ; ?>&idvol=0"><img class="p2fg1" src="img01/b_edit.png"/ width="23"> </a>
		<a href="pisem3k030.php?id=<?php echo $idsala ; ?>&ide=<?php echo $id_e ; ?>&idvol=0"> <img class="p2fg1" src="img01/b_excluir.png"/ width="23"> 	</a>
	</td>
	</tr>
	<?php } ?>
</table>
</div>
</center>
<?php include "pisem3k002.html" ; ?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	