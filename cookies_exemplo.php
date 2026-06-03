<?php 
	setcookie("usuários","mah", time()+86400);
	setcookie("admin","etecia", time()+86400);

	$user = $_COOKIE['usuários'];
	$admin = $_COOKIE['admin'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Testando se  cookie foi definido</title>
 </head>
 <body>
 	<?php 
 	if (isset($_COOKIE['usuários'])) {
 		echo "Bem-vindo " . $_COOKIE['usuários'] . "! <br>";
 	}else{
 		echo "Usuário novo, seja bem-vindo! <br>";
 	}	
 	 ?>	
 </body>
 </html>

 <?php 
 	$adm = 'aluno';

	setcookie("Ocupação", $adm);

	setcookie("Ocupação", $adm, time()+60);
  ?>

