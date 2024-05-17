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
		}

?>
<?php include "pisem3k010.php" ?>
<center>
	<table width="1350"  border=0>
	<tr>
		<td >
			<div class="caixa1"> Incluir sala de agrupamentos de não matriculados  </div>
		</td>
	</tr>
	</table>
	<table width="1350"  border=0>
	<tr>
		<td >
			<div align=left> Nome da Sala <input type="text" name="Salanome" size="37"> 
				| Ano Letivo: <input type="text" name="anoletivo" size="5">  
				| Escola: <input type="text" name="escola" size="35"> 
			</div>
		</td>
	</tr>
	</table>
	<form action=".php?id=" name="form" method="post" enctype="multipart/form-data">

	<table width="1340"  border=0 class="caixa5">
	<tr>
		<td width="20" valign="bottom">
			Nª
		</td>
		<td width="300" valign="bottom" >
			Nome dos Alunos
		</td>
		<td width="20" class="foo" align="right">
			Matemática
		</td>
		<td width="20" class="foo" align="right">
			Língua protuguesa
		</td>
		<td width="20" class="foo" align="right">
			Redação
		</td>
		<td width="20" class="foo" align="right">
			Literatura
		</td>
		<td width="20" class="foo" align="right">
			Geografia
		</td>
		<td width="20" class="foo" align="right">
			História
		</td>
		<td width="20" class="foo" align="right">
			Filosofia
		</td>
		<td width="20" class="foo" align="right">
			Sociologia
		</td>
		<td width="20" class="foo" align="right">
			Artes
		</td>
		<td width="20" class="foo" align="right">
			Biologia 01
		</td>
		<td width="20" class="foo" align="right">
			Biologia 02
		</td>
		<td width="20" class="foo" align="right">
			Química 01
		</td>
		<td width="20" class="foo" align="right">
			Química 02
		</td>
		<td width="20" class="foo" align="right">
			Física
		</td>
		<td width="20" class="foo" align="right">
			Educação Física
		</td>
		<td width="20" class="foo" align="right">
			Itinerário 01
		<td width="20" class="foo" align="right">
			Itinerário 02
		</td>
		<td width="20" class="foo" align="right">
			Itinerário 03
		</td>
		<td width="20" class="foo" align="right">
			Itinerário 04
		</td>
		<td width="20" class="foo" align="right">
			Itinerário 05
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			01
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			02
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			03
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			04
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			05
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			06
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			07
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			08
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			09
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			10
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			11
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			12
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			13
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			14
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			15
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			16
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			17
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			18
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			19
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			20
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			21
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			22
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			23
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			24
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			25
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			26
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			27
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			28
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			29
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			30
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			31
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			32
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			33
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			34
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			35
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			36
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			37
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
<tr>
		<td width="20" valign="bottom">
			38
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			39
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	<tr>
		<td width="20" valign="bottom">
			40
		</td>
		<td width="300" valign="bottom" >
			<input type="text" name="aluno01" size="34"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="matem" size="1"> 
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="ling" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="reda" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="lite" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="geo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="hist" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="filo" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="soci" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="arte" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="bio02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui01" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="qui02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="fisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="efisi" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti01" size="1">
		<td width="20" class="foo" align="right">
			<input type="text" name="iti02" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti03" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti04" size="1">
		</td>
		<td width="20" class="foo" align="right">
			<input type="text" name="iti05" size="1">
		</td>
	</tr>
	</table><br>
	<input type="submit" class="button_arrow" value="Atualizar / Salvar"   />
	</form>
</center>
<?php include "pisem3k002.html" ; ?>

<?php } ?>	