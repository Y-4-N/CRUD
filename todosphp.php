
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">

 <title>Todos os Candidatos - Processo Seletivo </title>
<<<<<<< HEAD
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
=======
	  <link rel="icon" type="image/png" sizes="580x550" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8VKzZMjPu-3a4zHHG-kk6ujUoUJmwt5A8WTAIO0vLSfCvIEU-F4Q12iRD5xGw-jGiFE4&usqp=CAU">
	<link rel="stylesheet" href="css\styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;600;900&display=swap" rel="stylesheet">

</head>
<body>
 <div class="menu">
 	<table style="width:45%"> 
    <a href="index.html"><img src="https://lattinegroup.com/wp-content/uploads/2018/08/logo-crowe-1.png" class="logo">
 	<ul>
			<li><a href = "index.html">Inicio |</a></li> 
			<li><a href = "Cadastro.html">Cadastro |</a></li>
			<li><a href = "todosphp.php">Todos os Candidatos |</a></li>
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)
			<li><a href = "Editar.html">Editar |</a></li>
			<li><a href = "Excluir.html">Excluir |</a></li>
			<li><a href = "ID.html">Consulta por ID </a></li>
	</ul>
</table>
</div>
<div class="box1">
<?php 
//dados do HTML
<<<<<<< HEAD
$res = $_POST['res'];

$log = $_POST['log'];

$num = $_POST['num'];

$com = $_POST['com'];

$cid = $_POST['cid'];

$est = $_POST['est'];

$cep = $_POST['cep'];

$nome = $_POST['nome'];

=======
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)

//INFO BD
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "db";

//conexão com o MySQL

$conn = new mysqli($server,$user,$pass,$bdname);




//consultar
$comando = "SELECT * from candidatos";
<<<<<<< HEAD
$resul = mysqli_query($conn, $resul);
while($row = mysqli_fetch_assoc($resul)) {
	echo "ID: " . $row['id'] . "<br>";
	echo "Nome: " . $row['nome'] . "<br>";
	echo "Resumo da Entrevista: " . $row['res'] . "<br>";
	echo "Logradouro: " . $row['log'] . "<br>";
	echo "Número: " . $row['num'] . "<br>";
	echo "Complemento: " . $row['com'] . "<br>";
	echo "Cidade: " . $row['cid'] . "<br>";
	echo "Estado: " . $row['est'] . "<br>";
	echo "CEP: " . $row['cep'] . "<br>";
=======
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
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)
}


?>
<<<<<<< HEAD
<form class="fm" method="POST" action="todosphp">
<div class="btn1">
<button> Mostrar Todos</button>
</form>
</div>
<br><br><br>
=======

>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)
