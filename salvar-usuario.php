<?php
    switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $sobrenome =$POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = _POST["telefone"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO cadastro (nome, sobrenome, email, senha, telefone, data_nasc) VALUES ('{$nome}', '{$sobrenome}', '{$email}', '{$senha}', '{$telefone}', '{$data_nasc}')";

        $res = $conn->query($sql);
        
        break;
    case "editar":

        break;
    case "excluir":

        break;
            

    }