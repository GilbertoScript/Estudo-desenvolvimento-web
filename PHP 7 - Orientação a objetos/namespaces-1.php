<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 15 - Namespaces 1</title>

	<style type="text/css" media="screen">
		
		html {
			background: #2d3436;
			color: white;
		}

	</style>
</head>
<body>

	<?php

		// Para evitar potenciais erro ao utilizar bibliotecas de terceiros por exemplo com nomeclaturas semelhantes ou idênticas de outras bibliotecas e até mesmo do próprio php, foi criado os namespaces.

		// Para dar início aos nossos exemplos, vamos criar duas classes que irão criar um conflito devido aos seus nomes:

		// Aqui criamos um contexto de namespace:
		namespace A;

		interface CadastroInterface {
			public function salvar();

		}

		class Cliente implements CadastroInterface {
			public $nome = 'Fulano';

			public function __get($attr) {
				return $this->$attr;
			}

			public function salvar() {
				echo "Salvar cliente";
			}
		}

		// Agora por exemplo, usariamos uma biblioteca que por coincidência receberia uma classe com o mesmo nome, ou seja Cliente. Ok, agora temos um erro no browser, e como corrigir isso? Simples, utilizando namespaces.

		// Aqui criamos um segundo contexto de namespace:
		namespace B;
		interface CadastroInterface {
			public function remover();

		}

		class Cliente implements CadastroInterface {
			public $nome = 'Ciclano';

			public function __get($attr) {
				return $this->$attr;
			}

			public function remover() {
				echo "Remover cliente";
			}
		}	

		// Utilizamos o '\A\', antes da instância da classe para obter acesso ao contexto do namespace A.

		$Gilberto = new \A\Cliente();

		echo "<pre>";
			print_r($Gilberto);
		echo "</pre>";

		echo $c->__get('nome');
	?>
	
</body>
</html>