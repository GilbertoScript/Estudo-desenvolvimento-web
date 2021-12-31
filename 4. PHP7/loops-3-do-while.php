<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 40 - PHP - Loops parte 3 - Do While</title>

	<style type="text/css">
		
		html {
			background: #3D3D3D;
			color: whitesmoke;
		}

		hr {
			border-color: whitesmoke;
		}

	</style>

</head>
<body>

  	<h2>Loops parte 3 - Do While</h2><hr>

	<?php 

		// Outro laço de repetição muito utilizado é o do while, sua sintax é a seguinte:

		/*
			do {
				Código a ser executado

			} while(condição)
		*/

		// Repare que no exemplo a seguir, mesmo x sendo maior que 9, o que está dentro do laço ainda é executado uma vez

		$x = 10;

		do {
			echo "Entrou no laço do-while";

		} while ($x <= 9);

		// A principal diferença entre while, e do-while, é que, no comando while, o determinado comando dentro de while só será executado se a condição for aceita, já no do-while, o código é executado primeiro, e se a condição for aceita, executará novamente, ou seja, no do-while não importa a condição, o código será executado pelo menos uma vez.

	?>

</body>
</html>