<html>
<head>
	<?php include "pisem3k001.php" ; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Igans</title>
    <link rel="stylesheet" href="css/css01.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/pisem_css01.min.css">
    <link rel="stylesheet" href="css/pisem_css02.min.css">
    <link rel="stylesheet" href="css/pisem_css07.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/pisem_css08.css">
	
</head>
<body style="background-color: rgb(89,44,18); background-image: url(img01/bmath.jpg); background-repeat:repeat-y; background-repeat:repeat ">

<?php ## Não mostrar erros de warnning
 ini_set('display_errors', 0 );
 error_reporting(0);
?>

<TABLE width="720" align="center">
	<TR>
		<TD>


<div class='blocoA'>
<div class='caixa1'><?php echo $cadastro ; ?></div>
<p align="left" style="text-align:justify; text-indent:50px"> 
    
    Apesar dos administradores e moderadores deste site tentarem excluir ou editar qualquer material indesejável logo que detectado, é impossível rever todas as suas mensagens. Como tal você reconhece que todas as mensagens enviadas nos fóruns expressam os pontos de vista e opiniões dos seus respectivos autores e não dos administradores ou moderadores (exceto mensagens enviadas por essas pessoas) não sendo por tal responsáveis.</p>

<p align="left" style="text-align:justify; text-indent:50px"> Você aceita não enviar qualquer mensagem abusiva, obscena, vulgar, insultuosa, difamadora, de ódio, ameaçadora, sexualmente tendenciosa ou qualquer outro material que possa violar qualquer lei aplicável. A incidência desses fatos implicará em sua expulsão imediata e permanente. Os endereços de IP de todas as mensagens são registrados para ajudar a implementar essas condições. Você concorda que os administradores e moderadores deste fórum possuem o direito de excluir, editar, mover ou trancar qualquer tópico a qualquer hora que eles assim o decidam e seja implícito. Como usuário você aceita que qualquer informação que forneceu acima seja salva em um banco de dados. Apesar dessa informação não ser fornecida a terceiros sem a sua autorização, os administradores ou moderadores não podem assumir a responsabilidade por qualquer tentativa ou ato de 'hacking', intromissão forçada e ilegal que conduza a exposição dessa informação.</p>

<p align="left" style="text-align:justify; text-indent:50px"> O sistema Igans PISEM utiliza 'cookies' para salvar informações no seu computador. Esses 'cookies' não possuem nenhuma das informações acima fornecidas, apenas servem para melhorar o seu conforto enquanto visita este fórum. O endereço de e-mail é apenas utilizado para confirmar a informação do seu registro e a senha (bem como para enviar novas senhas caso se esqueça da que enviou ao se registrar).</p>

<p align="left" style="text-align:justify; text-indent:50px"> Ao clicar abaixo para prosseguir com o registro você concorda em seguir estas condições.</p>

