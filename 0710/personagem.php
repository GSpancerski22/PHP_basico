?php 
    // para conectar ao banco
        include "conexao.php";
        
            $sql = "select id, nome 
            from personagems 
            order by titulo";
            echo $sql ;
            //mysqli_query ele execulta 
            //$con é onde 
            $result = mysqli_query($con, $sql);
            //separa os resultados $row = linha /ele guarda tudo dentro do result 
            //mysqli_fetch_arry($result) ele separa as linha 
            while ($row = mysqli_fetch_array($result)){
                //separa os campos 
                $id = $row["id"];
                $nome = $row ["nome"];
                
                    
                echo "<p>ID: $id - $nome </p>";
            }
?>
