<?php 
	$al_aprovado=0;
	$al_exame=0;
	$al_reprovado=0;

	$media;

	echo "====== MÉDIA DE ALUNOS ====== <br><br><br>";

	//aluno 1
	$al1_nota1= 3;
	$al1_nota2= 1;

	$media = ($al1_nota1 + $al1_nota2) / 2;

	echo "Aluno 1: $media <br>";
	if ($media < 3) {
		$al_reprovado++;
		echo "REPROVADO<br><br>";
	}else if ($media <=7) {
		$al_exame++;
		echo "EXAME<br><br>";
	}else{
		$al_aprovado++;
		echo "APROVADO<br><br>";
	}

	//aluno 2
	$al2_nota1= 6;
	$al2_nota2= 9;

	$media = ($al2_nota1 + $al2_nota2) / 2;

	echo "Aluno 2: $media <br>";
	if ($media < 3) {
		$al_reprovado++;
		echo "REPROVADO<br><br>";
	}else if ($media <=7) {
		$al_exame++;
		echo "EXAME<br><br>";
	}else{
		$al_aprovado++;
		echo "APROVADO<br><br>";
	}

	//aluno3
	$al3_nota1= 5;
	$al3_nota2= 7;

	$media = ($al3_nota1 + $al3_nota2) / 2;

	echo "Aluno 3: $media<br>";
	if ($media < 3) {
		$al_reprovado++;
		echo "REPROVADO<br><br>";
	}else if ($media <=7) {
		$al_exame++;
		echo "EXAME<br><br>";
	}else{
		$al_aprovado++;
		echo "APROVADO<br><br>";
	}

	//aluno 4
	$al4_nota1=2;
	$al4_nota2=8;

	$media = ($al4_nota1 + $al4_nota2) / 2;

	echo "Aluno 4: $media<br>";
	if ($media < 3) {
		$al_reprovado++;
		echo "REPROVADO<br><br>";
	}else if ($media <=7) {
		$al_exame++;
		echo "EXAME<br><br>";
	}else{
		$al_aprovado++;
		echo "APROVADO<br><br>";
	}

	//aluno 5
	$al5_nota1=2;
	$al5_nota2=3;

	$media = ($al5_nota1 + $al5_nota2) / 2;

	echo "Aluno 5: $media<br>";
	if ($media < 3) {
		$al_reprovado++;
		echo "REPROVADO<br><br>";
	}else if ($media <=7) {
		$al_exame++;
		echo "EXAME<br><br>";
	}else{
		$al_aprovado++;
		echo "APROVADO<br><br>";
	}

	//aluno6
	$al6_nota1=10;
	$al6_nota2=10;

	$media = ($al6_nota1 + $al6_nota2) / 2;

	echo "Aluno 6: $media<br>";
	if ($media < 3) {
		$al_reprovado++;
		echo "REPROVADO<br><br>";
	}else if ($media <=7) {
		$al_exame++;
		echo "EXAME<br><br>";
	}else{
		$al_aprovado++;
		echo "APROVADO<br><br>";
	}

	echo "Alunos reprovados: $al_reprovado<br>";
	echo "Alunos de exames: $al_exame<br>";
	echo "Alunos aprovados: $al_aprovado<br>";

 ?>