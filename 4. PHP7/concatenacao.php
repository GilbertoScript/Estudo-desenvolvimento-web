<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 8 - PHP - Concatenação</title>
</head>
<body>

	<!-- O recurso de concatenação em PHP, é bastante utilizado, tanto para concatenar strings com variáveis, para concatenar outros valores -->

	<?php 

		$nome = 'Gilberto';
		$idade = 17;
		$estudo = 'Php';

		// Para o primeiro exemplo temos a impressão de um texto hardcore no navegador: 
		// echo "Olá Gilberto, vejo que possui 17 anos e que atualmente estuda php."; 

		// Concatenando as informações obtidas em variáveis ao texto precisaremos utilizar o operador de concatenação '.', isolando as outras informações com aspas simples ou duplas, parecido com o Javascript
		echo 'Olá ' . $nome . ', vejo que possui ' . $idade . ' anos e que atualmente estuda ' . $estudo . '. <br>'; 

		// Outra forma de se fazer a concatenação, é a utilização de aspas duplas, a diferença entre as aspas duplas e simples, é que com a utilização de aspas duplas, pode ser feito a concatenação de uma variável diretamente, por exemplo: 

		echo "Olá $nome, seja bem vindo de volta!";

	?>

</body>
</html>