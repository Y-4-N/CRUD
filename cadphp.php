<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">

 <title>Cadastro - Processo Seletivo </title>
	<link rel="stylesheet" href="css\styles.css">
<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;600;900&display=swap" rel="stylesheet">

</head>
<body id="project">
 <div class="menu">
 	<table style="width:45%"> 
  <img src="https://lattinegroup.com/wp-content/uploads/2018/08/logo-crowe-1.png" class="logo">
 	<ul>
			<li><a href = "index.html">Inicio |</a></li> 
			<li><a href = "Cadastro.html">Cadastro |</a></li>
			<li><a href = "Todos.html">Todos os Candidatos |</a></li>
			<li><a href = "Editar.html">Editar |</a></li>
			<li><a href = "Excluir.html">Excluir |</a></li>
			<li><a href = "ID.html">Consulta por ID </a></li>
	</ul>
</table>
</div>
<?php
//dados do HTML
$res = $_POST['res'];

$log = $_POST['log'];

$num = $_POST['num'];

$com = $_POST['com'];

$cid = $_POST['cid'];

$est = $_POST['est'];

$cep = $_POST['cep'];

$nome = $_POST['nome'];


//INFO BD
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "db";

//conexão com o MySQL

$conn = new mysqli($server,$user,$pass,$bdname);





//verificação com o BD
if ($conn->connect_error) {
	echo "
		<html>
		<script>
		window.alert('Algo de errado não ta certo!');
		</script>
		</html>
	";
}else{
	echo "
		<html>
		<script>
		window.alert('Conectado com sucesso!!');
		</script>
		</html>
	";

$cadastros = "INSERT INTO candidatos (Resumo, Logradouro, Numero, Complemento, Cidade, Estado, CEP, Nome )VALUES ('$res','$log','$num','$com','$cid','$est','$cep','$nome')";



if ($conn->query($cadastros)==True) {
	echo "<br><h1><font color='green' align='center'>Cadastrado com Sucesso!</font></h1></br>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao cadastrar!</font></h1></br>";
	}

}

$conn->close();
?>