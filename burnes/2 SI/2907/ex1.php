<!DOCTYPE html>
<html>
<head>
	<title>Meu primeiro PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Meu primeiro PHP</h1>

	<?php
		//declarar uma var nome e receber um valor
		$nome = "Vinicius Silva Lima Onofre Xywarzeneguer";
		//mostrar o conteúdo da variavel
		echo $nome;

		//declarar uma var idade e receber a idade
		$idade = 19;
		//colocar uma quebra de linha
		echo "<br>";
		//mostrar a idade do piá
		echo $idade;

		//mostrar frase
		echo "<p>O $nome tem $idade anos</p>";
		//aspas simples
		echo '<p>O $nome tem $idade anos</p>';

		//link para uma página
		$link = "http://www.uol.com.br";

		//mostrar um link
		echo "<p><a href='http://www.uol.com.br'>Página do Uol</a></p>\n";
		echo '<p><a href="http://www.uol.com.br">Página do UOL</a></p>\n';

		echo "<p><a href='$link'>Página do Uol</a></p>\n";
		echo '<p><a href="$link">Página do UOL</a></p>\n';

		echo "<p><a href=\"$link\">Página do \n\n \t\t\tUOL</a></p>";

	?>
	<h2>HTML Normal</h2>
	<p>Mas eu quero mostrar o conteúdo do $nome:</p>
	<?php
		//mostrar o $nome
		echo $nome;

		//idade receber outro
		$idade = "Corinxians";
		echo "<p>Idade: $idade</p>";
	?>
</body>
</html>