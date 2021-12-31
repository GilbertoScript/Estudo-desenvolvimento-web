<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 13 - Interfaces</title>
</head>
<body>

	<?php

		// As interfaces no php são utilizadas para definir 'modelos para os métodos', que as classes devem seguir.

		// Vamos criar uma interface, e diferentemente de fazer uma classe herdar outra, as interfaces são feitas pensando em um comportamento diferente em relação ao código. As interfaces funcionam como um 'contrato', isso pois as classes que seguem determinada interface, devem obrigatoriamente seguirem o padrão do modelo da interface. Isso functiona como se fosse no 'typescript', em que tipamos determinados elementos do código para que seja um código mais seguro e mais bem escrito. E as interfaces só funcionam com métodos, ou seja, em interfaces apenas métodos podem ser declarados.

		// Palavra reservada 'interface':
		interface aparelhoEletronicoInterface {

			// E aqui definimos os métodos:
			// E atenção!! As interfaces não implementam os métodos, apenas a declaram, e eles necessariamente precisam ser públicos.
			public function ligar();
			public function desligar();
		}


		// E aqui criamos as classes, e cada uma tem seus respectivos atributos e métodos.

		// E após fazer a implementação da interface, temos que obrigatoriamente implementar os respectivos métodos:
		class Notebook implements aparelhoEletronicoInterface {

			// Método específico de Notebook
			public function abrirCmd() {
				echo "Cmd foi aberto.";
			}

			public function ligar() {
				echo "Notebook ligou";
			}

			public function desligar() {
				echo "Notebook desligou";
			}
		}

		class Celular implements aparelhoEletronicoInterface {

			// Método específico de Celular
			public function abrirPlayStore() {
				echo "PlayStore foi aberta.";
			}

			public function ligar() {
				echo "Celular ligou";
			}

			public function desligar() {
				echo "Celular desligou";
			}
		}

		$SamsungEbookE20 = new Notebook();
		$SonyXperiaE4 = new Celular();

	?>
	
</body>
</html>