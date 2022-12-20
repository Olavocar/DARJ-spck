<?php

    $conn = new mysqli('db4free.net','volaodarj','26ec018b','darj');

    if($conn->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão bem sucedida ";
    }

?>