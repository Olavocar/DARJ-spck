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
    <link href="style.css" rel="stylesheet">
</head>

<body class="container">
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                <div class="box">    
                <h3>Login</h3>
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
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" placeholder="Digite seu email">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" type="password" placeholder="insira sua senha">
                                </div>
                            </div>
                            <button type="submit">Entrar</button>
                        </form>
                </div>
    </div>
    </div>
    </div>
    </div>
</section>
</body>
</html>