<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 37 - PHP - Funções nativas - arrays</title>

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

  	<h2>Funções nativas para manipular strings</h2><hr>

	<?php 

		// Algumas das principais funções nativas para se fazer a manipulação de arrays em PHP, são:

		// is_array(array) => Verifica se o parâmetro é um array
		// array_keys(array) => Retorna todas as chaves de um array
		// sort(array) => Ordena um array e reajusta seus índices
		// asort(array) => Ordena um array preservando os índices
		// count(array) => Conta a quantidade de elementos de um array
		// array_merge(array) => Funde um ou mais arrays 
		// explode(array) => Divide uma string baseada em um delimitador 
		// implode(array) => Junta elementos de um array em uma string

		// Para começar vamos criar um array multidimensional:
		$lista_usuarios = ['Gilberto', 'Raimundo', 'Pedro', 'Tiago', 'Joca'];

		// Se for um array retorna 1, se não retorna vazio
		$retorno_array = is_array($lista_usuarios);

		if($retorno_array) {
			echo "Sim, é um array";

		} else {
			echo "Não é um array";
		};

		echo "<hr />";

		// Para recuperar as chaves(índices) de um array sequencialmente, podemos utilizar o array_keys, e em seguida usar um print_r para exibir os índices no browser

		echo "<pre>";
			print_r($lista_usuarios);
		echo "</pre>";

		$retorno_chaves = array_keys($lista_usuarios);

		echo "<pre>";
			print_r($retorno_chaves);
		echo "</pre>";

		echo "<hr />";

		// Para ordenar um array em ordem alfabética é simples, basta utilizar a função nativa sort()
		// sort($lista_usuarios); // Se ele conseguir ordenar, o seu retorno é true(1), se não é false('')

		echo "<pre>";
			print_r($lista_usuarios);
		echo "</pre>";

		// Também temos a função nativa asort, que basicamente assim como a sort(), ordena os arrays, porém essa função preserva os índices.
		asort($lista_usuarios);

		echo "<pre>";
			print_r($lista_usuarios);
		echo "</pre>";

		echo "<hr />";

		// E também temos a função count, que conta a quantidade de elementos de um array.

		echo count($lista_usuarios); // Retorna 5 no navegador, pois é a quantidade de elementos dentro do array $lista_usuarios.

		echo "<hr />";

		// Uma função bastante interessante nativa do php para manipular arrays é o array_merge, que serve para fundir um ou mais arrays:

		$lista_banidos = ['Ciclano', 'Fulano', 'Beltrano'];

		$lista_total = array_merge($lista_usuarios, $lista_banidos);

		echo "<pre>";
			print_r($lista_total);
		echo "</pre>";
		
		echo "<hr />";

		// E para dividir determianda string em um array, é bem simples, basta dividirmos a string a partir de um delimitador, no caso abaixo utilizamos a barra, e assim criamos um novo array de 3 índices.

		$data_aleatoria = '25/03/2021';

		$data_formatada = explode('/', $data_aleatoria);

		echo "<pre>";
			echo $data_aleatoria . "<br />";
			print_r($data_formatada);

			echo "$data_formatada[2]-$data_formatada[1]-$data_formatada[0] <br />";
		echo "</pre>";

		echo "<hr />";

		// Para separar elementos de uma string em um array se usa o explore, e se quisessemos juntar elementos de um array em uma string, como fariamos? Simples, basta utilizar a função nativa implode().

		$lista_usuarios_texto = implode(', ', $lista_usuarios);

		echo ($lista_usuarios_texto);

	?>

</body>
</html>