<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 39 - PHP - Loops parte 2 - While</title>

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

  	<h2>Loops parte 2 - While</h2><hr>

	<?php 

		// Um dos laços de repetição do php, é o laço while, sua sintax é a seguinte:

		/*

			while (condição) {
				# code...
			}

		*/

		// E para exemplificar vamos criar algumas variáveis..

		$i = 1;

		echo "-- Início do loop -- <br /> <br />";

		while($i <= 10) {
			$i++; // Critério de parada

			if($i == 7) {
				continue; // Aqui se a condição for aceita, ele pula tudo o que estiver a seguir e sai do bloco de repetição, pulando o número 7.
			}

			echo "O valor da variável é: $i <br />";

			/*
			if($i == 7) {
				// Com a utilização do comando break, o laço é executado apenas uma vez, e se fosse colocado logo após a abertura do while, ele não seria executado nenhuma vez.
				break;
			}
			*/
			
		};

		echo "<br /> <br /> -- Fim do loop -- ";

		// Basicamente falando, o break pula o código do loop e o ignora a partir disso, enquanto o continue apenas pula uma iteração.

	?>

</body>
</html>