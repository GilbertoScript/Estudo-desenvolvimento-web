<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 35 - PHP - Pesquisa em arrays</title>

	<style type="text/css">
		
		html {
			background: black;
			color: green;
		}

		hr {
			border-color: green;
		}

	</style>

</head>
<body>

  	<h2>Arrays - Métodos de pesquisa</h2><hr>

	<?php 

		// Neste arquivo aprenderemos a fazer pesquisas dentro de arrays.
		// E para isso vamos utilizar duas funções nativas de arrays, sendo elas:

		// in_array(<Procurar isto>, <Dentro disto>) => true(1) ou false('') para o que está sendo procurado
		// array_search(<Procurar isto>, <Dentro disto>) => Retorna o índice do array pesquisado caso ele exista.

		// E para utilizar elas, vamos criar um array bidimensional:

		$lista_cadastro = [];
		$lista_cadastro['nome'] = ['Gilberto', 'Raimundo', 'Pedro', 'Tiago'];
		$lista_cadastro['id'] = ['789', '475', '967', '980'];

		echo "<pre>";

			print_r($lista_cadastro);

		echo "</pre> <hr />";

		// Agora com um array criado e formatado no browser, iremos utilizar a função in_array, que irá verificar se determinado valor passado para essa função, existe dentro do array.

		# echo in_array('Gilberto', $lista_cadastro['nome']);

		/* Exemplo verificando se o usuário existe ou não:

		$existeUsuario = in_array('Gilberto', $lista_cadastro['nome']);

		if($existeUsuario == true) {
			echo "Usuário existe.";

		} else {
			echo "Usuário não existe";
		}
		*/

		// Exemplo adicionando usuário com base na pesquisa:

		$novoUsuario = "Ciclano";
		$existeUsuario = in_array($novoUsuario, $lista_cadastro['nome']);

		if($existeUsuario) {
			echo "Usuário já existente. <br /> <hr />";

		} else {
			$lista_cadastro['nome'][4] = $novoUsuario;
			$lista_cadastro['id'][4] = "637";

			echo "Novo usuário cadastrado! Nome: $novoUsuario. <br /> <hr />";
		};

		// Uma outra forma de se pesquisar arrays é utilizando o array_search, diferentemente do in_array, o array search retorna o índice do elemento dentro do array pesquisado caso ele exista:

		// E caso o valor pesquisado não exista ele retorna ''.
		// E caso o valor não exista, o retorno da função não será false, e sim 'null'.

		echo array_search('Ciclano', $lista_cadastro['nome']);

	?>    



	<script>

	</script>
</body>
</html>