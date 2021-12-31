<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 9 - Pilar do encapsulamento - 1</title>
</head>
<body>

	<?php

		// O último pilar da orientação a objetos, que deve ser seguido para atender os requisitos do paradigma, é o pilar do encapsulamento.

		// De modo geral, o encapsulamento consiste em encapsular determinado atributo ou objeto para tornar ele de certo modo mais seguro, os operadores de visibilidade são: public, protected e private.

		// Superclass:
		class Notebook {

			// Atributos utilizando os 3 operadores de proteção:
			private $marca = 'Samsung';
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

		// Note que agora, depois da instância do objeto, se tentarmos acessar os atributos publicos temos sucesso
		$notebookComum = new Notebook();

		# public = echo $notebookComum->cor;

		# protected = echo $notebookComum->memoria; // Uncaught  Error: Cannot access protected property
		#private = echo $notebookComum->marca; // Uncaught Error: Cannot access private property


		// Percebam que antes, ao tentar acessar atributos privados do objeto como marca, isso retornava um erro no browser, pois como o atributo era privado, o seu acesso imediato não estava disponível, mas quando adicionamos ao código os métodos __get, e __set, mágicos, isso para de ocorrer, agora podendo atuar sobre o atributo $marca, de forma imediata, isso pois quando o get e o set mágicos estão sobre o operador public, o interpretador do php tem a inteligência para modificar os atributos privados e protegidos para públicos.

		$notebookComum->marca = 'Dell';
		echo $notebookComum->marca;

		// Agora vamos aos métodos, se tentarmos executar métodos privados, repare que retornará um erro no navegador, então para fazer a manipulação de métodos privados e protected dentro da nossa aplicação, usa-se um método público que interage sobre os outros métodos, podendo por exemplo, executar um método terceiro.
		$notebookComum->executarAcao(2);

	?>
	
</body>
</html>