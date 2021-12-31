<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 11 - Pilar do encapsulamento - 3</title>
</head>
<body>

	<?php

		// O último pilar da orientação a objetos, que deve ser seguido para atender os requisitos do paradigma, é o pilar do encapsulamento.

		// De modo geral, o encapsulamento consiste em encapsular determinado atributo ou objeto para tornar ele de certo modo mais seguro, os operadores de visibilidade são: public, protected e private.

		// Superclass:
		class Notebook {

			// Atributos utilizando os 3 operadores de proteção:
			private $marca = 'Positivo';
			protected $memoria = '500GB';
			public $cor = 'cinza';

			// E como alguns atributos estão privados, seu acesso de imediato não está dispónível, por isso usa-se métodos para a manipulação de atributos privados, como get e set.
			public function __get($atributo) {

				return $this->$atributo;
			}

			public function __set($atributo, $valor) {

				$this->$atributo = $valor;
			}

			// Métodos com operadores de proteção:
			private function ligarComputador() {
				echo "<br /> Aparelho foi ligado.";
			}

			protected function abrirCmd() {
				echo "<br /> CMD foi aberto!";
			}

			public function executarAcao($metodo) {
				
				switch ($metodo) {
					case 1:
						
						$this->ligarComputador();	
					break;
					
					case 2:
						
						$this->abrirCmd();
					break;

					default:
						
						echo "<hr /> Insira um valor válido!";
					break;
				}
			}
		}

		// Subclass:
		class SamsungEbookE20 extends Notebook {

			public function exibirMetodos() {

				// Exibi os métodos da classe
				echo "<pre>";
					print_r(get_class_methods($this));
				echo "</pre> <hr />";	

			}

		}

		$SamsungEbookE20 = new SamsungEbookE20();

		// Exibi os atributos da classe
		echo "<pre>";
			print_r($SamsungEbookE20);
		echo "</pre> <hr />";


		// Aqui podemos exibir todos os métodos, publicos e privados da classe, isso porque quando a função interna é criada, ela não se 'importa' com os operadores de restrição.
		$SamsungEbookE20->exibirMetodos();

		// E aqui, mesmo o método 1, que é privado da superclass Notebook, se ele for chamado via outro método público que foi herdado pela subclass, a execução de tal método privado é realizada com sucesso.
		$SamsungEbookE20->executarAcao(1);

	?>
	
</body>
</html>