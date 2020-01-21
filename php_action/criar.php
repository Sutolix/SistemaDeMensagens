<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-enviar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$assunto = mysqli_escape_string($connect, $_POST['assunto']);
	$mensagem = mysqli_escape_string($connect, $_POST['mensagem']);

	$sql = "INSERT INTO enviadas (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['popup'] = "Mensagem salva!";
		header('Location: ../gerenciar.php');
	else:
		$_SESSION['popup'] = "Erro ao salvar mensagem.";
		header('Location: ../gerenciar.php');

	endif;

endif;

?>