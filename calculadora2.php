<?php 
	$num1=3;
	$num2=5;
	$op=1;

	function soma($num1, $num2){
		return ($num1 + $num2);
	}

	function subtracao($num1, $num2){
		return ($num1 - $num2);
	}

	function multiplicacao($num1, $num2){
		return ($num1 * $num2);
	}

	function divisao($num1, $num2){
		return ($num1 / $num2);
	}

	switch($op){
		case 1:
			$nomeOP = "soma";
			$resp = soma($num1, $num2);
		break;

		case 2:
			$nomeOP = "subtração";
			$resp = subtracao($num1, $num2);
			break;

		case 3:
			$nomeOP = "multiplicação";
			$resp = multiplicacao($num1, $num2);
			break;

		case 4:
			$nomeOP = "divisão";
			$resp = divisao($num1, $num2);
			break;
	}
	echo "A $nomeOP de $num1 e $num2 é $resp";
 ?>