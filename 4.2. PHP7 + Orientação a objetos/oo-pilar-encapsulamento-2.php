<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 10 - Pilar do encapsulamento - 2</title>
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

			/* Agora que temos uma subclasse que herda os atributos de Notebook, temos acesso a todos os atributos da classe pai cujo o operador de proteção é: público e protegido.
			public function getAtributo($atributo) {

				return $this->$atributo;
			}

			public function setAtributo($atributo, $valor) {
				
				$this->$atributo = $valor;
			}
			*/

			public function __get($atributo) {

				return $this->$atributo;
			}

			public function __set($atributo, $valor) {

				$this->$atributo = $valor;
			}

		}

		$SamsungEbookE20 = new SamsungEbookE20();

		// Para que possamos visualizar de uma melhor forma os atributos e métodos contidos dentro da instância da classe SamsungEbookE20, usamos um print_r.

		echo "<h2>Superclass Notebook</h2><pre>";
			print_r($SamsungEbookE20);
		echo "</pre> <hr />";

		// E para podermos visualizar os métodos do objeto utilizamos:
		echo "<pre>";
			print_r(get_class_methods($SamsungEbookE20));
		echo "</pre>";

		// Perceba que quando utilizado o método mágico __get(), a recuperação de um atributo público, é feita sem problemas, diferentemente de um 'getAtributo()' caseiro, que não conseguia recuperar um atributo privado, e diferente do setAtributo caseiro, que ao invés de recuperar o atributo da superclass criava um novo atributo. ---------------------- echo $SamsungEbookE20->__get('marca');
		
		$SamsungEbookE20->__set('marca', 'Apple');

		echo "<br />";	

		// Agora percebam que ao utilizar os métodos __get e __set mágicos, no atributo filho, o contexto que será utilizado é do contexto filho, fazendo assim com que se crie um novo atributo 'marca'.
		echo $SamsungEbookE20->__get('marca');

		echo "<h2>Superclass Notebook</h2><pre>";
			print_r($SamsungEbookE20);
		echo "</pre> <hr />";

	// ------------------------------------------------------------------------------------------------------- //
	// ------------------------------------------------------------------------------------------------------- //

		/* Note que ao utilizar o getAtributo para recuperar atributos protecteds e publics, temos sucesso, porém ao tentar recuperar um atributo private, isso é, privado da superclass, não conseguimos pois esse atributo é próprio da superclass --------- echo $SamsungEbookE20->getAtributo('marca');

		/* Percebam que agora temos uma situação diferente, ao fazer o 'set' do atributo marca que existia apenas na superclass Notebook, teremos o seguinte cenário: a subclass irá criar um novo atributo marca para a sua instância.
		echo $SamsungEbookE20->setAtributo('marca', 'Samsung');

		echo $SamsungEbookE20->getAtributo('marca');	

		/* E ao exibir todos os atributos da subclass no navegador, podemos perceber que temos duas marcas: A marca da superclass Notebook, que continua inalterada, e uma nova classe, essa nova classe foi criada ao utilizarmos o setAtributo(), fazendo agora com que essa classe pertença a subclass SamsungEbook...
		echo "<h2>Subclass Notebook Samsung</h2><pre>";
			print_r($SamsungEbookE20);
		echo "</pre> <hr />";
		*/

	// ------------------------------------------------------------------------------------------------------- //
	// ------------------------------------------------------------------------------------------------------- //

	?>
	
</body>
</html>