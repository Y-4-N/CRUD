<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">

 <title>Todos os Candidatos - Processo Seletivo </title>
	<link rel="stylesheet" href="css\styles.css">
<link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;600;900&display=swap" rel="stylesheet">

</head>
<body id="project" action="todosphp.php" method="POST">
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
<div class="box1">
<?php 
//dados do HTML
//INFO BD
$id = $_POST['id'];

$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "db";

//conexão com o MySQL

$conn = new mysqli($server,$user,$pass,$bdname);




//consultar
$comando = "SELECT * FROM candidatos where id = $id";
$resul = mysqli_query($conn, $comando);
while($row = mysqli_fetch_assoc($resul)) {
	echo "ID: " . $row['id'] . "<br>";
	echo "Nome: " . $row['Nome'] . "<br>";
	echo "Resumo da Entrevista: " . $row['Resumo'] . "<br>";
	echo "Logradouro: " . $row['Logradouro'] . "<br>";
	echo "Número: " . $row['Numero'] . "<br>";
	echo "Complemento: " . $row['Complemento'] . "<br>";
	echo "Cidade: " . $row['Cidade'] . "<br>";
	echo "Estado: " . $row['Estado'] . "<br>";
	echo "CEP: " . $row['CEP'] . "<br><br><br>";
}


?>
