<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 28 - PHP - Desafio 2</title>

	<style type="text/css">
		
	</style>

</head>
<body>

    <!-- O desafio consiste em:
          
        1- Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.

        Para calcular o valor do imposto a ser pago, considere a seguinte tabela abaixo:

        Base de cálculo                ||   Alíquota
        
        Até R$ 1.903,98                ||   Isento
        De R$ 1.903,99 até R$ 2.826,65 ||   7,5%
        De R$ 2.826,66 até R$ 3.751,05 ||   15%
        De R$ 3.751,06 até R$ 4.664,68 ||   22,5%
        Acima de R$ 4.664,68           ||   27,5%

     -->

     <h2>Imposto de renda</h2><hr>

  	<?php 

      // Minha resolução para o desafio:

      // IR = Imposto de renda

      function calcularIR($salario) {

        $imposto = 0;

        if($salario <= 1903.98 && $salario >= 0) {
          echo "Isento do imposto de renda";

        } else if($salario >= 1903.99 && $salario <= 2826.65) {

          $imposto = ($salario / 100) * 7.5;
          echo "O valor a ser pago é $imposto";

        } else if($salario >= 2826.66 & $salario <= 3751.05) {

          $imposto = ($salario / 100) * 15;
          echo "O valor a ser pago é $imposto";

        } else if($salario >= 3751.06 && $salario <= 4664.68) {

          $imposto = ($salario / 100) * 22.5;
          echo "O valor a ser pago é $imposto";

        } else if($salario >= 4664.68) {

          $imposto = ($salario / 100) * 27.5;
          echo "O valor a ser pago é $imposto";

        } else {
          echo "Saiu do fluxo";
        }
        
      }

      calcularIR(10000);

  	?>

</body>
</html>