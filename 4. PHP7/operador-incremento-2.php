<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 25 - PHP - Operadores de incremento/decremento</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  <!--

    -- Operador de incremento/decremento

    -- O que são os operadores de incremento e decremento?

    - Operadores:

      Pré-incremento(++$a) - adiciona uma unidade antes de retornar $a
      Pós-incremento($a++) - retorna a, e depois adiciona uma unidade

      Pré-decremento(--$a) - diminui uma unidade antes de retornar a
      Pós-decremento($a--) - retorna a, e depois diminui uma unidade

   -->

    <h2>Operadores de incremento/decremento</h2>
    <hr>

    <h3>Pós incremento</h3>

  	<?php 

      // Para o exemplo dos operadores vamos criar algumas variáveis.

      $i = 1;

      echo "O valor contido em 'i' é: $i. <br />";

      // Pós incremento, nessa instância, no navegador será exibido 1, isso pois o incremento é feito após a instrução, ou seja, se houver um 'echo $i;', após essa instrução, o valor de $i exibido no navegador será '2'.
      echo 'O valor contido em "i" após o pós-incremento é: ' . $i++ . '. <br />';
      echo 'O valor de "i" atualizado é: ' . $i . '. <br />';

  	?>

    <hr><h3>Pré incremento</h3>

    <?php

      $x = 1;

      echo "O valor contido em 'x' é: $x. <br />";
      echo 'O valor contido em "x" após o pré-incremento é: ' . ++$x . '. <br />';

    ?>

    <!-- ----------------------------------------------------------------------------------------------------- -->
    <!-- ----------------------------------------------------------------------------------------------------- -->

    <hr><h3>Pós decremento</h3>

    <?php 

      // Para o exemplo dos operadores vamos criar algumas variáveis.

      $i = 1;

      echo "O valor contido em 'i' é: $i. <br />";

      // Pós incremento, nessa instância, no navegador será exibido 1, isso pois o incremento é feito após a instrução, ou seja, se houver um 'echo $i;', após essa instrução, o valor de $i exibido no navegador será '2'.
      echo 'O valor contido em "i" após o pós-decremento é: ' . $i-- . '. <br />';
      echo 'O valor de "i" atualizado é: ' . $i . '. <br />';

    ?>

    <hr><h3>Pré decremento</h3>

    <?php

      $x = 1;

      echo "O valor contido em 'x' é: $x. <br />";
      echo 'O valor contido em "x" após o pré-decremento é: ' . --$x . '. <br />';

    ?>

</body>
</html>