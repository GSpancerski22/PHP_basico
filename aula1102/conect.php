<?php
//=> para inserir no array 

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=aula1302;" ,"root","");
    }catch(PDOException $e){
        //ele acessa o objeto com o -> $e->getMessage()
        echo 'Erro no banco:'.$e->getMessage();
        exit;
    }catch(Exception $e){
        echo 'Erro no banco: '.$e->getMessage();
        exit;
    }

    
