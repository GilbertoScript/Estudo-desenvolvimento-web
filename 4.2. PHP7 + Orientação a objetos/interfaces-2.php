<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 14 - Interfaces 2</title>
</head>
<body>

	<?php

		// As interfaces no php são utilizadas para definir 'modelos para os métodos', que as classes devem seguir.

		// A seguir vamos fazer a declaração de 2 classes e fazer com que elas herdem mais de 1 interface:
		interface MamiferoInterface {
			public function respirar();
		}

		interface TerrestreInterface {
			public function andar();
		}

		interface AquaticoInterface {
			public function nadar();
		}

		// Interfaces que herdam outras interfaces, exemplo:
		interface AnimalInterface {
			public function comer();
		}

		interface AveInterface extends AnimalInterface{
			public function voar();
		}

		// Criação das classes, e para fazer com que uma classe herde duas ou mais interfaces, basta separar elas por vírgula:
		class Humano implements MamiferoInterface, TerrestreInterface {

			// E lógico, sempre implementar os métodos definidos nas interfaces que estão sendo herdadas da classe:
			public function respirar() {
				echo "Humano está respirando.";
			}

			public function andar() {
				echo "Humano está andando";
			}

			// Função comum que não está sendo herdada da interface
			public function correr() {
				echo "Humano está correndo";
			}
		}

		class Baleia implements MamiferoInterface, AquaticoInterface {

			public function respirar() {
				echo "Baleia está respirando";
			}

			public function nadar() {
				echo "Baleia está nadando";
			}

			// Função comum que não está sendo herdada da interface
			public function esguichar() {
				echo "Baleia fez um esguicho";
			}
		}

		class Papagaio implements AveInterface {

			public function comer() {
				echo "Papagaio está comendo";
			}

			public function voar() {
				echo "Pássaro está voando";
			}
		}

	?>
	
</body>
</html>