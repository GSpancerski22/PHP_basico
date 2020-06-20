<?php
	//adicionar um valor a uma variavel
	$valor1 = 11.99;
	$valor2 = "Jhanayna Ferrari";
	$a 		= 10;
	$b 		= 3;
	$c 		= "5 gatos";
	$d 		= "3 laranjas";

	/*
	Comentário em bloco
	mais de uma linha
	*/

	echo "<p>$valor2 tem R$ $valor1 no bolso e $c</p>";

	$nome = "Katyusçia Feracci";

	//mostrar o tipo de dado aguardado na variavel
	var_dump($valor1);
	var_dump($valor2);
	var_dump($nome);

	//operacoes
	//somar os dois valores
	$f = $a + $b + $valor1;
	echo "<p>A soma dos valores é: $f </p>";

	//subtrair
	$g = $a - $b;
	echo "<p>A subtração dos valores é: $g</p>";

	//multiplicar
	$h = $a * $b;
	echo "<p>O resultado da multiplicação é: $h</p>";

	//dividir
	$j = $a / $b;
	echo "<p>O resultado da divisão é: $j </p>";

	//funcao de formatacao numérica
	$k = number_format($j , 2 , "," , "." );
	echo "<p>O número formatado é: $k</p>";
	//number_format($var, casas decimais, sep. decimal, sep. milhares);

	$nome = "X";
	$idade = 40;

	$meses = $idade * 12;
	$dias = $meses * 30;
	$horas = $dias * 24;
	$minutos = $horas * 60;

	echo "<p>$meses $dias $horas $minutos</p>";