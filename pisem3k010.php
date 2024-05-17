<?php include "pisem3k000.php" ?>
<?php include "pisem3k001.php" ?>
<?php 
		$login_user = $_SESSION['login_session_user'];
		$senha_user = $_SESSION['senha_session_user'];
		
		$sqluser = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where login = '$login_user' AND senha = '$senha_user'") or die("Erro");
		while($linha_user=mysqli_fetch_assoc($sqluser)) {
			$id_u = $linha_user['id'];
			$lo_u = $linha_user['login'];
			$gr_u = $linha_user['grupo'];
			$sex_u = $linha_user['sexo'];
			$aluno_u = $linha_user['aluno'];
			$avatar_u = $linha_user['avatar'];
			$idsala = $linha_user['idsala'];
		}
if (!isset ($_SESSION['login_session_user']) AND !isset ($_SESSION['senha_session_user']))  
{include "index.php" ;
exit ;} 
	else {  
?>
<center>
<table width="720" border=0" >
  <tr>
    <td width="130" rowspan="5"><a class="" href="index.php"><img src="img01/logo_r15.png" width="130"  /></a></td>
    <td> </td>
    <td width="130" rowspan="4"></td>
  </tr>
  <tr>
    <td>&nbsp;  </td>
    </tr>
  <tr>
    <td>&nbsp; </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td> 
		<?php if ($gr_u == "Coordenador" or $gr_u == "Administrador" ) { echo "<a href='pisem3k014.php'><abbr title='Cadastrar Escola'><img class='p2fg1' src=img01/inserir2.png / width=25 ></abbr></a> " ; } ?>
		<?php if ($gr_u == "Coordenador" or $gr_u == "Administrador" ) { echo "<a href='pisem3k035.php'><abbr title='Salas de Aula'><img class='p2fg1' src=img01/b_salaua.png / width=25 ></abbr></a> " ; } ?>
		
		<?php if ($gr_u == "Coordenador" or $gr_u == "Administrador" ) { echo "<a href='pisem3k051.php'><abbr title='Guia de Aprendizagem'><img class='p2fg1' src=img01/b_guiaA.png / width=25 ></abbr></a> " ; } ?>
		
		<?php if ($gr_u == "Professor") { echo "<a href='pisem3k051b.php'><abbr title='Guia de Aprendizagem'><img class='p2fg1' src=img01/b_guiaA.png / width=25 ></abbr></a> " ; } ?>

		<?php if ($gr_u == "Coordenador" or $gr_u == "Administrador" ) { echo "<a href='pisem3k053.php'><abbr title='Salas de Aula'><img class='p2fg1' src=img01/incluirsalan.fw.png / width=25 ></abbr></a> " ; } ?>
		
		
	</td>
    <td align="right">
		<abbr title="<?php echo $sair ; ?>"><a class="" href="pisem3k012.php"><img src="img01/logout2.png" width="25"  /></a></abbr>
		
	</td>
  </tr>
</table>
<table width="720" border="0" >
	<tr>
		<td width="300" align="left">
			<div><?php if ($gr_u == "Coordenador") { echo $conectcoord ; }?></div>

			<div></div>
		</td>
		<td width="" align="center">
			
		</td><strong></strong>
		<td width="250" align="right">
			<?php if ($sex_u == "Feminino") { echo $bemvinda ; } else { echo $bemvindo ; }?>
			<?php echo ": <b>" . $lo_u . "</b>"; ?> <br />
			<?php if ($idsala == "" ) { echo $sematrico ; } ?>
		</td>
	</tr>
</table>

</center>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>	
<?php } ?>