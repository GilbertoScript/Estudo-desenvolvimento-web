<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 41 - PHP - Loops parte 4 - For</title>

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

  	<h2>Loops parte 4 - For</h2><hr>

	<?php 

		// Uma estrutura de repetição muito utilizada, que muitas das vezes é utilizada com um contador é o for.
		// Para fazer uma comparação vamos escrever while e também do-while no código:

		/*

		while (condição) {
			# code...

		}

		do {
			# code...

		} while (condição);

		for (variável; condição; incremento) { 
			# code...
		}

		*/

		// No laço for, as variáveis precisavam ser declaradas fora do escopo do laço de repetição, já com o for, pode ser feito a declaração de uma nova variável dentro do próprio laço:

		for ($x=1; $x <= 10; $x++) { 
			
			for ($y=1; $y <= 10; $y++) { 
				
				echo "$x * $y = " . ($x * $y) . "<br />";
			}

			echo "<hr><br>";

		};

		// E no exemplo acima, temos um simples exemplo de uma tabuada de 1 a 10.
		// Também podem ser feitos critérios de paradas dentro do laço for.

	?>

</body>
</html>