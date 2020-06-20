<?php 
    // onde esta hospedado
    //$host = "localhost";

    $con = mysqli_connect(
        // onde esta hospedado
        "localhost",
        //o usuario
        "root",
        // a senha 
        "",
        //é o nome da tabela onde foi salva 
        "table_hq"
        //o or die caso nao consiga conectar
    )or die ("Erro ao realizar a conexao !!");

    /*
    //o usuario 
    $user ="root";

    // a senha 
    $password = "root";

    // bd = banco de dados - é o nome da tabela onde foi salva 
    $bd = "table_hq";

    //essa var é ma coneccao com o banco / e sempre sera chama quando for buscar algo no bd 
    //$host, $user, $password, $bd sao os parametros e devem estar nessa ordem
    $mysqli = new mysqli($host, $user, $password, $bd);
    //$mysqli = connect_errno verifica se ocorreu algm erro /se ouver algum erro ele retorna o numero do erro
    if( $mysqli -> connect_errno)
    //.$mysqli=connect_error descricao do erro
        echo "Falha na conexão : (".$mysqli ->  connect_errno.") ".$mysqli -> connect_error;
    */


