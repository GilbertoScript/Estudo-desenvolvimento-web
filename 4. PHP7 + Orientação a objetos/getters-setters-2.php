<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 4 - Getters e Setters mágicos</title>
</head>
<body>

	<?php

		// Getters e Setters fazem parte de uma convenção do PHP para manipulação sobre determinados dados dentro de uma classe.

		// Mas para cada atributo precisamos criar um getter e um setter? Isso se torna algo muito trabalhoso, e por isso existem os getters e setters 'mágicos' utilizando o conceito de overloading.

		// E para usar esse recurso basta seguir a convenção __set, que espera dois parâmetros, o primeiro é o atributo e o segundo o valor.

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
				return "
					<h2>Resumo funcionário:</h2><hr />
						- Nome: $this->nome <br />
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