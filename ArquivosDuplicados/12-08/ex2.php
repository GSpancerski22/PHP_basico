<?php
	//seu salario
	$salario = 1200;
	//salario minimo 
	$salarioMinimo = 998;

	//descobrir quantos salarios 
	$salarios= $salario / $salarioMinimo;

	//quantos salario você recebe
	echo "<p> Você recebe $salarios salários</p>";

	if ( $salarios <= 1) {
		echo"<p> A coisa ta feia em </p>";
	} else if ( $salario <= 2 ) {
		echo"<p> Ta 'quase' bom </p>";
	} else if ( $salario <=3 ) {
		echo"<p> Ta mao o meno </p>";
	} else if ( $salario <=4 ) {
		echo"<p> Ta cheio de grana </p>";
	} else {
		echo"<p> Tamo rico carai </p>";
	}