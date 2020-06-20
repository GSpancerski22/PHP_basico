<?php
	//array
	$produto = array("Bolovo","Tubaina",
		"Misto Quente","Xis Bêico",
		"Corote","Velho Barreiro",
		"Balalayka","Rayska","Pastel",
		"Coxinha","Bolinho da Serra");

	//configurar o $nome com o produto na posição 2
	$nome = $produto[2];
	//mostrar na tela
	echo "<p>Produto 2 é $nome</p>";

	//concatenar
	echo "<p>Produto 3 é ".$produto[3]."</p>";

	//conta quantos produtos tem no array
	$c = count( $produto );
	echo "<p>$c produtos</p>";

	//for no php - de 1 a 10
	for ($i=0; $i < $c; $i++) { 
		
		$nome = $produto[$i];
		echo "$i - $nome <br>";

	}

	//iniciar uma variavel
	$x = 0;
	//listar os dados de um array
	foreach ( $produto as $dado ) {
		echo "$x - $dado <br>";
		//somar mais 1 ao x
		$x++;
	}

	//laço com while
	$j = 0;
	while ( $j < $c ) {
		echo $j." - ".$produto[$j]."<br>";
		$j++;
	}
