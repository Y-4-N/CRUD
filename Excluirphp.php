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

$deletar = "DELETE FROM candidatos WHERE id = $id";



if ($conn->query($deletar)==True) {
	echo "<br><h1><font color='green' align='center'>Deletado com Sucesso!</font></h1></br>"; 

}else{
	echo "<br><h1><font color='red' align='center'>Erro ao Deletar!</font></h1></br>";
	}

}

$conn->close();
?>