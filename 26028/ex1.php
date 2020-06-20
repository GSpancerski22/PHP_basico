<?php
	//mostrar o que foi enviado
	print_r( $_POST );
	
	//mostrar array
 $nome = trim($_POST['nome']);
    $genero = "Indeterminado";
    if (isset ( $_POST['genero'])) { //se for setado, modifica o padrão
		$genero = ($_POST["genero"]);
    }
    
    if ($genero == 'F') {
        $genero = 'Feminino';
    } else if ($genero == 'M') {
        $genero = 'Masculino';
    }
    $idade = trim($_POST['idade']);
    $estadocivil = ($_POST['estadocivil']);
    $mensagem = trim($_POST['mensagem']);

    $moda = null;
    $culinaria = null;
    $pd = null;

    if (isset ( $_POST['moda'])) { 
      $moda = ("Moda");
    }

    if (isset ( $_POST['culinaria'])) { 
		  $culinaria = ("Culinaria");
    }
    
    if (isset ( $_POST['costura'])) { 
		  $pd = ("Costura");
    }
     echo "<p>$nome, é do gênero $genero e é $estadocivil.<br>
    $nome tem interesse em $moda $culinaria $costura deixou a seguinte mensagem: $mensagem</p>";

	

	