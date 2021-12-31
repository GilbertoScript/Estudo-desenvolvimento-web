<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 6 - Constructor e destructor</title>
</head>
<body>

	<?php

		// Os métodos construct e destruct podem ser considerados o ciclo de vida de um objeto.
		// Para entender melhor vamos criar uma class pessoa:

		class Pessoa {

			public $nome = null;

			// Atenção ao nome pois precisa ser exatamente assim __construct(), e ao colocar algum conteúdo dentro do construct, no browser podemos notar que automaticamente esse método é chamado:
			function __construct($nome) {
				
				$this->nome = $nome;
			}

			// E se ocorrer de algum parâmetro do objeto ter que ser removido propositalmente? Para isso usar o __destruct(). O método destruct é chamado automaticamente quando o objeto é instânciado, da mesma forma que o construct

			function __destruct() {

			}

			// E para recuperar esse parâmetro passado ao constructor, nós podemos utilizar o get:
			function __get($atributo) {
				return $this->$atributo;
			}

			function correr() {
				echo $this->__get('nome') . " está correndo.";
			}
		}

		// E como fazer para passar informações para a class, sem ter que criar e chamar um método para isso? Simples usando o constructor:
		
		$pessoa1 = new Pessoa('Gilberto');
		echo "Nome: " . $pessoa1->__get('nome');
		echo "<br />";

		$pessoa1->correr();

		// echo "<br />";
		// unset($pessoa1);
		// echo "Nome: " . $pessoa1->__get('nome');
	?>
	
</body>
</html>