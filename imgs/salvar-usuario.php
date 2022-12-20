<?php
    switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $sobrenome =$POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, sobrenome,email, senha, data_nasc) VALUES ('{$nome}', '{$email}','{$sobrenome}', '{$senha}', '{$data_nasc}')";

        $res = $conn->query($sql);
        
        break;
    case "editar":

        break;
    case "excluir":

        break;
            

    }