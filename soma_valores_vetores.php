<?php 
	$num1 = array (10, 20, 30, 40);
	$num2 = array (50, 60, 70, 80);

	for ($i=0; $i < count($num1) ; $i++) { 
		$valor[$i] =  $valor[$i] + $num1[$i];
	};


	for($i=0; $i < sizeof($num1); $i++){
		echo $valor[$i] . "<br>";
	};

 ?>