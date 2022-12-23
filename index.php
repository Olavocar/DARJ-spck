<?php
session_start();
              $dbHost = 'db4free.net:3306';
              $dbUsername = 'volaodarj';
              $dbPassword = '26ec018b';
              $dbname = 'daarearj';
          
              $conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbname);

            if(isset($_POST['submit']))
    {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $telefone = $_POST['telefone'];
            $data_nasc = $_POST['data_nasc'];        
            $query = mysqli_query($conn, "INSERT INTO cadastro (nome, sobrenome, email, senha, telefone, data_nasc) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$telefone', '$data_nasc')");
    }
        if($query){
        echo 'Cadastro realizado com sucesso';
        header('Location: indexlogin.php');
        exit();
        }   
?>
<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">

        <link href="style.css" rel="stylesheet">

        <title>Cadastro</title>
</head>
 <body class="box">
  <div class="container">
    <div class="row">
     <div class="col mt-5">
 <form action="index.php" method ="POST">
 <div class="box">
        <fieldset class="field">Da Área RJ              
            <br> <br> <label class="cadastrar">Cadastre-se:</label>
                    <br><br>
                        <label for="nome" class="inputtext">Nome:</label>
                            <br>
                            <input type="text"  name="nome" id="nome" class="inputUser" required/>  
                            <br>
                            <label for="sobrenome" class="inputtext">Sobrenome:</label>
                            <br>               
                            <input type="text"  name="sobrenome" id="sobrenome" class="inputUser" required/>
                            <br>
                            <br>
                            <label for="email" class="inputtext">Email:</label>
                            <br>
                            <input type="email" name="email" class="form-control" required>
                            <br>
                            <label>Cadastre Sua Senha:</label><br>
                            <input type="password" name="senha" id="senha" class="form-control" required>
                            <br><br>
                            <label for="telefone" class="inputtext">Telefone:</label>
                            <br>
                            <input type="text"  name="telefone" id="telefone" class="inputUser" required/>
                            <br>
                            <br>
                            <label for="data_nasc" class="inputtext">Data de Nascimento:</label>
                            <br>    
                            <input type="date"  name="data_nasc" id="data_nasc" class="form-control" required/>
                            <br>
                            <br>
                            <br>
                            <br>
                            <button class="btn btn-primary" name="submit" id="submit" type="submit">Enviar</button>
                            <br>
                            <fiedlset>
                            Já é um usuário registrado?
                            <a href="https://daarearj.com/indexlogin.php">Acesse aqui</a>
                            </fieldset>
        </fieldset>
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>

<!--
<li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
 -->