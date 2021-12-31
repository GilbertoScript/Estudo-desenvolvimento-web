<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 6 - PHP - Variáveis - Prática</title>
</head>
<body>

	<!-- No PHP, temos vários tipos de variáveis e diversas caracteristicas, nesse arquivo iremos trabalhar com as principais características de uma variável -->

	<?php 

		// Variável do tipo String:
		$nome = 'Gilberto Alves';

		// Variável do tipo number - int
		$idade = 17;

		// Variável do tipo number - float
		$peso = 58.5;

		// Variável do tipo boolean
		$solteiro = true; // true ou false = true = 1, false = vazio

	?>

	<!-- Aqui iremos exibir um conteúdo HTML mesclado com uma tag de impressão PHP. -->
	<h2>Ficha cadastral</h2>
	<hr>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Solteiro: <?= $solteiro ?></p>

</body>
</html>