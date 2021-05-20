<?php
	
	// Parâmetros a serem passados a classe PDO('<DATA SOURCE NAME - DSN>', '<user>', '<senha>')
	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$usuario = 'root';
	$senha = '';

	try {

		$conexao = new PDO($dsn, $usuario, $senha);	

		$query = '
			create table if not exists tb_usuarios(
				id int not null primary key auto_increment,
				nome varchar(50) not null,
				email varchar(100) not null,
				senha varchar(16) not null
			)
		';

		// Retorno esperado é 0, isso pois o método exec retorna a quantidade de linhas que foram alteradas durante a execução da query, como executamos uma query pertencente ao subgrupo DDL(Data Definition Language), o retorno é 0 pois não foi afetado nenhuma linha, e sim criadas.
		$retorno = $conexao->exec($query);

		$query = '
			delete from tb_usuarios
		';

		$retorno = $conexao->exec($query);
		echo $retorno;

	} catch(PDOException $e) {

		echo "Erro: " . $e->getCode() . "<br />Mensagem: " . $e->getMessage();
	}
		
?>