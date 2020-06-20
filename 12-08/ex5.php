<?php
	
	$produto = array("Bolovo","Tubaina","Misto-quente","X-Bacon","Corote","Velho Barreiro","Balalayka","Rayska");

	//configurar $nome com o produto na posição 2
	$nome = $produto[2];
	echo "<p> produto 2 é $nome </p>";
	
	// concatenar
	echo "<p> Produto 2 é ".$produto[2]."</p>";

	// for no php de 1 a 10
	for ($i=0; $i < 10; $i++) { 
		$nome = $produto[$i];
		echo "$i - $nome <br>";
	}