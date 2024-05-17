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

<table width="720" border="0" >
  <tr>
	<td>
	<div class="caixa2">
	 <strong>Cadastro de Disciplina na Sala: </strong> 
	 <select name="opescol" id="opescol">
			<?php 	$sqlssescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where 	idescola='$id_get' ORDER BY `pisno_b0003`.`anoletivo` DESC") or die("Erro");
		while($dadosssescola=mysqli_fetch_assoc($sqlssescola))
			{
				$escolaridade 		= $dadosssescola['escolaridade'] ;
				$anoletivo 			= $dadosssescola['anoletivo'] ;
				$turma 				= $dadosssescola['turma'] ;
				$idsala 			= $dadosssescola['id'] ;
			?>
			<option><?php echo $idsala  . " &nbsp;  - " . $anoletivo .  " - " . $escolaridade .  " - Turma: " . $turma  ; ?></option> 
			<?php	
			}
			?>
		</select>
		<br /><br />
		<div>
		<strong>Disciplina 01:</strong> 
		<select id="" name="" >
		<?php 	
			$sqlssdis = mysqli_query($mysqli,"SELECT * FROM `pisno_b0004`");
			while($dadossdiscipl=mysqli_fetch_assoc($sqlssdis))
			{
				$disciplina 		= $dadossdiscipl['disciplina'] ;
				$iddisciplina		= $dadossdiscipl['id'] ;
				$profdisciplina		= $dadossdiscipl['prof'] ;
		?>	
		
		<?php 	
			$sqlsprofs = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where id = '$profdisciplina' ");
			while($dadossdisciplsprofs = mysqli_fetch_assoc($sqlsprofs))
			{
				$loginuserfs		= $dadossdisciplsprofs['login'] ;
				}
		?>	
			
		<option><?php echo $disciplina ; ?> / <?php echo $loginuserfs ; ?></option>
		<?php } ?>
 		</select>
		
		</div>
		<br />
		
	</div>
	</td>
</tr>
</table>
</div>
</center>
<?php include "pisem3k002.html" ; ?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	