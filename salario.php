<?php
	echo "Salário Bruto <br>";
	echo "Imposto de Renda <br>";

	echo "Porcentagem de deconto: % <br>";
	echo "Valor do desconto  <br>";

	echo "Salário liquído: <br>";

	$salB;
	$sal;
	$porc1=7.5;
	$porc2=15;
	$porc3=22.5;
	$porc4=27.5;

	if ($salB >= && <= 2428.80) {
		echo "Isento";
	} elseif ($salB 2428.81 >= && $salB <=2826.65) {
		$sal = $salB ($salB - $porc1 / 100);
		echo "Salario Bruto: $salB<br>";
		echo "Porcentagem de deconto: $porc1%";
		echo "Salário liquído: $sal";
	}


 ?>