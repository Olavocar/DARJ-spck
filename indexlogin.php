<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
</header>
        <main>
                <div class="box">
                    <div class="box4">    
                <h3>Login:</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div>
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <br>
                        <form action="login.php" method="POST">
                            <div>
                                <div>
                                    <input name="email" name="text" placeholder="Digite seu email">
                                </div>
                            </div>
                            <br>
                            <div>
                                <div>
                                    <input name="senha" type="password" placeholder="insira sua senha">
                                </div>
                            </div>
                            <br>
                            <button type="submit">Entrar</button>
                        </form>
                        </div>
                </div>
</main>
</body>
</html>