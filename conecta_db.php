<?php 
	$host = "localhost";
	$user = "user_dbloja";
	$pwd = "70021072M*";
	$db = "dbLoja";

	$con = mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar a base de dados: " . mysqli_connect_errno();
	} else{
		echo "Banco de dados conectado com sucesso!";
	}
 ?>