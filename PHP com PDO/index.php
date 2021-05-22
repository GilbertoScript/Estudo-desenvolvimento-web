<?php
	
	// Parâmetros a serem passados a classe PDO('<DATA SOURCE NAME - DSN>', '<user>', '<senha>')
	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$usuario = 'root';
	$senha = '';

	try {

		$conexao = new PDO($dsn, $usuario, $senha);	

		$query = '
			SELECT 
				* 
			FROM 
				tb_usuarios
			ORDER BY
				nome DESC limit 1
		';

		$stmt = $conexao->query($query);

		// Para retornar apenas um registro utilizamos o método fetch
		$usuario = $stmt->fetch(PDO::FETCH_OBJ);

		echo "<pre>";
			print_r($usuario);
		echo "</pre>";

	} catch(PDOException $e) {

		echo "Erro: " . $e->getCode() . "<br />Mensagem: " . $e->getMessage();
	}

	/*
	// $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
	// Para obter o retorno apenas dos índices associativos
	// passamos como parâmetro do fetchAll = 'PDO::FETCH_ASSOC' 
	// E para recuperar apenas os retornos númericos = 'PDO::FETCH_NUM'
	// E para se trabalhar com array de objetos = 'PDO::FETCH_OBJ'
	*/
		
?>