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
		';

		$stmt = $conexao->query($query);

		foreach ($stmt as $key => $value) {
			
			echo "<pre>";
				print_r($value['nome']);
			echo "</pre>";
		};


		// Para retornar apenas um registro utilizamos o método fetch
		//$listaUsuarios = $stmt->fetchAll();

		/* echo "<pre>";
		 	print_r($listaUsuarios);
		  echo "</pre>"; */

		/* Percorrendo e listando itens de dentro da variável
		foreach ($listaUsuarios as $key => $value) {
			
				echo $value['nome'];
				echo "<hr />";
		} */

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