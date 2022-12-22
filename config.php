<?php
    $dbHost = 'db4free.net:3306';
    $dbUsername = 'volaodarj';
    $dbPassword = '26ec018b';
    $dbname = 'daarearj';

    $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);

    if($conn->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão bem sucedida ";
    }

?>