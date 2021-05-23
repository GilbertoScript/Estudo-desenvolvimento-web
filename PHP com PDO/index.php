<?php

	// SQL - Injection - Segurança no backend

	if(!empty($_POST['user']) && !empty($_POST['password'])) {

		// Parâmetros a serem passados a classe PDO('<DATA SOURCE NAME - DSN>', '<user>', '<senha>')
		$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
		$usuario = 'root';
		$senha = '';

		try {

			$conexao = new PDO($dsn, $usuario, $senha);	

			// query
			$query = "SELECT * FROM tb_usuarios WHERE ";
			$query .= " email = '{$_POST['user']}' ";
			$query .= " AND senha = '{$_POST['password']}' ";

			echo $query;

			$stmt = $conexao->query($query);
			$usuario = $stmt->fetch();

			echo "<pre>";
				print_r($usuario);
			echo "</pre>";

		} catch(PDOException $e) {

			echo "Erro: " . $e->getCode() . "<br />Mensagem: " . $e->getMessage();
		}
	}
		
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Segurança no backend</title>
</head>
<body>
		
	<form method="post" action="index.php">
		<input name="user" type="text" placeholder="Usuário"><br />
		<input name="password" type="password" placeholder="Senha"><br />

		<button type="submit">Entrar</button>
	</form>	

</body>
</html>