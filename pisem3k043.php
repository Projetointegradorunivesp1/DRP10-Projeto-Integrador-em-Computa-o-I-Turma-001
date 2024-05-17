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

 <?php if (empty($_GET['id'])) {  $idesc = "" ; } else { $idesc = $_GET['id'] ; } ?>
	 
<table width="720" border="0" >
  <tr>
	<td>
	<div class="caixa1">
	 <strong>Cadastro de Disciplina: </strong> 
	</div>
	<div class="caixa2"> 
	<br />
	 <form action="pisem3k044fx.php"  name="form" method="post" enctype="multipart/form-data">
	 <?php echo $cadfrfisl	; ?> 
	 <input type="text" id="disciplina" name="disciplina" size="36"  /><br /><br /> 
	 <input type="hidden" name="idescola" id="idescola" value="<?php echo $idesc ; ?>"  />
	 Escolha o professor desssa disciplina: 
	 <select id="prof" name="prof" >
	 	<?php $sql_prof = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where grupo = 'Professor'");
		while($linha_prof = mysqli_fetch_assoc($sql_prof)) {
		$prof_nome = $linha_prof['nome'];
		?>

		Aqui aqui aqui ....... 

		<option> <?php echo $prof_nome ; ?> </option>
		<?php } ?>
	 </select>	
	 <br /><br />  
	 <?php echo $sdisciplinaper ; ?>
	 


	 <select id="salai" name="salai" >
	 	<?php 

	 		echo " aqui " . $idesc ;

	 		if (empty($idesc)) { } else {
			 	$sql_escolaw43 = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where idescola = '$idesc'");
				while($linha_escolaw43 = mysqli_fetch_assoc($sql_escolaw43)) {
				$id_escolaw43 = $linha_escolaw43['id'];
				$sala_escolaw43 = $linha_escolaw43['escolaridade'];
				$turma_escolaw43 = $linha_escolaw43['turma'];
				?>
				<option> <?php echo $id_escolaw43 ; ?>  -  <?php echo $sala_escolaw43 ; ?> - Turma: <?php echo $turma_escolaw43 ; ?>  </option>
				<?php } ?>
			 </select>	
	 		
			 <br /><br />  
			 <div align="center" ><input type="submit" id="" name="" size="" value="Cadastrar" /></div>
	 	
	 <?php } ?>
	 </form>
	

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