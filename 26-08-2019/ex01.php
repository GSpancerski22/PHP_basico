<?php
	//mostrar o que foi enviado - mostrar o valor do array
	print_r( $_POST );
	//mostrar o array
	$name =$_POST["nome"];
	$idade =$_POST["idade"];
	$genero =$_POST["genero"];
	$estadoCi =$_POST["estado-civil"];
	$mensagem =$_POST["mensagem"];
	$curso =$_POST["cursos"];
	$email =$_POST["email"];

	echo "Seu nome é: $name <br>";
	echo "Sua Idade é: $idade <br>";
	
	if (isset ($_POST['informatica'])){
		echo "Você faz informatica";
	}else if (isset ($_POST['culinaria'])){
		echo "Você faz culinaria";
	}else if(isset ($_POST['tribocomininguem'])){
			echo "Você faz tribocomininguem";
	}else {
		echo "Não faz Nada ";
	}
	echo "Seu Estado Civil é $estadoCi <br>";
	echo "A mensagem é $mensagem <br>";
	if($genero == "M"){
		echo "Você é Macho <br>";
	}else{
		echo "Você é muié <br>";
	}
	echo "O seu E-mail é $email <br>";
	