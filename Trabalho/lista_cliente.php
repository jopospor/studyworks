<html>
 <title> Lista de Clientes</title>
 <body>
<div align="center"> 
<table border="2" bordercolor="darkblue">
	<tr>
		<td><b>Nome</b></td>
		<td><b>Email</b></td>
		<td><b>DDD</b></td>
		<td><b>Telefone</b></td>
		<td><b>Endereço</b></td>
		<td><b>Cidade</b></td>
		<td><b>Estado</b></td>
		<td><b>Bairro</b></td>
		<td><b>Pais</b></td>
	</tr>


<?php
include_once("config.php");
//define a consulta
	$query = "SELECT nome, email, sexo, ddd, telefone, endereco, cidade, estado, bairro, pais FROM Clientes";
	//envia consulta ao banco de dados
	$result = mysql_query($query,$conn);
	if (mysql_errno($conn))
		echo "Falha na consulta do banco MYSQL: ".mysql_error();
	if($result)
	{
		//percorre os resultados da pesquisa
		while($row = mysql_fetch_assoc($result)) //mysql
		{ 		
			echo "<tr>";
			foreach($row as $key=>$value)
			{
				echo "<td>$value</td\n>";
			}
			echo "<td><a href=\"ver_cad_cliente.php?CPF=$row[nr_CPF]\" target=\"cad\">Editar";
			echo "<td><a href=\"delete_cad_cliente.php?CPF=$row[nr_CPF]\" target=\"cad\">Excluir";
			echo "</tr>"; 
		}
	}else
		echo "Erro no banco";
	
	//fecha a conexao
	mysql_close($conn); //mysql_close($conn);
	
?>

</table>
</div>
<body>
</html>