<p align="left" style="text-align:justify; text-indent:50px"> Por favor, note que você precisará escrever um endereço de e-mail válido para que o seu registro seja ativado. Você vai receber um e-mail contendo as informações necessárias para a sua ativação.</p>
   
   
<form action="pisem3k009.php" name="form" method="post">   
 <table width="98%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td width="30%" align="right" ><strong> Nome: </strong> </td>

    <td width="70%" colspan="2" align="left"> <label> <input name="nome" type="text" id="nome" size="43" /></label>
      <input type="hidden" name="ip" id="ip" value="<?php echo getenv("remote_ADDR"); ?>" />
      <input type="hidden" name="hora" id="hora"  value="<?php echo date("H"); ?>h<?php echo date("i"); ?>m<?php echo date("s"); ?>s"/>
	  <input type="hidden" name="data" id="data"  value="<?php echo date("d/m/Y"); ?>" />
	  <input type="hidden" name="grupo" id="grupo"  value="Usuário" />
	  <input type="hidden" name="avatar" id="avatar"  value="pisem_IMG004/avatarneutro.png" />
	  <input type="hidden" name="grupo" id="grupo"  value="usuário" />
	  <input type="hidden" name="temaprinc" id="temaprinc"  value="<?php echo $temapb24 ; ?>" />
	  

	  </td>
  </tr>
  <tr>
  	<td align=right>
    &nbsp;  <strong>Sexo:</strong>
          
    </td>
    <td>
    <select id="sexo" name="sexo">
           <option><?php echo $sexo ?></option>
           	
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Não Identificar</option>
           </select>
    </td>
  <tr>
    <td align="right"><strong>E-mail:</strong></td>
    <td colspan="2" align="left"><label>
      <input name="email" type="text" id="email" size="43" /> 
    </label></td>
  </tr>
  <tr>
    
    
  </tr>
  <tr>
    <td align="right"><strong>Data de Nascimento:	</strong></td>
    <td colspan="2" align="left"><label>
      
    <strong>Dia:</strong>
    <select name="dndia" id="dndia">
	<option></option>
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
    <strong>Mês:</strong>
    <select name="dnmes" id="dnmes">
	<option></option>
	<option>Janeiro</option>
	<option>Fevereiro</option>
	<option>Março</option>
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
    <strong>Ano:</strong>
    <select name="dnano" id="dnano">
	<option></option>
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
</label></td>
  </tr>
  <tr>
    <td align="right"><strong>Cidade:</strong></td>
    <td colspan="2" align="left"><label>

      <input name="localidade" type="text" id="localidade" size="24" />
      <strong>Estado:</strong>
      <select name="estado" id="estado">
	  <option></option>
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
    </label></td>
  </tr>
  <tr>
    <td align="right"><div align="right"><strong>Ecolaridade: </strong></div></td>
    <td colspan="2" align="left"><label>
    <select name="ecolaridade" id="ecolaridade" />

			<option></option>
		  	<option>1º Ano - Fundamental</option>
		    <option>2º Ano - Fundamental</option>
		    <option>3º Ano - Fundamental</option>
			<option>4º Ano - Fundamental</option>
			<option>5º Ano - Fundamental</option>
			<option>6º Ano - Fundamental</option>
			<option>7º Ano - Fundamental</option>
			<option>8º Ano - Fundamental</option>
			<option>9º Ano - Fundamental</option>
			<option>1º Ano - Médio</option>
			<option>2º Ano - Médio</option>
			<option>3º Ano - Médio</option>
			<option>Superior</option>
			<option>Pós-Graduado</option>
			<option>Mestrado</option>
			<option>Doutorado</option>
			<option>PhD</option>
			<option>Desconhecido</option>
	      </select>
		  
		  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
		  <select name="ecolaridadeCompl" id="ecolaridade" />
		    <option></option>
		  	<option>Completo</option>
		    <option>Incompleto</option>
		    
	      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right"><div align="right"><strong>login:</strong></div></td>
    <td colspan="2" align="left"><input name="login" type="text" id="login" size="43" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Senha:</strong></td>
    <td colspan="2" align="left">
	<input name="senha" type="password" id="senha" size="20" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Confirmar Senha:</strong></td>
    <td colspan="2" align="left"><label>
      <input name="confirmsenha" type="password" id="confirmsenha" size="20" />
    </label></td>
  </tr>
  <tr>
    <td align="right" valign="top"> <b> <label for="captcha"> Insira as letas e números ao lado que você vê abaixo: </label></b></td>
	<td><input type="text" name="palavra"  /></td>
</tr>
  <tr>
	<td align=right> <img src="fncc02/pisem3kf01.php?l=150&a=50&tf=20&ql=5">  </td>
	<td> <input type="submit" value="Validar e Cadastrar" /></td>
  </tr>
    </table>

</form>
<?php include "pisem3k002.html" ; ?>
</div>
		</TD>
	</TR>
</TABLE>
</center>
</body>
</html>

 
 	
