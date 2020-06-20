<?php
    //mostrar o conteúdo do GET
    print_r( $_GET );

    //Recuperar o Conteúdo do $_GET
    $nome  = $_GET["nome"];
    $idade = $_GET["idade"];

    if ( isset( $_GET["sexo"] ) ){
        $sexo = $_GET["sexo"];
    } else {
        $sexo = "Inderteminado";
    }

    //Mostrar na tela
    echo "<p>Nome: $nome <br>
        Idade: $idade <br>
        Sexo:  $sexo </p>";