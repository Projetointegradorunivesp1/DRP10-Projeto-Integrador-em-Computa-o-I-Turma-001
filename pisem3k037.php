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
		$id_get = $_GET['id'];
		?>
<?php if ($grupo == "Coordenador" or $grupo =="Administrador" ) { ?> 		

<?php include "pisem3k010.php" ?>
<?php $idu = $_GET['idu']; ?>
<?php $id_get = $_GET['id']; ?>
<?php $ide = $_GET['ide']; ?>
<center>

		<?php $sql_usala = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where id='$id_get' ORDER BY `pisno_b0003`.`id` DESC");
		while($linha_usala = mysqli_fetch_assoc($sql_usala)) {
		$id_usala			= $linha_usala['id'];
		$usala				= $linha_usala['sala'];
		$anoletivo_usala 	= $linha_usala['anoletivo'];
		$data_usala 		= $linha_usala['data'];
		$escolaridade_usala 	= $linha_usala['escolaridade'];
		$turma_usala 		= $linha_usala['turma'];
		$numero_usala 		= $linha_usala['numero'];
		$idescola_usala 	= $linha_usala['idescola'];
		?>
		
		<?php $sql_esc = mysqli_query($mysqli,"SELECT * FROM `pisno_b0001` where id='$idescola_usala'");
			while($linha_uesc = mysqli_fetch_assoc($sql_esc)) {
			$img_esc  = $linha_uesc['img'];
			$nome_esc = $linha_uesc['escola'];				
		}
		?>
<table width="720">
	<tr>
		<td>
			<div class="caixa1">  <?php echo "[" . $anoletivo_usala  . "] Sala: "   . $escolaridade_usala . " " . $nome_esc  ; ?></div>
		</td>
	</tr>
	<tr>	
		<td class="">
			</table>
<div class="caixa2">
<form action="pisem3k038fx.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_get" id="id_get" value="<?php echo $id_get ; ?>" />
<input type="hidden" name="idescola" id="idescola" value="<?php echo $ide ; ?>"/  />
<input type="hidden" name="iduser" id="iduser" value="<?php echo $idu ; ?>"/  />

<?php $sql_esc = mysqli_query($mysqli,"SELECT * FROM `pisem_b0009cd` where id='$idu'");
			while($linha_uesc37 = mysqli_fetch_assoc($sql_esc)) {
			$idu37 		= $linha_uesc37['id'];
			$nomeu37 	= $linha_uesc37['nome'];
			$login37 	= $linha_uesc37['login'];
			$senha37	= 	$linha_uesc37['senha'];		
			$email37	= 	$linha_uesc37['email'];		
			$sexo37	 	= 	$linha_uesc37['sexo'];	
			
			$dndia37	 	= 	$linha_uesc37['dndia'];
			$dnmes37	 	= 	$linha_uesc37['dnmes'];
			$dnano37	 	= 	$linha_uesc37['dnano'];
			
			$localidade37	 	= 	$linha_uesc37['localidade'];
			$estado37	 	= 	$linha_uesc37['estado'];
			$escolaridade37	=	$linha_uesc37['ecolaridade'];
			
			$grupo37	=	$linha_uesc37['grupo'];
			$ndsala	=	$linha_uesc37['numaluno'];
			$opescol	=	$linha_uesc37['opescol'];
			
		?>
<table width="720" border="0" >
  <tr>
    <td valign="bottom" align="center">
	<strong><font size="+2" color="#00CC00"  ><?php echo $edicaooalunos ; ?> id Cadastro: <font size="-2">[<?php echo $idu37 ; ?>]</font></font></strong>
	</td>
	</tr>
	<td>
    <center>
    <table width="99%" border="0" align="center">
      <tr>
        <td width="44%"><div align="right"><strong>Nome:</strong></div></td>
        <td colspan="2">
          <div align="left">
            <input name="nome" type="text" id="nome" size="41" value="<?php echo $nomeu37 ; ?>"/>
          </div>          <div align="right"></div></td>
        <td width="10%"><div align="left"></div></td>
		
		<tr>
        <td width="44%"><div align="right"><strong>Login:</strong></div></td>
        <td colspan="2">
          <div align="left">
            <input name="login" type="text" id="login" size="41" value="<?php echo $login37 ; ?>"/>
          </div>          <div align="right"></div></td>
        <td width="10%"><div align="left"></div></td>
		
		<tr>
        <td width="44%"><div align="right"><strong>Senha:</strong></div></td>
        <td colspan="2">
          <div align="left">
            <input name="senha" type="password" id="senha" size="41" value="<?php echo $senha37 ; ?>"/>
          </div>          <div align="right"></div></td>
        <td width="10%"><div align="left"></div></td>
		
      </tr>
      <tr>
        <td><div align="right"><strong>E-mail:</strong></div></td>
        <td colspan="2"><div align="left">
          <input name="email" type="text" id="email" size="41" value="<?php echo $email37 ; ?>" />
        </div>          <div align="right"></div></td>
        <td><div align="left"></div></td>
      </tr>
      
      <tr>
        <td><div align="right"><strong>Sexo:</strong></div></td>
        <td colspan="2"><div align="left">
          <select id="sexo" name="sexo">
		  <option><?php echo $sexo37 ; ?></option>
		   
		  <?php if ($sexo37 == "Feminino") { echo " <option> Masculino </option>" ; } ;?>
          <?php if ($sexo37 == "Masculino") { echo " <option> Feminino </option>" ; } ;?>
		  <option> </option>
          </select>
        </div>          <div align="right"></div></td>
        <td><div align="left"></div></td>
      </tr>
      
      
      <tr>
        <td><div align="right"><strong>Data de Nascimento:</strong></div></td>
        <td colspan="2"><div align="left"></div>          
          
          <div align="left">Dia:
            <select name="dndia" id="dndia">
			
             <option><?php echo $dndia37 ; ?></option>	
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>
<?php echo $mes 	; ?>
<select name="dnmes" id="dnmes">
  <option><?php echo $dnmes37 ; ?></option>
  <option>Janeiro</option>
  <option>Fevereiro</option>
  <option><?php echo $marco	; ?></option>
  <option>Abril</option>
  <option>Maio</option>
  <option>Junho</option>
  <option>Julho</option>
  <option>Agosto</option>
  <option>Setembro</option>
  <option>Outubro</option>
  <option>Novembro</option>
  <option>Dezembro</option>
</select>
Ano:
<select name="dnano" id="dnano">
<option><?php echo $dnano37 ; ?></option>
<option>2017</option>
<option>2016</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
  <option>2011</option>
  <option>2010</option>
  <option>2009</option>
  <option>2008</option>
  <option>2007</option>
  <option>2006</option>
  <option>2005</option>
  <option>2004</option>
  <option>2003</option>
  <option>2002</option>
  <option>2001</option>
  <option>2000</option>
  <option>1999</option>
  <option>1998</option>
  <option>1997</option>
  <option>1996</option>
  <option>1995</option>
  <option>1994</option>
  <option>1993</option>
  <option>1992</option>
  <option>1991</option>
  <option>1990</option>
  <option>1989</option>
  <option>1988</option>
  <option>1987</option>
  <option>1986</option>
  <option>1985</option>
  <option>1984</option>
  <option>1983</option>
  <option>1982</option>
  <option>1981</option>
  <option>1980</option>
  <option>1979</option>
  <option>1978</option>
  <option>1977</option>
  <option>1976</option>
  <option>1975</option>
  <option>1974</option>
  <option>1973</option>
  <option>1972</option>
  <option>1971</option>
  <option>1970</option>
  <option>1969</option>
  <option>1968</option>
  <option>1967</option>
  <option>1966</option>
  <option>1965</option>
  <option>1964</option>
  <option>1963</option>
  <option>1962</option>
  <option>1961</option>
  <option>1960</option>
  <option>1959</option>
  <option>1958</option>
  <option>1957</option>
  <option>1956</option>
  <option>1955</option>
  <option>1954</option>
  <option>1953</option>
  <option>1952</option>
  <option>1951</option>
  <option>1950</option>
  <option>1949</option>
  <option>1948</option>
  <option>1947</option>
  <option>1946</option>
  <option>1945</option>
  <option>1944</option>
  <option>1943</option>
  <option>1942</option>
  <option>1941</option>
  <option>1940</option>
  <option>1939</option>
  <option>1938</option>
  <option>1937</option>
  <option>1936</option>
  <option>1935</option>
  <option>1934</option>
  <option>1933</option>
  <option>1932</option>
  <option>1931</option>
  <option>1930</option>
</select>
        </div></td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Localidade:</strong></div></td>
        <td colspan="2"><div align="left"></div>          
          
          
            <div align="left">
              <input name="localidade" type="text" id="localidade" size="24" value="<?php echo $localidade37 ; ?>" />
              <strong>Estado:</strong>
              <select name="estado" id="estado">
			  
       <option><?php echo $estado37 ; ?></option> 
		        
      <option>AC</option>
	  <option>AL</option>
	  <option>AM</option>
	  <option>AP</option>
	  <option>BA</option>
	  <option>CE</option>
	  <option>DF</option>
	  <option>ES</option>

	  <option>GO</option>
	  <option>MA</option>
	  <option>MG</option>
	  <option>MS</option>
	  <option>MT</option>
	  <option>PA</option>
	  <option>PB</option>
	  <option>PE</option>
	  <option>PR</option>
	  <option>PE</option>
	  <option>PI</option>
	  
	  <option>RJ</option>
	  <option>RN</option>
	  <option>RS</option>
	  <option>RO</option>
	  <option>RR</option>
	  <option>SE</option>
	  
	  <option>SC</option>
	  <option>SP</option>
	  <option>SE</option>
	  <option>TO</option>
	  <option>XX</option>
              </select>
              </div>
        </div></td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="right"><strong>Escolaridade Completa:</strong></div></td>
        <td colspan="2"><div align="left">
          
		  <label>
		  <select name="ecolaridade" id="ecolaridade">
		  	
			 <option><?php echo $escolaridade37 ; ?></option>
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
			<option>Recursos Diversos</option>
	      </select>
		  </label>
        </div>          <div align="right"></div></td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td align="right"> <font color='#FF0000'><b>Membro do site como:</b></font></td>
        <td width="7%" colspan=2>
          
          	<div align="left">
            <select name="grupo" id="grupo">
			
			<option><?php echo $grupo37 ; ?></option>
			<option>Aluno</option>
			<option>Coordenador</option>
			<option>Professor</option>
			</select>
			  </div>
		</td>
			</tr>
			<tr>
		<td align="right">
		<strong>Matricular na Sala:</strong>
		</td>
		<td>
		<div align="left">
            <select name="opescol" id="opescol">
            	<option></option>
			<option><?php echo  $opescol ; ?></option> 
			<?php 	$sqlssescola = mysqli_query($mysqli,"SELECT * FROM `pisno_b0003` where 	idescola='$ide' ORDER BY `pisno_b0003`.`anoletivo` DESC") or die("Erro");
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
            </div>
        </td>
        <td>
        	
        </td>
      </tr>
      <tr>
        <td><div align="right"> <strong><?php echo $numdoalunosala ; ?></strong></div> </td>
        <td><input type="text" name="numaluno" id="numaluno" size="3" value="<?php echo $ndsala ; ?>" />  </td>
        <td><div align="right"></div></td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td></td>
        <td><div align="left"></div> </td>
        <td></div></td>
        <td>
          <td>
      </tr>
	  <tr>
	  	<td>
		</td>
		<td>
		<div align="right"><input type="submit" name="button" id="button" value="Finalizar Cadastro" /><div align="left"></div>
		</td>
		<td>
		</td>
    </table>
	</td>
	</tr>
</table>

<?php 		} ?>
</form>
	
		</td>
	</tr>
</table>
<?php } ?>				
</center>
<?php include "pisem3k002.html" ; ?>
<?php } else {  
echo " <META  HTTP-EQUIV=REFRESH CONTENT='0; URL=pisem3k034.php'> " ;			
	exit;
; } ?> 
<?php } ?>	