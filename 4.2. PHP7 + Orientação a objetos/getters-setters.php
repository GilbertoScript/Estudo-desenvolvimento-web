<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 3 - Getters e Setters</title>
</head>
<body>

	<?php

		// Getters e Setters fazem parte de uma convenção do PHP para manipulação sobre determinados dados dentro de uma classe.

		class Funcionario {

			// Atributos - Características
			public $nome = null;
			public $idade = null;
			public $estado = null;
			public $telefone = null;
			public $numSkills = null;

			// Setters
			function setNome($nome) {
				$this->nome = $nome;
			}

			function setIdade($idade) {
				$this->idade = $idade;
			}

			// Getters
			function getNome() {
				return $this->nome;
			}

			// Métodos - ações
			function resumoFuncionario() {
				// Para recuperar um atributo do objeto usa-se o $this->'variável'
				return "
					Resumo funcionário:
						- Nome: $this->nome,
						- Idade: $this->idade,
						- Telefone: $this->telefone,
						- Número de skills: $this->numSkills.
				";
			}

			function modificarNumSkills($numSkills) {
				// Afetar um atributo do objeto
				$this->numSkills = $numSkills;
			}

		}

		// Instância do objeto - Identidade
		$funcionario1 = new Funcionario();

		// Utilização das funções getters e setters
		$funcionario1->setNome('Gilberto');
		$funcionario1->setIdade(18);

		// E para acessar determinado atributo ou método de uma classe utilizamos o operador " -> "
		echo $funcionario1->resumoFuncionario();

	?>
	
</body>
</html>