<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/parsley.min.js"></script>
</head>
<body>
<div class="container">
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    //print_r ( $_POST ); 

    //verificar se os dados estão sendo enviados por POST
    if ( $_POST ) {

        //iniciar as variaveis
        $nome = $email = $genero = "";

        //verificar se a variável existe no POST
        if ( isset ( $_POST["nome"] ) )
            //recuperando a variavel do POST e adicionado a $nome
            $nome   = trim ( $_POST["nome"] );
        
        if ( isset ( $_POST["email"] ) )
            $email  = trim ( $_POST["email"] );

        if ( isset ( $_POST["genero"] ) )
            $genero = trim ( $_POST["genero"] );

        //verificar se o nome esta preenchido
        if ( empty ( $nome ) ) {
            echo '<p>Preencha o nome</p>';
            exit;
        }

    } else {
        echo '<p class="alert alert-danger">Preencha o formulário</p>';
    }
?>
</div>
</body>
</html>