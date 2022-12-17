<?php
    
    $dbHost = 'https://www.db4free.net';
    $dbUsername = 'volaodarj';
    $dbPassword = '71217ca8';
    $dbName = 'daarearj';
    
    $conexao = new mysqli('localhost:3306','volaodarj','71217ca8','daarearj');

    if($conexao->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão rodando redondinha";
    }

?>