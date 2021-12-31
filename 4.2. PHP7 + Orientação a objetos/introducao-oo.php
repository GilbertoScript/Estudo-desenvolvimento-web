<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 1 - Introdução</title>
</head>
<body>

	<?php

		// Em relação ao paradigma de orientação a objetos, temos uma simples comparação, de um código escrito a partir do paradigma procedural, e um código escrito a partir do paradigma oo.

		// -------- //
		// Procedural: Chamada de procedimentos(procedures) para a manipulação de dados
		// -------- //

		$a = 10;
		$b = 7;
		$operacao = 'soma';

		function calcular($a, $b, $operador) {
			if($operador === 'soma') {
				return $a + $b;
			}

			// Fazemos com que esse retorno seja falso para que o retorno acima seja considerado
			return false;

		}

		echo calcular($a, $b, $operador);

		// ------------------ //
		// Orientação a objetos: Estrutura de dados com comportamentos
		// ------------------ //

		// Uma boa convensão é a utilização de Pascal Case para se nomear abstrações de classes.
		class Calculadora {

			public $a = 10;
			public $b = 7;
			public $operacao = 'soma';

			public function calcular() {

				// Quando se utiliza determinados atributos declarados dentro de uma classe, para acessa-los usa-se o $this->

				if($this->$operador == 'soma') {
					return $this->$a + $this->$b;
				}

				return false;
			}
		}

		$calculadora = new Calculadora();
		echo $calculadora->calcular();

		// Outro exemplo de uma class:
		class Notebook {

			public $preco = 2500;
			public $marca = 'Samsung';
			public $hd = '1TB';
			public $ligado = false;

			public function ligar() {

				if ($this->$ligado === false) {
					
					echo "Notebook foi ligado";
				}
			}
		}

		$notebook = new Notebook();
		echo $notebook->ligar();

	?>
	
</body>
</html>
