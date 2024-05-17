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
<?php 

		$id_anoletivo	= $_GET['id'];	
		$id_escola		= $_GET['id_e'];
 include "pisem3k010.php" ?>
<center>

<table width="720" border="0" >
  <tr>
    <td valign="bottom">
	<div class="">
		<?php 
		$sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$id_escola'") or die("Erro");
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
					<a href="pisem3k016.php?id=<?php echo $id_e ; ?>"> <img class="p2fg1" src="img01/b_edit.png"/ width="35"> </a>
					<a href="pisem3k017.php?id=<?php echo $id_e ; ?>"><img class="p2fg1" src="img01/b_excluir.png"/ width="35"> </a>
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
	<form action="pisem3k023fx.php" name="form" method="post" enctype="multipart/form-data">
	<?php $sqlescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0002` where id='$id_anoletivo'") or die("Erro");
				while($dadosescola=mysqli_fetch_assoc($sqlescola))
					{
						$anoletivoedit 		= $dadosescola['anoletivo'] ;
						$anoletivoeditid 		= $dadosescola['id'] ;

					?>
	
		<div class="caixa1"> Editar Ano Letivo em: <?php echo $escola ; ?> -
		
		 
			  <strong>Ano: </strong> 
			  <input name="anoletivo" 	type="text" 	id="anoletivo" 	size="6" value="<?php echo $anoletivoedit ; ?>" />
			  <input  name="escola" 	type="hidden"	id="escola" 	value="<?php echo $escola; ?>" />
			  <input  name="ide" 		type="hidden"	id="ide" 	value="<?php echo $id_e; ?>" />
			  
			  <input type="hidden" name="idescola" id="idescola" value="<?php echo $id_escola ; ?>" />
			  <input type="hidden" name="idanoletivo" id="idanoletivo"  value="<?php echo $anoletivoeditid ; ?>"/>
			  <input type="submit" value="<?php echo $edicconfirm2  ; ?>" />
		</form>
		<?php
					}
					?>
		</div>
	</td>
	</tr>
	<td>

		</td>
	</tr>
</table>
<?php include "pisem3k002.html" ?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php 	} ?>