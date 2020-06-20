<?php
	//seu salario
	$salario = 1200;
	//salario minimo
	$salariominimo = 998;

	//descobrir quantos salarios
	$salarios = $salario / $salariominimo;

	//quantos salários vc recebe
	echo "<p>Você recebe $salarios salários</p>";

	if ( $salarios <= 1 ) {
		echo "<p>A coisa tá feia</p>";
	} else if ( $salarios <= 2 ) {
		echo "<p>Até que não está ruim!</p>";
	} else if ( $salarios <= 3 ) {
		echo "<p>Mais ou menos</p>";
	} else if ( $salarios <= 4 ) {
		echo "<p>Tá bom</p>";
	} else {
		echo "<p>Bom demais</p>";
	}