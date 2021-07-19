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
$res = $_POST['res'];

$log = $_POST['log'];

<<<<<<< HEAD
$num = $_POST['nu'];
=======
$num = $_POST['num'];
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)

$com = $_POST['com'];

$cid = $_POST['cid'];

$est = $_POST['est'];

$cep = $_POST['cep'];

$nome = $_POST['nome'];

$id = $_POST['id'];



//INFO BD
$server = "localhost";
$user   = "root";
$pass   = "";
$bdname = "db";

//conexão com o MySQL

$conn = new mysqli($server,$user,$pass,$bdname);

<<<<<<< HEAD
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

$atualizar = "UPDATE candidatos set nome = '$nome', res = '$res', log = '$log', num = '$num', com = '$com', cid = '$cid', est = '$est', cep = '$cep' where id = $id";

=======
//Atualizar os dados
$atualizar = "UPDATE candidatos set Resumo = '$res',Logradouro = '$log',Numero = '$log',Complemento = '$com',Cidade = '$cid',Estado = '$est',CEP = '$cep',Nome = '$nome'  where id = $id";
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)


if ($conn->query($atualizar)==True) {
	echo "<br><h1><font color='green' align='center'>Atualizado com Sucesso!</font></h1></br>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao atualizar!</font></h1></br>";
	}

<<<<<<< HEAD
}

$conn->close();
?>
=======


$conn->close();
?>
<h1> Editar </h1>
 <div class="linha">
 </div>
<form class="fm" method="POST" action="Editarphp.php">
  <ul>
  <br>
  <li><label>ID: </label></li>
  <div class="inptbx">
  <li><input type="number" name="id"  required=""></input></li>
</div>
  <br>
  <li><label>Nome: </label></li>
  <div class="inptbx">
  <li><input type="text" name="nome"  required=""></input></li>
  </div>
  <br>
  <li><label>Resumo da Entrevista: </label></li>
   <div class="inptbx">
  </li><textarea  rows="10" cols="30" type="text" name="res"  required=""></textarea></li>
  </div>
  <br><br>
    <li><label>CEP: </label></li>
  <div class="inptbx">
  </li><input type="number "name="cep" id="cep"  required=""></input></li>
  <br><br>
</div>
    <li><label>Logradouro: </label></li>
   <div class="inptbx">
  </li><input name="log" id="log"  required=""></input></li>
  </div>
  <br><br>
    <li><label>Cidade: </label></li>
    <div class="inptbx">
  </li><input name="cid" id="cid"   required=""></input></li>
  </div>
  <br><br>
  <li><label>Estado </label></li>
   <div class="inptbx">
  </li><input class="inptbx" name="est" id="est"  required=""></input></li>
   </div>
  <br><br>
    <li><label>Número: </label></li>
   <div class="inptbx">
  </li><input type="number" name="num"  required=""></input></li>
  </div>
  <br><br>
    <li><label>Complemento: </label></li>
   <div class="inptbx">
  </li><input name="com"  required=""></input></li>
  </div>
  <br><br>
    <li>  <button type="submit"> Salvar</button></li></div>
</ul>
  </form>
     <script src="script.js"></script>
</div>
</body>
</html>
>>>>>>> 1f731da (Terceira versão - API ViaCep\melhorias)
