<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 42 - PHP - Loops - 5 - praticando</title>

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

  	<h2>Loops parte 5 - Laços de repetição - prática</h2><hr>

	<?php 

		// Para praticar um pouco com laços de repetição vamos percorrer arrays com os laços aprendidos:
		// Aqui, criamos um array associativo que recebe título e conteúdo.
		$registros = [
			['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'], 
			['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'], 
			['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
			['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4']
		];

		echo "O array possui: " . count($registros) . " registros <br> <hr>";

		echo "<pre>";
			print_r($registros);
		echo "</pre>";

		echo "<br /> <hr />";

		// Agora iremos práticar percorrendo esse array com os laços de repetição.

		// A função nativa php para manipular arrays count, conta a quantidade de elementos de um array

		/* While:

		$i = 0;

		while ($i < count($registros)) {
			
			echo "<h3>" . $registros[$i]['titulo'] . "</h3>";
			echo "<p>" . $registros[$i]['conteudo'] . "</p>";

			echo "<hr />";

			$i++;
		};

		*/

		/* Do-While

		$i = 0;

		do {
			
			echo "<h3>" . $registros[$i]['titulo'] . "</h3>";
			echo "<p>" . $registros[$i]['conteudo'] . "</p>";

			echo "<hr />";

			$i++;

		} while ($i < count($registros));

		*/

		// Utilizando o for:

		for ($i=0; $i < count($registros); $i++) { 
			
			echo "<h3>" . $registros[$i]['titulo'] . "</h3>";
			echo "<p>" . $registros[$i]['conteudo'] . "</p>";

			echo "<hr />";
		}

	?>

</body>
</html>