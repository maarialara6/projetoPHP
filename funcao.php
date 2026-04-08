<?php 
	function somarValor(){
		echo "Somando...";
	}

	function imprimirNome($nome){
		echo "<br />Olá $nome";
	}

	function somar($num5, $num6){
		return ($num5 + $num6);
	}

	somarValor();
	imprimirNome("Etecia");
	echo ("<br>");
	$resultado = somar(10.50, 20.00);
	echo ("O resultado da soma é $resultado");
	echo "<br>O resultado direto chamando a função:" . somar(30.50) + somar(10.50,20.35);
 ?>