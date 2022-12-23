<?php
session_start();
include('config.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
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
    <p>     
        <label>Email:</label>
            <input type="text" name="email" placeholder="Digite seu email">
    </p>
    <p>     
        <label>senha:</label>
            <input type="password" name="senha" placeholder="Digite sua senha">
    </p>
    <p>
            <button type="submit">Entrar</button>
    </p>
    </form>
    </div>
</body>
</html>