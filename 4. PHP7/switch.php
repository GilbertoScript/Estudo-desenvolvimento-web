<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 18 - PHP - Switch</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  	<?php 

  		// Switch case - O que é o comando switch? R= Estrutura de condição.

  		// Primeiro declaramos uma variável simples que recebe o valor 4.

  		$id_usuario = 4;

  		// E a partir do switch, atuamos sobre a variável e podemos fazer condições, por exemplo:

  		switch ($id_usuario) {
  			case 1:
  			 	echo "Seu id é: 1";
  				break;

  			case 2:
  				echo "Seu id é: 2";
  				break;

  			case 3:
  				echo "Seu id é: 3";
  				break;

  			case 4:
  				echo "Seu id é: 4";
  				break;

  			default:
  				echo "Sem id.";
  		}

  	?>

</body>
</html>