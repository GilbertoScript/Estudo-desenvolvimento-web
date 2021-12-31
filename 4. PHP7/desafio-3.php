<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 45 - PHP - Desafio 3</title>

	<style type="text/css">
		
		html {
			background: #3D3D3D;
			color: whitesmoke;
		}

		hr {
			border-color: whitesmoke;
		}

		div {
			display: inline-block;
		}

		p {
			margin: 10px;
			padding: 5px;
			border: 1px solid white;
		}

	</style>

</head>
<body>

  	<h2>Desafio 3</h2><hr>

	<?php 

		// O desafio é: Criar um script capaz de produzir, através de um laço de repetição, um array com 6 elementos numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente - se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos. 


		/*
		// Então vamos por parte - primeiro criamos um array:
		$numeros_aleatorios = [];

		// Agora criamos o laço de repetição:
		while (count($numeros_aleatorios) <= 5) {
			
			$i = rand(1, 60);

			if(!in_array($i, $numeros_aleatorios)) {
				$numeros_aleatorios[] = $i;
			}

			print_r($numeros_aleatorios);
			echo "<br/>";
		};

		*/

		// Outra forma:

		$numeros_aleatorios = [rand(1, 60), rand(1, 60), rand(1, 60), rand(1, 60), rand(1, 60), rand(1, 60)];
		
		foreach ($numeros_aleatorios as $idx => $numero) {
			
				echo $numero . "<br>";
		}

	?>

</body>
</html>