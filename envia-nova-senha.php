<?php
session_start();
include('config.php');

if(empty($_POST['email'])) {
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);


$query = "select email from cadastro where email = '{$email}'";

$chave = $conn->ChavedeAcesso($email);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: envia-nova-senha.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>