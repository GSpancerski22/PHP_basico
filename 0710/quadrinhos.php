<html>
<head>
<meta charset="utf-8">  
</head>
<body>
    <h1>Mostrar quadrinhos </h1>
    <?php 
    // para conectar ao banco
        include "conexao.php";
        //selecionar os quadrinhos select é para selecionar 
        //as id os titulos  e o valor / from do quadrinho 
        //order by / ordenado pelo titulo
            $sql = "select id, titulo,valor 
            from quadrinho 
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
                $titulo = $row ["titulo"];
                $valor = $row ["valor"];
                $valor = number_format($valor,2,",",".");

                //codificar utf-8
                $titulo = utf8_encode($titulo);
                    
                echo "<p>ID: $id - $titulo R$ $valor</p>";
            }
?>

</body>
</html>