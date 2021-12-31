<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 5 - Chamando métodos internos</title>
</head>
<body>

	<?php

		// Algo muito comum em php é a utilização de métodos internos, e como fazer para acessá-los? Simples:

		class Funcionario {

			// Atributos - Características
			public $nome = null;
			public $idade = null;
			public $telefone = null;
			public $numSkills = null;

			// Getters e Setters com (overloading/sobrecarga) :
			function __set($atributo, $valor) {

				$this->$atributo = $valor;
			}

			function __get($atributo) {

				return $this->$atributo;
			}

			// Métodos - ações
			function resumoFuncionario() {
				// Para recuperar um atributo do objeto usa-se o $this->'variável'
				// Ao invés de se utilizar o nome da variável, também pode-se utilizar o método __get:
				return "
					<h2>Resumo funcionário:</h2><hr />
						- Nome: " . $this->__get('nome') . " <br />
						- Idade: $this->idade <br />
						- Telefone: $this->telefone <br />
						- Cidade: $this->cidade <br />
						- Número de skills: $this->numSkills
				";
			}

			function modificarNumSkills($numSkills) {
				// Afetar um atributo do objeto
				$this->numSkills = $numSkills;
			}

		}

		// Instância do objeto - Identidade
		$funcionario1 = new Funcionario();

		// Desta forma, não precisamos criar um par get-set, para cada atributo, agora podemos fazer de forma mais dinâmica:
		$funcionario1->__set('nome', 'Fulano');
		$funcionario1->__set('idade', '22');
		$funcionario1->__set('telefone', '(55) 55555-5555');
		$funcionario1->__set('cidade', 'Pindamonhangaba');
		$funcionario1->__set('numSkills', 10);

		// E para acessar determinado atributo ou método de uma classe utilizamos o operador " -> "
		echo $funcionario1->resumoFuncionario();

	?>
	
</body>
</html>