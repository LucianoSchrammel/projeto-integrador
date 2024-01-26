<?php
	session_start();

	include_once "conexao.php";

	$conexao = mysqli_connect($localhost, $dbUsuario, $dbSenha, $dbNome);

	if (!$conexao)
	{
		echo  "<script> alert('Não foi possível conectar ao Banco de Dados. Usuário ou senha inválidos!'); </script>";
		header('Location: ./login/login.html');
	}

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT id, nome ".
			"FROM usuarios ".
			"WHERE (usuario='$usuario') AND (senha='$senha')";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_num_rows($result);
	
	if ($row > 0)
	{
		while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $row[1];
		}
		header('Location: ./menu/menu.php');
	}
	else
	{
		echo  "<script>alert('Usuário ou senha inválidos!');</script>";
		header('Location: ./login/login.html');
	}
?>