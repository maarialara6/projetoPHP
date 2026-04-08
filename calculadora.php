<?php 
	$num1 =10;
	$num2 =20;
	$op=2;

	switch ($op) {
		case 1: $resp = $num1 + $num2;
			$nomeOP= "soma";
			break;

		case 2: $resp = $num1 - $num2;
			$nomeOP= "subtração";
			break;

		case 3: $resp = $num1 / $num2;
			$nomeOP= "divisão";
			break;

		case 4: $resp = $num1 * $num2;
			$nomeOP= "multiplicação";
			break;
		
		default: 
			echo("Sair");
			break;
	}
	echo "A $nomeOP do $num1 e $num2 é $resp";
 ?>