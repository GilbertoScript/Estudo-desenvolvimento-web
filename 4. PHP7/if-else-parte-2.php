<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 12 - PHP - if/else - prática</title>
</head>
<body>

	<?php 

		// Para utilizar o operador if primeiro fazemos sua declaração:

		// E com os operadores de comparação, podemos fazer tomadas de decisões mais complexas.

		$nome = 'Gilberto';
		$idade = 17;
		$profissao = 'Desenvolvedor Front-End';

		if($idade >= 18) {
			echo "Olá $nome, você é maior de idade. <br>";

		} else {
			echo "Olá $nome, você é menor de idade. <br>";

		}

		if(2 == 2) {
			echo "Verdadeiro <br>";

		} // Caso o bloco de código else não existir, o bloco de if é simplesmente desconsiderado.

		// E uma dica do uso do if no php, é que, se por acaso a condição executar apenas o if, como no exemplo acima, o uso das chaves pode ser desconsiderado, porém, será permitida o uso de apenas uma única instrução,  por exemplo:

		if(2 == 2)
			echo "Verdadeiro";

	?>

</body>
</html>