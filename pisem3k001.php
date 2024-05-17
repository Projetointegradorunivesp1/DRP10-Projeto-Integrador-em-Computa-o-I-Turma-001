<html>
<head>
   	
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Igans</title>
    <link rel="stylesheet" href="css/css01.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/pisem_css01.min.css">
    <link rel="stylesheet" href="css/pisem_css02.min.css">
    <link rel="stylesheet" href="css/pisem_css07.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/pisem_css08.css">
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
</head>	
<body style="background-color: rgb(89,44,18); background-image: url(img01/bmath.jpg); background-repeat:repeat-y; background-repeat:repeat ">
<?php 
#Textos
$acessar		= "Acessar" 					;
$cadastrar		= "Cadastrar" 					;
$cadastro		= "Cadastro de Usuário" 		; 
$voltar			= "Voltar" 						;
$nomec1			= "Nome a ser Cadastrado: " 	;
$lomec1			= "Login a ser Cadastrado: " 	;
$nomebran		= "Nome em Branco" 				;
$loginbran		= "Login em Branco" 			;
$emailbran		= "E-Mail em Branco" 			;
$senhabran		= "Senha em Branco" 			;
$confirmsenhab	= "Você não confirmou a senha" 	;
$naocoincidem	= "As Senhas não Coincidem" 	;
$carreglogin 	= "carregado o login: " 		;
$cadexist		= "Cadastrao Existente" 		;
$podecadast		= "Pode continuar o cadastro: " ;
$jaexistelogin	= "Já existe esse Login" 					;
$cadastrook		= "Novo Cadastro Criado com Sucesso" 		;
$voltaridex		= "Você não está autorizado" 				; 
$bemvindo		= "Seja bem vindo" 							;
$bemvinda		= "Seja bem vinda" 							;
$sair			= "Sair" 									; 
$aazaluno		= "Você está matriculado na escola AAZ" 	; 
$sematric		= "Você não está matriculado" 	; 
$sematrica		= "Você não está matriculada" 	;
$sematrico		= "Você não tem matricula vigente" 	; 
$conectcoord	= "<b>Grupo: </b>Coordenadores" ; 
$ender			= "Endereço" ;
$rsocial		= "Razão Social" ;
$enviarfoto		= "Escolha uma imagem de no máximo <b>180 KB</b>, imagens maiores que isso serão deletadas automáticamente após um tempo. Não se preocupe com as dimensões, elas serão modificadas automáticamente para favorecer o padrão do site" ;
$editconfirm	= "Edição Concluida com Sucesso" ;
$exclconfirm2 	= "Confimar Exclusão" ;
$edicconfirm2 	= "Confimar Edição" ;
$deletarinfo	= "Tem certeza que deseja deletar essa escola, depois que excluida nao poderá mais ser resutaurada." ;
$exclusasucesso = "Eclusão Executada com Sucesso" ; 
$serieano 		= "Série/Ano" ;  
$sia1f			= "1º Ano - Fundamental" ;
$sia2f			= "2º Ano - Fundamental" ; 
$sia3f			= "3º Ano - Fundamental" ; 
$sia4f			= "4º Ano - Fundamental" ; 
$sia5f			= "5º Ano - Fundamental" ; 
$sia6f			= "6º Ano - Fundamental" ; 
$sia7f			= "7º Ano - Fundamental" ; 
$sia8f			= "8º Ano - Fundamental" ; 
$sia9f			= "9º Ano - Fundamental" ; 
$sia1mf			= "1º Ano - Médio" ; 
$sia2mf			= "2º Ano - Médio" ; 
$sia3mf			= "3º Ano - Médio" ; 
$sia4mf			= "4º Ano - Médio [Cursinho]" ; 
$nsala			= "NºSala" ; 
$anoletivosdet	= "Ano Letivo" ; 
$adm			= "Administração" ;
$edicsala2w		= "Edição de Sala:" ;
$concluiredit2s	= "Concluir Edição" ;
$Cadastroalunos = "Cadastro de alunos" ;
$editcadastrous = "Aluno Editado com Sucesso" ; 
$edicaooalunos 	= "Editar Cadastro de alunos" ;
$editarcadoalunos 	= "Excluir Cadastro de alunos" ;
$mes 			= "Mês:" ;
$marco			= "Março" ; 
$semnome2w		= "Você não efetuar o cadastro sem  identificar o campo nome." ; 
$sememail2w		 = "Você não efetuar seu cadastro sem se cadastrar um e-mail válido no campo E-mail" ;
$semlogin2w		= "Você não efetuar seu cadastro sem se cadastrar um apelido no campo Login." ;
$logiemailjaex	= "Login e/ou E-mail já existente." ; 
$semsenha2w		= "Você não efetuar o cadastro sem  cadastrar uma senha no campo Senha." ; 
$numdoalunosala = "Número do Aluno na Sala: " ;
$nuabre			= "Nº" ; 
$cadfrfisl		= "Qual disciplina você quer cadastrar?"  ; 
$sdisciplinaper = "Escolha a sala onde essa disciplina irá permanecer: " ; 
$lancarnota 	= "Lançar Nota" ; 
$mensao			= "Nota:" ; 
$avaliacaoM		= "Avaliação Mensal" ; 
$avaliacaoB		= "Avaliação Bimestral" ;
$participacao	= "Participação" ;
$simulado		= "Simulado (Testes) "; 
$fparcial		= "Final Parcial" ; 
$recup			= "Recuperação" ; 
$FinalB			= "Final Bimestral" ; 
$lanatualiz		= "Lançar / Atualizar" ;
$calcmedia		= "Calcular Parcial / Final" ;
$votar			= "Voltar" ;
$recalc			= "Recalcular Média Final" ;  
$peigeno		= "Coordenadoria de Ensino do Interior. <br>
					Diretoria de Ensino da Região de São Joaquim da Barra. <br>
					E.E. Prof.ª GENOVEVA PINHEIRO VIEIRA DE VITTA. <br>
					Rua: Rio Grande do Norte, n.º: 1.697 – Centro - CEP: 14.600 – 000 – Tel./Fax: 16 – 3818 – 2277. <br>
					São Joaquim da Barra – SP" ;
$bimnao			= "Bimestre não selecionado" ; 
$bim1			= "1º Bimestre:" ;
$bim2			= "2º Bimestre:" ;
$bim3			= "3º Bimestre:" ;
$bim4			= "4º Bimestre:" ;
$comptensocio	= "Competências sociosemocionais:" ; 
$estrtgididat	= "Estratégias didáticas" ; 
$ativautodida	= "Estratégias Didáticas:" ; 
$estratautodi	= "Atividades Didático-Cooperativas:" ; 
$atividadeait	= "Atividades Complementares:" ; 
$valorestraba	=	"Valores trabalhados na disciplina" ; 
$criteriavali	=	"Critérios de Avaliação" ; 
$layoutimpres	=	"Layout de Impressão" ; 
?>
</body>

