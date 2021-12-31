<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 23 - PHP - Operadores aritméticos 3</title>

	<style type="text/css">
		
	</style>

</head>
<body>

    <h2>Operadores aritméticos</h2>
    <hr><br>

  	<?php 

      ### Operações aritméticas na atribuição de valores ###

      // O operador = atribui determinado valor para alguma variável
      // Operadores aritméticos, +, -, *, /, %

      // Por exemplo, temos uma variável com determinado valor, como fariamos para recuperar essa variável e fazer uma operação de soma? Simples, basta:

      $x = 25;
      $y = 15;

      // $x = $x + 5;

      // Fazer a atribuição de valores dessa forma, diferentemente do que a forma acima, é bem mais limpo e enxuta.

      // $x += 5;

      $x *= $y;

      echo $x;

  	?>

</body>
</html>