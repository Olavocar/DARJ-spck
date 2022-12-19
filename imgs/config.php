<?php
    
    $dbHost = 'https://www.db4free.net';
    $dbUsername = 'volaodarj';
    $dbPassword = '71217ca8';
    $dbName = 'daarearj';
    
    $conexao = new mysqli('$dbHost','$dbUsername','$dbPassword','$dbName');

    if($conexao->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão rodando redondinha";
    }

?>
