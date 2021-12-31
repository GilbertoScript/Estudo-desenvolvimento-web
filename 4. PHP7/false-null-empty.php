<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 36 - PHP - False, Null, Empty</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  	<h2>False - Null - Empty</h2><hr>

	<?php 

		// Uma fonte potencial de bugs dentro da aplicação em relação aos resultados de determinados valores, são: false, null e empty

		// false - true/false - tipo de variável boolean.
		// null e empty - valores especiais 

		// Para entender melhor o valor de cada um, vamos criar algumas variáveis:

		$funcionario1 = null;
		$funcionario2 = '';
		$funcionario3 = false;

		// ------------ //
		// Valores null //
		// ------------ //

		// A função nativa is_null, verifica se determinada variável é null e, retorna true ou false.
		if(is_null($funcionario1)) {
			echo "Sim, a variável é 'null'. <br>";

		} else {
			echo "Não, a variável não é 'null'. <br>";
		}

		if(is_null($funcionario2)) {
			echo "Sim, a variável é 'null'. <br>";

		} else {
			echo "Não, a variável não é 'null'. <br>";
		};

		echo "<hr>";

		// -------------- //
		// Valores vazios //
		// -------------- //

		// Para a verificação de valores vazios, podemos utilizar a função nativa do php empty().
		if(empty($funcionario3)) {
			echo "Sim, a variável está vazia. <br>";

		} else {
			echo "Não, a variável não está vazia. <br>";

		};

		// Um valor '' vazio, não é considerado null, porém um valor null é considerado vazio

	?>

</body>
</html>