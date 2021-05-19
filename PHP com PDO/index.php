<?php
	
	$dsn = 'mysql:host=localhost;db_name=php_com_pdo';
	$usuario = 'root';
	$senha = '';

	// Parâmetros a serem passados a classe PDO('<DATA SOURCE NAME - DSN>', '<user>', '<senha>')
	$conexao = new PDO($dsn, $usuario, $senha)

?>
