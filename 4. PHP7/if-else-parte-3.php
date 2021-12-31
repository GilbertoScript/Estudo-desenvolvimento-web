<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 14 - PHP - if/else - prática 2</title>
</head>
<body>

	<?php 

		/*

			-- Operadores lógicos
			-- Servem para conectar operações de comparção criando condições mais complexas de decisão

			-- Operadores:
				- E - AND ou && - Verdadeiro se todas as expressões forem verdadeiras
				- Ou - OR ou || - Verdadeiro se pelo menos uma condição for verdadeira
				- Xor - XOR - Verdadeiro se apenas uma das expressões for verdadeira, mas não ambas
				- Negação - ! - Inverte o resultado da expressão
	
		*/

		// Neste arquivo iremos realizar operações mais complexas com o if, mesclando operadores de comparação, em conjunto com operadores lógicos.

		// Um exemplo com a utilização de operadores de comparação simples:

		$nome = 'Gilberto';
		$idade = 17;

		if($idade >= 18) {
			echo "Olá $nome, você é maior de idade. <br><br><hr>";

		} else {
			echo "Olá $nome, você é menor de idade. <br><br><hr>";

		}

		// Exemplo utilizando operadores de comparação e lógicos.
		// Primeiro temos algumas variáveis armazenando valores numéricos.

		$x = 5;
		$y = 10;
		$z = 100;

		// Verifica se x é maior que y, se z é maior que x, e se y é menor que z, a condição só será verdadeira se todos esses requisitos forem verdadeiros.

		if($x < $y AND $z > $x && $y < $z) {
			echo "Verdadeiro <br>";

		} else {
			echo "Falso <br>";

		}

		// Verifica se x é maior que y, ou se z é maior que x, a condição será verdadeira se algum dos requisitos forem verdadeiros.

		if($x > $y OR $z > $x) {
			echo "Verdadeiro <br>";

		} else {
			echo "Falso <br>";

		}

		// Verifica se x é menor que y, ou se z é menor que y, a condição será verdadeira se apenas um dos requisitos for verdadeiro, mas não ambos. Se por algum acaso, os dois requisitos forem verdadeiros retornará false.

		if($x < $y XOR $z < $y) {
			echo "Verdadeiro <br>";

		} else {
			echo "Falso <br>";

		}

		// Aqui temos o seguinte caso, verificamos se z é maior que x, e se y é menor do que z, ele retorna verdadeiro pois os dois resultados são verdadeiros, porém se utilizarmos o operador lógico de negação esse resultado é invertido.

		if(!($z > $x && $y < $z)) {
			echo "Verdadeiro <br>";

		} else {
			echo "Falso <br>";
		}

		// Faz duas análises, primeiro se 5 é igual a 5, e 8 é maior que -2, retornando true, e a partir de true, verifica se 9 é maior que 456, é falso, porém como a comparção agora é com o operador OR, que retorna true se um valor retornar true, temos um retorno de Verdadeiro, isso pois o operador AND, já tinha saido de ação, isso porque depois que sua operação que estava dentro dos (), foi dada como true, ele sai de cena e o seu valor true, que é levado em consideração

		if((5 == 5 AND 8 > -2) OR 9 > 456) {
			echo "Verdadeiro <br>";

		} else {
			echo "Falso <br>";
		}

	?>

</body>
</html>