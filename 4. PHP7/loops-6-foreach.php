<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 43 - PHP - Loops - 6 Foreach</title>

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

  	<h2>Loops parte 6 - Foreach</h2><hr>

	<?php 

		// O laço foreach é mais utilizado para percorrer arrays e objetos.
		// Como sua especialização é sobre arrays e objetos, vamos criar um array para que possamos atuar sobre ele.

		$lista_usuarios = ['Gilberto', 'Fulano', 'Ciclano', 'Beltrano'];

		// Vamos imprimir esse array no browser:
		echo "<pre>";
			print_r($lista_usuarios);
		echo "</pre>";

		// Utilizando o foreach:

		// Neste exemplo temos a utilização do foreach para exibir os elementos do array no browser, e caso o usuário já exista ele imprime do lado do nome do usuário "Usuário já cadastrado"
		foreach($lista_usuarios as $usuario) {
			echo "$usuario";

			if($usuario === 'Gilberto') {
				echo " - Usuário já cadastrado";
			} 

			echo "<br />";

		};

	?>

</body>
</html>