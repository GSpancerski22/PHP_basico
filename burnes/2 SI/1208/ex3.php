<?php

	$a = 3;
	$b = 2;

	$c = $a / $b;

	echo "<p>Resultado: $c</p>";
	echo var_dump( $c );

	$d = "Sylvestre Ystallone";
	echo "<p>Nome: $d</p>";
	echo var_dump( $d );

	//quantidade de caractetes
	$e = strlen( $d );
	echo "<p>$d possui $e caracteres</p>";

	//deixar o nome maiusculo
	$d = strtoupper( $d );
	echo "<p>Nome maiúsculo: $d </p>";

	//deixar minusculo
	$d = strtolower( $d );
	echo "<p>Nome minusculo: $d </p>";

	$a = "5 bodes";
	$b = "4 pavão misterioso";
	echo "<p>$d tem $a e $b </p>";

	echo var_dump($a);
	echo var_dump($b);

	$c = $a + $b;
	echo var_dump($c);

	echo "<p>$d tem $c hornythonrryncon</p>";

	//casting - inteiro (int)
	$a = (int)$a;
	$b = (int)$b;

	echo "<p>O valor de a é $a e o de b é $b</p>";

	$e = "Dyonsson da Silva";
	$f = "5 ispraiti e 3 chicreti";

	$e = (int)$e;
	$f = (int)$f;

	echo "<p>$e e $f</p>";



