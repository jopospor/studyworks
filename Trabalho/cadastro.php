<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro realizado com sucesso!</title>
</head>
<body>
<?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
$ramo_de_atividade= $_POST ["ramo_de_atividade"];
$nome= $_POST ["nome"];//atribui��o do campo "nome" vindo do formul�rio para variavel
$cpf= $_POST ["CPF"];
$email= $_POST ["email"];//atribui��o do campo "email" vindo do formul�rio para variavel
$ddd= $_POST ["ddd"];//atribui��o do campo "ddd" vindo do formul�rio para variavel
$tel= $_POST ["telefone"];//atribui��o do campo "telefone" vindo do formul�rio para variavel
$endereco= $_POST ["endereco"];//atribui��o do campo "endereco" vindo do formul�rio para variavel
$cidade= $_POST ["cidade"];//atribui��o do campo "cidade" vindo do formul�rio para variavel
$estado= $_POST ["estado"];//atribui��o do campo "estado" vindo do formul�rio para variavel
$bairro = $_POST ["bairro"];//atribui��o do campo "bairro" vindo do formul�rio para variavel
$pais= $_POST ["pais"];//atribui��o do campo "pais" vindo do formul�rio para variavel
$sexo= $_POST ["sexo"];//atribui��o do campo "sexo" vindo do formul�rio para variavel
 
//Gravando no banco de dados ! conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root"); //localhost � onde esta o banco de dados.
if (!$conexao)
die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
 
//conectando com a tabela do banco de dados
$banco = mysql_select_db("acme",$conexao); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
//Query que realiza a inser��o dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `cliente` ( `ramo_de_atividade`,`nome` , `email` , `sexo` , `ddd` , `telefone` , `endere�o` , `cidade` , `estado` , `bairro` , `pa�s` , `login` , `senha` , `news` , `id` )
VALUES ('ramo_de_atividade', '$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais','')";
mysql_query($query,$conexao);

echo "<h2><b><font color='#0000FF'align='center'> Cadastro realizado com sucesso! </font></b></h2>" 
//mensagem que � escrita quando os dados s�o inseridos normalmente.
?>
</body>
</html>