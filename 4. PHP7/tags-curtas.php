<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 2 - PHP - Tags curtas</title>
</head>
<body>

	<!-- No PHP, além das tags padrão e impressão, temos as tags curtas, as tags curtas por sua vez, não podem ser utilizadas diretamente, ela precisam ser habilitadas. -->
	
	<!-- Exemplo de uma tag curta -->
	<!-- Ao atualizar a página nada ocorre, pois essa tag é simplesmente ignorada por não estar habilitada, para ser mais detalhado, ao inspecionar o elemento, pode se reparar que no browser o comando é comentado automaticamente  -->

	<? echo "Utilizando uma tag curta" ?>

	<!-- Para ativar esse recurso, basta aticar php ini, esse recurso se encontra no servidor apache e pode ser ativado no próprio xampp, após o arquivo php.ini ser encontrado, basta procurar por short_open_tag, e alterar seu atributo de off, para on -->

	<!-- Logo após fazer isso, o conteúdo dentro da tag curta é exibido no browser -->


</body>
</html>