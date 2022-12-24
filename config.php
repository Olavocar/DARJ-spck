<?php
    $dbHost = 'db4free.net:3306';
    $dbUsername = 'volaodarj';
    $dbPassword = '26ec018b';
    $dbname = 'daarearj';

    $conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbname);

    if($conn->connect_errno)
    {
        echo "Não foi possível conectar";
    }
    
?>