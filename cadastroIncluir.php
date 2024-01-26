<?php
	include_once "conexao.php";

	$conexao = mysqli_connect($localhost, $dbUsuario, $dbSenha, $dbNome);

	if (!$conexao)
	{
		echo  "<script>alert('Não foi possível conectar ao Banco de Dados!');</script>";
		header('Location: logout.php');
	}			

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dataNascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios(nome, sobrenome, data_nascimento, email, usuario, senha) ".
			"VALUES ('$nome','$sobrenome','$dataNascimento','$email','$usuario','$senha')";
    $result = mysqli_query($conexao, $sql);

	if (!$result) {
        echo "Erro ao cadastrar o usuário: ";
    }
    mysqli_close($conexao); 
    header("Location: ./login/login.html");
?>