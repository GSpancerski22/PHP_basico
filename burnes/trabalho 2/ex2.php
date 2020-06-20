<?php
    //mostrar o conteúdo do GET
    print_r( $_GET );

    //Recuperar o Conteúdo do $_GET
    $nome  = trim ( $_GET["nome"] );
    $idade = trim ( $_GET["idade"] );
    //trim retira os espaços em branco a mais

    //validar se o campo esta em branco
    if( empty( $nome ) ){
        echo "<p>Preencha o campo</p>";
    } 
    if ( empty( $idade ) ){
        echo "<p>Preencha a idade</p>";
    }
    $sexo = "Indeterminado";

    if ( isset( $_GET["sexo"] ) )
        $sexo = $_GET["sexo"];

    //Mostrar na tela
    echo "<p>Nome: $nome <br>
        Idade: $idade <br>
        Sexo:  $sexo </p>";

    //Mostrar Formulario aqui
    include "formulario.php";