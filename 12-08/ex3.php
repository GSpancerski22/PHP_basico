<?php
	
	$a = 3;
	$b = 2;

	$c = $a / $b;

	echo "<p> Resultado: $c </p>";
	echo var_dump( $c );

	$d = "Sylvertre Stalongy";
	echo "<p> Nome: $d</p>";
	echo var_dump( $d );

	//quaantos caracteres tem 
	$e = strlen( $d );
	echo"<p> O $d possui $e caracteres </p>";

	//deixar o nome maiusculo
	$d = strtoupper( $d );
	echo"<p> $d </p>";

	//deixa o nome em minusculo
	$d = strtolower( $d );
	echo "<p> Nome Minusculo </p>";

	$a = " 5 pavão";
	$b = " 4 bode";
	echo "<p> $d tem $a e $b </p>";

	echo var_dump($a);
	echo var_dump($b);

	$c = $a + $b;
	echo var_dump($c);
	echo "<p> $d tem $c hornythonrryncon </p>";

	//casting
	$a = (int)$a;
	$b = (int)$b;

	echo "<p> O valor de a é $a e o valor de b e $b </p>";


	$e = "Dyonsson Junior da Silva Cleyson Madaleno Pinsaurro Rex";
	$f = "5 insprayit e 3 chicrete";

	$e = (int)$e;
	$f = (int)$f;	

	echo "<p> $e e $f";		









