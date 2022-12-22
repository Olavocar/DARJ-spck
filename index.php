<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">

        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Cadastro</title>

    </head>
    <body>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cadastro de Usuários</a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Novo Usuário</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">Listar Usuários</a>
                        
                        
                        
                        
                        
                        
                
                            </li>
     
        
      </ul>

    </div>
  </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col mt-5">
<?php

            include("config.php");
            switch($_REQUEST["page"]){
                case "novo":
                    include("novo-usuario.php");
            break;
                case "listar":
                    include("listar-usuarios.php");
            break;
                case "salvar":
                    include("salvar-usuario.php");
            break;
                case "editar":
                    include("editar-usuario.php");
            break;
                default:
                    print "<h1>Bem Vindos</h1>";
                }

?>
        </div>
    </div>
</div>

<form  action="index.html" method ="POST">
<div class="box">
        <fieldset class="field">Da Área RJ              
            <br> <br> <label class=" cadastrar">Cadastre-se:</label>
                    <br><br>
                        <label for="nome" class="inputtext">Nome:</label>
                            <br>
                            <input type="text"  name="nome" id="nome" class="inputUser" required/>  <br>
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
        </fieldset>
</div>
</form>

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