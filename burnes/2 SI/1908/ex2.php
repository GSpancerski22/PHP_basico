<?php
	
	//mostrar o conteúdo do GET
	print_r( $_GET );

	//recuperar o conteudo do $_GET
	$nome 	= trim ( $_GET["nome"] );
	$idade 	= trim ( $_GET["idade"] );
	//trim retira os espaços em branco a mais

	//validar se o campo esta em branco
	if ( empty ( $nome ) ) {
		echo "<p>Preencha o campo nome</p>";
	}
	if ( empty ( $idade ) ) {
		echo "<p>Preencha a idade</p>";
	}

	$sexo = "Indeterminado";

	if ( isset ( $_GET["sexo"] ) )
		$sexo 	= $_GET["sexo"];
		
	//mostrar na tela
	echo "<p>Nome: $nome <br>
		Idade: $idade <br>
		Sexo: $sexo </p>";

	//mostrar o formulario aqui
	include "formulario.php";


