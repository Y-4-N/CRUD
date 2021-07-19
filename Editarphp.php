<?php
//dados do HTML
$res = $_POST['res'];

$log = $_POST['log'];

$num = $_POST['nu'];

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



if ($conn->query($atualizar)==True) {
	echo "<br><h1><font color='green' align='center'>Atualizado com Sucesso!</font></h1></br>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao atualizar!</font></h1></br>";
	}

}

$conn->close();
?>