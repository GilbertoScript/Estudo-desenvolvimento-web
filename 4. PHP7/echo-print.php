<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 3 - PHP - echo, print</title>
</head>
<body>

	<!-- No PHP, os principais comandos de saída de dados são: echo e print -->
	<?php 

		// A função deles é bem clara e simples, a impressão de determinado elemento dentro do documento html 
		// Note que a utilização de elementos html dentro de tags php, é muito simples, basta inclui-las dentro das aspas de strings.

		// O echo por sua vez é um construtor da linguagem
		echo "<h1>Comando echo <br /></h1>";

		// Enquanto o print, primeiramente era uma função
		// Pode se utilizar dois métodos de se escrever este:
		print("<h2>Comando em print</h2>");

		// E este: print "Comando em print";

		// Uma característica peculiar do print é de que:
		// A execução de echo não retorna nada, já uma chamada para print() sempre retornará o valor 1.
		// Se houver algum erro, ele retornará 0.
		echo print("")

	?>

</body>
</html>