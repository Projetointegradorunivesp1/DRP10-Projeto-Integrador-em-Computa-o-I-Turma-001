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
		$id_escola = $_GET['id'] ;
		$sql_escola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id = '$id_escola'") or die("Erro");
								while($dadosescola=mysqli_fetch_assoc($sql_escola))
										{
											$nome_escola = $dadosescola['escola'] ;
											$nome_razaoa = $dadosescola['razaosocial'] ;
											$nome_cnpj= $dadosescola['cnpj'] ;
											$nome_endereco = $dadosescola['endereco'] ;
											$nome_tel1 = $dadosescola['tel1'] ;
											$nome_img = $dadosescola['img'] ;
										}
		
?>
<?php include "pisem3k010.php" ?>
<center>


<table width="720" border="0" cellpadding="20">
	<tr>
		<td>
		<div class="caixa1"> Deletar Escola: [<?php echo $id_escola ; ?>] <?php echo $nome_escola ; ?> </div>
		<br>
		<form action="pisem3k019fx.php" name="form" method="post" enctype="multipart/form-data">   
		 <table  border="0"  width="720">
		  <tr>
			<td  align="right" ><strong> Escola </strong> </td>
		
			<td  colspan="2" align="left"> <label> <input name="escola" type="text" id="escola" size="83" value="<?php echo $nome_escola ; ?>" disabled="disabled" /></label>
			  <input type="hidden" name="ip" id="ip" value="<?php echo getenv("remote_ADDR"); ?>" />
			  <input type="hidden" name="hora" id="hora"  value="<?php echo date("H"); ?>h<?php echo date("i"); ?>m<?php echo date("s"); ?>s"/>
			  <input type="hidden" name="data" id="data"  value="<?php echo date("d/m/Y"); ?>" />
			  <input type="hidden" name="grupo" id="grupo"  value="Usuário" />
			  <input type="hidden" name="avatar" id="avatar"  value="" />
			  <input type="hidden" name="grupo" id="grupo"  value="usuário" />
			  <input type="hidden" name="temaprinc" id="temaprinc"  value="" />
			  <input type="hidden" name="idescola" id="idescola"  value="<?php echo $id_escola ; ?>" />
			  
		
			  </td>
		  </tr>
		  
		  <tr>
			<td align="right" valign="top"> <b> <label > <?php echo $ender ?> </label></b></td>
			<td><input type="text" name="endereco"  size="83" value="<?php echo $nome_endereco ; ?>" disabled="disabled" /></td>
		</tr>
		<tr>
			<td align="right" valign="top"> <b> <label > <font size="-1"><?php echo $rsocial ?></font></label></b></td>
			<td><input type="text" name="rsocial"  size="83" value="<?php echo $nome_razaoa ; ?>" disabled="disabled" /></td>
		</tr>
		<tr>
			<td align="right" valign="top"> <b> <label > CNPJ </label></b></td>
			<td><input type="text" name="cnpj"  size="83" value="<?php echo $nome_cnpj ; ?>" disabled="disabled"/></td>
		</tr>
		<tr>
			<td align="right" valign="top"> <b> <label > Telefones </label></b></td>
			<td><input type="text" name="Telefones" id="escola"  size="83" value="<?php echo $nome_tel1 ; ?>" disabled="disabled"/> </td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<table border="0">
					<tr>
						<td valign="top" width="44%" class="p2b11">
							
							<input type="hidden" name="id_user" id="id_user"  value="<?php 
							$sql_user = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where login = '$login_user'") or die("Erro");
								while($dados=mysqli_fetch_assoc($sql_user))
										{
											$id_user = $dados['id'] ;
										}
										echo $id_user ; ?>"/>
										
										<img  align="right" src="<?php echo $nome_img ; ?>" / width="200">
						</td> 
						<td width="1%">
								
						</td>
						<td valign="top" width="65%">
							<div align="justify" class="p2b11" >
								<font color="#FF0000"> <b><?php echo $deletarinfo ; ?></b></font>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		  <tr>
			<td align=right>  </td>
			<td align="right"> <br><input  type="submit" value="<?php echo $exclconfirm2 ; ?>" /></td>
		  </tr>
			</table>
		
		</form>
		</tr>
	</td>
</table>
</center>
<?php include "pisem3k002.html" ; ?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	