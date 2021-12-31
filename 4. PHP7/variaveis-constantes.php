<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 9 - PHP - Variáveis constantes</title>
</head>
<body>

	<!-- Um dos recursos do PHP, assim como em outras linguagens de programação, são as variáveis constantes, ou seja um armazenamento de determinado dado, que não pode ser alterado ao decorrer da aplicação -->

	<?php 

		// Diferentemente da criação de uma variável comum no php, as constantes são criadas da seguinte forma:

		// Essa função por sua vez espera dois parâmetros, o nome e o valor.
		define('BD_URL', 'endereco_bd');
		define('BD_USUARIO', 'usuario_bd');
		define('BD_SENHA', 'senha_bd');

		// E se por algum acaso dentro do script, fosse feito uma alteração no valor de alguma constante, isso retornaria um erro, pois, constantes não podem ter seu valor trocado:

		// ----------------------- Erro -
		// define('BD_URL', 'Novo valor')

		// Após a criação de variáveis constantes, podemos fazer a chamada das constantes, em qualquer momento do script, sendo que não é necessário utilizar o '$', no início do nome da variável, basta escrever seu nome:

		echo BD_URL. "<br>";
		echo BD_USUARIO. "<br>";
		echo BD_SENHA;

	?>

</body>
</html>