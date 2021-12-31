<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 2 - Pilar da Abstração</title>
</head>
<body>

	<?php

		// Em relação ao pilar da abstração na orientação a objetos, as suas principais características são:  - Entidade, - Identidade, - Características, - Ações, sendo a entidade, a abstração de determinado objeto do mundo real, identidade sendo o 'nome', características, e ações as coisas que a entidade faz.

		// E para o exemplo vamos utilizar uma relação de funcionários:
		// Modelo - Entidade
		class Funcionario {

			// Esse posicionamento de primeiro atributos e em seguida métodos, é apenas uma convenção

			// Atributos - Características
			public $nome = 'Gilberto';
			public $idade = 18;
			public $estado = 'Solteiro';
			public $telefone = '61 999998888';
			public $numSkills =  7;

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

		// Altera valores de um atributo do objeto
		$funcionario1->modificarNumSkills(10);

		// E para acessar determinado atributo ou método de uma classe utilizamos o operador " -> "
		echo $funcionario1->resumoFuncionario();

	?>
	
</body>
</html>