<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 22 - PHP - Operadores aritméticos 2</title>

	<style type="text/css">
		
	</style>

</head>
<body>

    <h2>Operadores aritméticos</h2>
    <hr><br>

  	<?php 

        /*

          -- Operadores aritméticos

          -- O que são operadores aritméticos?

          -- Operadores:

              Adição ( + ) - Soma valores
              Subtração ( - ) - Diferença entre valores
              Multiplicação ( * ) - Produto dos valores
              Divisão ( / ) - Quociente dos valores
              Módulo ( % ) - Resto existente em uma operação de divisão

        */

        $num1 = 20;
        $num2 = 45;

        echo "A soma entre $num1 e $num2 é: " . ($num1 + $num2) . "<br />";
        echo "A subtração entre $num1 e $num2 é: " . ($num1 - $num2) . "<br />";
        echo "A multiplicação entre $num1 e $num2 é: " . ($num1 * $num2) . "<br />";
        echo "A divisão entre $num1 e $num2 é: " . ($num1 / $num2) . "<br />";
        echo "O resto divisão entre $num1 e $num2 é: " . ($num1 % $num2) . "<br />";

  	?>

</body>
</html>