<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 1 - PHP</title>
</head>
<body>

	<!-- O PHP, por sua vez, pode ser escrito em qualquer parte de um documento salvo em .php, no head, body, ou até mesmo fora das tags <html>, isso só ocorrerá se tiver a extensão .php, pois só assim poderá ser interpretada, dessa forma, não há problemas em mesclar conteúdo php com conteúdo html -->

	<!-- Tag de abertura PHP -->
	<?php 

		// No php, após a inserção de determinado comando, deve-se sempre encerrar o comando com ';'

		// Essa string, não é apresentada para o navegador, é dada como um simples texto qualquer para o body, não recebendo nenhum tipo de tratamento.
		echo "Utilizando a tag padrão de abertura php";

	?>

	<!-- Quebra de linha -->
	<br />

	<!-- Tag de impressão PHP -->

	<!-- Utilizando essa tag PHP, é feita uma impressão direta no html de determinado elemento, como é o exemplo um simples texto. -->
	<?=	"Utilizando a tag de impressão php" ?>


</body>
</html>