<?php 
	$num1=5;
	$num2=3;
	$op=2;

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
			$resp = soma($num1, $num2);
			echo "A soma de $num1 e $num2 é $resp";
		break;

		case 2:
			$resp = subtracao($num1, $num2);
			echo "A subtração de $num1 e $num2 é $resp";
			break;

		case 3:
			$resp = multiplicacao($num1, $num2);
			echo "A multiplicação de $num1 e $num2 é $resp";
			break;

		case 4:
			$resp = divisao($num1, $num2);
			echo "A divisão de $num1 e $num2 é $resp";
			break;
	}
 ?>