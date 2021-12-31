<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 34 - PHP - Arrays multidimensionais</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  <h1>Arrays multidimensionais</h1>

    <?php

      // Basicamente falando, arrays multidimensionais são arrays de arrays, ou seja, dentro de um array, podemos ter outros arrays, criando um array multidimensional ou bidimensional.

      $lista_cadastro = [];

      // Criando arrays, dentro dos índices de um outro array.
      $lista_cadastro['nome'] = ['Gilberto', 'Rodrigo', 'Jorge', 'Maria'];
      $lista_cadastro['nome_id'] = ['842', '564', '782', '963'];

      // Outra forma de se declarar os índices dentro de um array:

      # $lista_cadastro['nome_id'][0] = '842';

      echo '<pre>';
      print_r($lista_cadastro);
      echo '</pre> <br /> <hr />';

      // Recuperando um item dentro de um array:
      echo "Recuperando um item dentro de um array: " . $lista_cadastro['nome'][0];

    ?>

    

</body>
</html>