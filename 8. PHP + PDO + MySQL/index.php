<?php

	// SQL - Injection - Segurança no backend - Prepare Statement

	if(!empty($_POST['user']) && !empty($_POST['password'])) {

		// Parâmetros a serem passados a classe PDO('<DATA SOURCE NAME - DSN>', '<user>', '<senha>')
		$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
		$usuario = 'root';
		$senha = '';

		try {

			$conexao = new PDO($dsn, $usuario, $senha);	

			$query = "SELECT * FROM tb_usuarios WHERE ";
			$query .= " email = :usuario ";
			$query .= " AND senha = :senha ";

			// Preparando a query para que assim possa se obter mais segurança, evitando SQL injections
			$stmt = $conexao->prepare($query);

			// Agora executamos o bindValue, que por sua vez faz um tratamento em locais onde possam ocorrer possíveis SQL injections
			$stmt->bindValue(':usuario', $_POST['user']);
			$stmt->bindValue(':senha', $_POST['password']);

			// Após feitas as tratativas contra SQL injections, podemos executar a query.
			$stmt->execute();

			// Recuperando o primeiro usuário:
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