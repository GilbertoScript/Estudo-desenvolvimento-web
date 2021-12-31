<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 26 - PHP - Funções - introdução</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  	<?php 

      	// Funções - Introdução

  		// Funções - servem para encapsular um bloco de código com um objetivo definido

  		// Exemplo de uma função que por sua vez exibi no navegador uma mensagem
  		// Função tipo void.

  		function exibirBoasVindas() {

  			echo "Seja bem vindo ao curso de PHP.";
  		}

  		exibirBoasVindas();

  		echo "<br /> <hr />";

  		// Exemplo de uma função que por sua vez calcula dois parâmetros, que são recebidos na chamada da função.
  		// Função com retorno.

  		function calcularAreaTerreno($largura, $comprimento) {

  			$area = $largura * $comprimento;

  			return "Área do terreno: $area";
  		}

  		echo calcularAreaTerreno(6, 6);

  	?>

</body>
</html>