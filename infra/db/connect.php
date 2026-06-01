<?php

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

    $conn = new mysqli($host,$user,$pass,$db);

//faz uma conexão entre a aplicação PHP e o banco de dados MySQL, e verifica se a conexão foi feita com sucesso ou se teve algum erro.

    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?> 
