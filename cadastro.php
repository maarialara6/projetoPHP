<?php 
	$host = "localhost";
	$user = "user_dbloja";
	$pwd = "70021072M*";
	$db = "dbLoja";

	$con = mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar a base de dados: " . mysqli_connect_errno();
	} else{
		$sql = "insert into tbPessoa(nome, email) values('$_POST[nome]', '$_POST[email]')";

		if (mysqli_query($con, $sql)) {
			echo "Cadastrado!";
		}else{
			echo "Erro ao cadastrar." . mysqli_error();
		}	

		mysqli_close($con);
	}
 ?>