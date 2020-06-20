<?php
	//array
	$produto = array("Bolovo","Tubaina",
		"Misto Quente","Xis Bêico",
		"Corote","Velho Barreiro",
		"Balalayka","Rayska");

	echo var_dump( $produto );
	echo $produto;

	//funcao para mostrar conteudo do array
	print_r( $produto );

	//mostrar o valor de um determinado ponteiro
	echo $produto[5];