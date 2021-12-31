<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 19 - PHP - Switch - Prática</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  	<?php 

    // No switch case, caso nenhuma condição for satisfeita, ele entra no default.

    // O switch case no PHP, diferentemente do Javascript é de que sua análise sobre os cases e o valor do parâmetro passado para o switch, é de igualdade ==, e não de idêntidade ===, isso faz com que, mesmo que sejam de tipos diferentes, o PHP, não irá levar em conta isso, apenas o seu respectivo valor.

    // A estrutura dos cases, pode comparar valores de todos os tipos, por exemplo, string: 'Janeiro', boolean: true, entre outros.

    // Caso o valor que esteja sendo manipulado, seja de true, e por acaso houver um case 1, será executado o case 1, se ele estiver antes de um case true por exemplo, isso pois para o php, true == 1, e false == 0.

      $option = "3";

  		switch ($option) {
        case 1:
          echo "Entrou no case 1";
          break;

        case 2:
          echo "Entrou no case 2";
          break;

        case 3:
          echo "Entrou no case 3";
          break;
        
        default:
          echo "Entrou no default";
          break;
      }

  	?>

</body>
</html>