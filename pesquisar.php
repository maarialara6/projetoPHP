<?php 
	$host = "localhost";
	$user = "user_dbloja";
	$pwd = "70021072M*";
	$db = "dbLoja";

	$con = mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar a base de dados: " . mysqli_connect_errno();
	} else{
		$sql = "select nome,email from tbPessoa";

		$resultado = mysqli_query($con,$sql);

		echo "<h2>Lista de pessoas<h2>";

		while ($pessoa = mysqli_fetch_array($resultado)) {
			echo $pessoa['nome'] . "-" . $pessoa['email'] . "<br><br>";
		}

		mysqli_close($con);
	}
 ?>