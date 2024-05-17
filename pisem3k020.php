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

$id_get = $_GET['id'];
$login_user = $_SESSION['login_session_user'];
		$senha_user = $_SESSION['senha_session_user']; 
		$sql_user = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where login = '$login_user' AND senha = '$senha_user'");
		while($linha_user = mysqli_fetch_assoc($sql_user)) {
		$id_user = $linha_user['id'];
		$cssuser = $linha_user['login'];
		$grupo = $linha_user['grupo'];
		}
		?>
<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) { ?> 

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

<table width="720" border="0" >
  <tr>
    <td valign="bottom" align="center">
	<form action="pisem3k021fx.php" name="form" method="post" enctype="multipart/form-data">
		<div class="caixa1"> Cadastrar Ano Letivo em: <?php echo $escola ; ?> -
		
		 
			  <strong>Ano: </strong> 
			  <input name="anoletivo" 	type="text" 	id="anoletivo" 	size="6" />
			  <input  name="escola" 	type="hidden"	id="escola" 	value="<?php echo $escola; ?>" />
			  <input  name="ide" 		type="hidden"	id="ide" 	value="<?php echo $id_e; ?>" />
			  
			  <input type="hidden" name="ip" id="ip" value="<?php echo getenv("remote_ADDR"); ?>" />
			  <input type="hidden" name="hora" id="hora"  value="<?php echo date("H"); ?>h<?php echo date("i"); ?>m<?php echo date("s"); ?>s"/>
			  <input type="hidden" name="data" id="data"  value="<?php echo date("d/m/Y"); ?>" />
			  <input type="hidden" name="idesc" id="idesc"  value="<?php echo $id_get ; ?>" />
			  <input type="submit" value="Cadastrar" />
		</form>
		</div>
	</td>
	</tr>
	<td>
	<?php $sqlanoletivo = mysqli_query($mysqli,"SELECT * FROM `pisno_b0002` where idescola='$id_get' ORDER BY `pisno_b0002`.`anoletivo` DESC ") or die("Erro");
				while($dadosano=mysqli_fetch_assoc($sqlanoletivo))
					{
						$escola 		= $dadosano['escola'] ;
						$idescola 		= $dadosano['idescola'] ;
						$anoletivo 		= $dadosano['anoletivo'] ;
						$anoletivoid 	= $dadosano['id'] ;

					?>
				
						<div class="caixa2">
						<?php echo 	$anoletivo ; ?>	 - <?php echo $escola ; ?> [<?php echo $anoletivoid ; ?>]
						</div>
						<div  class="" align="right" > 
					<a href="pisem3k022.php?id=<?php echo $anoletivoid ; ?>&id_e=<?php echo $id_get ; ?>"> <img class="p2fg1" src="img01/b_edit.png"/ width="23"> 		</a>
					<a href="pisem3k024.php?id=<?php echo $anoletivoid ; ?>&id_e=<?php echo $id_get ; ?>"> <img class="p2fg1" src="img01/b_excluir.png"/ width="23"> 	</a>
					</div>

					<?php
					}
					?>
					</div>
	</td>
	</tr>
</table>

</center>
<?php include "pisem3k002.html" ; ?>
<?php } else { echo "
	<META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'>
	
";
; } ?> 
<?php } ?>	