<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 7 - PHP - Variáveis - Prática 2</title>
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

		// ---------------------------------------------------------------------------------------------- //
		// ---------------------------------------------------------------------------------------------- //

		// E se precisassemos alterar o valor das variáveis? Como o próprio nome diz, variáveis é algo que varia, ou seja, por enquanto façamos de conta que ocorre alguma lógica e vamos precisar alterar o valor de uma variável, é simples, basta: 

		// ... Lógica ... 

		// Além de alterar o valor de uma variável, também é possível alterar o seu tipo: 
		$idade = '18'; 
		$peso = 60; 
		$solteiro = false; 

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