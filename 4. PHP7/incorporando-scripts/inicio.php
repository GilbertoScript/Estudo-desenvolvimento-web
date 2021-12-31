<!-- Como um menu geralmente fica na parte superior de um site, a incorporação do menu está sendo feita logo na primeira instância do arquivo, mas poderia ser feita em qualquer momento de sua existência -->
<?php
	
	// E para fazer a inclusão de um outro script de fora de um outro arquivo, fazemos:
	// Uma diferença entre o include e o require, é que caso o include encontre o erro no caminho para o script, ele retorna no navegador um warning
	include_once("menu.php");

	// Já o require gera no navegador um 'fatal error'. Ou seja, no caso do include, apenas nele o warning será produzido e o resto da aplicação continuará funcionando, já com o require toda a aplicação irá quebrar

	# require("menu2.php");

?>

<!-- E qual a diferença entre o include_once e o include, e o require_once e o require, de modo geral o comportamento é o mesmo, com apenas um único detalhe... -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
</head>
<body>

	<h1>Página - Início</h1><hr>

	<footer>
		<h2>Rodapé</h2>

		<?php

			// ... Caso precise ser usado o include novamente por exemplo em um rodapé, poderia ser usado normalmente..

			// Já se fosse usado o include_once, isso não seria possível...
			# include_once('menu.php')
			include('menu.php')

		?>
	</footer>

</body>
</html>
