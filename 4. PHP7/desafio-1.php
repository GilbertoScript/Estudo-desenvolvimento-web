<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 17 - PHP - Desafio 1</title>

	<style type="text/css">
		
		body {
			display: flex;
			justify-content: center;
		}

		div {
			border: 2px solid gray;
			padding: 15px;
			margin-top: 20px;
			border-radius: 25px;
			box-shadow: inset 0px -5px 3px black;
		}

	</style>

</head>
<body>

  <div>
	<h2>Doe sangue - você pode doar?</h2>
	<hr>

	<!--

		Desafio 1 - 1) Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis idade e peso, no processo. Neste primeiro momento faça a atribuição de valores as variáveis de forma estática, ou seja, no processo de atribuição.

		Se a idade informada estiver entre (e inclusive) 16 e 69 anos, e o peso foi igual ou superior a 50kg, então o sistema deve imprimir a mensagem: atende aos requisitos, caso contrário o sistema deve imprimir a mensagem: não atende aos requisitos.

	-->

	<?php 

		// Minha resolução implementada para o desafio:

		$nome = 'Gilberto';
		$idade = 17;
		$peso = 60;
		$atendeRequisitos;

		($idade >= 16 || $idade <= 69) && $peso >= 50 ? $atendeRequisitos = true : $atendeRequisitos = false ;

	?>


	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>
		<strong>
			Atende os requisitos?
		</strong>

		<?php 

			if($atendeRequisitos == true) {
				echo "Sim, atende os requisitos para ser um doador de sangue. <br>";

			} else {
				echo "Não atende os requisitor para ser um doador de sangue. <br>";
			}

		?>
	</p>
  </div>

</body>
</html>