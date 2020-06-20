<?php
	
	//mostrar o conteúdo do GET
	print_r( $_GET );

	//recuperar o conteudo do $_GET
	$nome 	= $_GET["nome"];
	$idade 	= $_GET["idade"];

	if ( isset ( $_GET["sexo"] ) ){
		$sexo 	= $_GET["sexo"];
	} else {
		$sexo = "Indeterminado";
	}
	

	//mostrar na tela
	echo "<p>Nome: $nome <br>
		Idade: $idade <br>
		Sexo: $sexo </p>";


