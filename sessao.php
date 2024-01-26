<?php
	include_once "conexao.php";

	$conexao = mysqli_connect($localhost, $dbUsuario, $dbSenha, $dbNome);

	if (!$conexao)
	{
		echo  "<script>alert('Não foi possível conectar ao Banco de Dados!');</script>";
		header('Location: logout.php');
	}			

	session_start();
	if ((!isset($_SESSION["usuario"])) || (!isset($_SESSION["senha"])))
	{
		header("Location: ../login/login.html");
	}
	else
	{
		$usuario = $_SESSION["usuario"];
		$senha = $_SESSION["senha"];
	}
?>