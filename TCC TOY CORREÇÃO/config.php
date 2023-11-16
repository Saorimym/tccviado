<?php

    $dbHost = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = 'prof@etec';
    $dbName = 'tcc';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

?>