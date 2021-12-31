<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 44 - PHP - Loops - 7 Foreach - Prática</title>

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

  	<h2>Loops parte 7 - Foreach - Prática</h2><hr>

	<?php 

		// Vamos praticar um pouco com foreach:
		echo "<h3>Lista funcionarios</h3>";

		// Neste exemplo temos um array multidimensional, que por sua vez, possui mais um array, com os índices nome e salário.

		// E caso a aplicação receba um novo elemento por exemplo data de nascimento:
		// A aplicação já estaria pronta para imprimir isso no browser.
		$funcionarios = [
			['nome' => 'Gilberto', 'salario' => 1500, 'data_nascimento' => '25/03/2003'], 
			['nome' => 'Fulano',   'salario' => 2500, 'data_nascimento' => '01/01/2001'], 
			['nome' => 'Ciclano',  'salario' => 1600], 
			['nome' => 'Beltrano', 'salario' => 3700]
		];

		echo "<pre>";
			print_r($funcionarios);
		echo "</pre>";

		// E a partir do foreach recuperamos cada funcionario.

		foreach ($funcionarios as $idx => $funcionario) {
			// E a partir de cada funcionario exibimos suas caracteristicas no browser.

			foreach ($funcionario as $idx2 => $valor) {
				echo "$idx2 - $valor";
				echo "<br />";
			}

			echo "<hr />";
		}

	?>

</body>
</html>