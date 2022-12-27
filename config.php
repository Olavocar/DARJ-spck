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
    
function ChavedeAcesso($email){
    $stmt = ("SELECT * from cadastro WHERE email = $email");
    $stmt ->bindValue(":email", $email);
    $run = $stmt->execute();

    $rs = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rs){
        $chave = sha1($rs["id"].$rs["senha"]);
        return $rs;
    }
    
}


?>