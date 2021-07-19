<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">

 <title>Cadastro - Processo Seletivo </title>
  <link rel="icon" type="image/png" sizes="580x550" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8VKzZMjPu-3a4zHHG-kk6ujUoUJmwt5A8WTAIO0vLSfCvIEU-F4Q12iRD5xGw-jGiFE4&usqp=CAU">
	<link rel="stylesheet" href="css\styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;600;900&display=swap" rel="stylesheet">

</head>
<body id="project">
 <div class="menu">
 	<table style="width:45%"> 
  <a href="index.html"><img src="https://lattinegroup.com/wp-content/uploads/2018/08/logo-crowe-1.png" class="logo">
 	<ul>
			<li><a href = "index.html">Inicio |</a></li> 
			<li><a href = "Cadastro.html">Cadastro |</a></li>
			<li><a href = "todosphp.php">Todos os Candidatos |</a></li>
			<li><a href = "Editar.html">Editar |</a></li>
			<li><a href = "Excluir.html">Excluir |</a></li>
			<li><a href = "ID.html">Consulta por ID </a></li>
	</ul>
</table>
</div>
<div class="box1">
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)
<?php
//dados do HTML

$id = $_POST['id'];

//INFO BD
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "db";

//conexão com o MySQL

$conn = new mysqli($server,$user,$pass,$bdname);

//verificação com o BD


<<<<<<< HEAD
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
		window.alert('Excluído com sucesso!!');
		</script>
		</html>
	";

=======
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)
$deletar = "DELETE FROM candidatos WHERE id = $id";



if ($conn->query($deletar)==True) {
	echo "<br><h1><font color='green' align='center'>Deletado com Sucesso!</font></h1></br>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao Deletar!</font></h1></br>";
	}

<<<<<<< HEAD
}

$conn->close();
?>
=======


$conn->close();
?>
<h1> Excluir </h1>
 <div class="linha">
 </div>
<form class="fm" method="POST" action="Excluirphp.php">
  <ul>

  <li><label>ID: </label></li>
  <div class="inptbx">
  <li><input type="number" name="id" required=""></input></li>
     <li>	<button type="submit"> Deletar</button></li></div>
</div>
  </ul>
 </form>
</div>
</body>
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)
