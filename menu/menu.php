<?php
include_once "../sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title>Menu | Data Security</title>
		<link rel='stylesheet' type='text/css' media='screen' href='menu.css'>
		<link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon-32x32.png">
	</head>
	<body>
		<header class="cabecalho">
            <img class="cabecalhoImagem" src="../imagens/android-icon-96x96.png" alt="Logo da Data Security">
            <nav class="cabecalhoMenu">
				<a><strong>Bem-vindo(a), <?php echo $_SESSION['nome'];?>!</strong></a>
            	<a class="cabecalhoItem" href="../logout.php"><strong>Sair</strong></a>
            </nav>
        </header>
		<div class="container">
				<h1>Aulas disponíveis:</h1>
				<div class="menu">
					<form action="">
						<button type="submit">Malvertising</button>
					</form>

					<form action="">
						<button type="submit">Malware</button>
					</form>
				
					<form action="../phishing/phishing.php">
						<button type="submit">Phishing</button>
					</form>
		
					<form action="">
						<button type="submit">Ransomware</button>
					</form>
				</div>
			</div>
		</div>
		<?php mysqli_close($conexao);?>
	</body>
</html>