<?php
		
	// PHP 7 OO - Aula 18 - Tratamentos de erro - Exceções customizadas.
	
	// Uma possibilidade em relação aos tratamentos de erros em php, são as exceções, e podemos tranquilamente fazer customizações.

	// Criação de uma exceção customizada que por sua vez herda Exception
	class CustomException extends Exception {

		// E criamos o atributo erro como privado para que ela não possa ser acessado de maneira direta.
		private $erro = '';

		public function __construct($erro) {

			$this->erro = $erro;
		}

		public function showCustomException() {
			echo "<div style='border: 1px solid lightgrey; text-align: center;'>";
				echo $this->erro;
			echo "</div>";
		}
	}

	try {

		// E aqui ao invés de fazermos um throw new Exception convencional, utilizamos o Exception que criamos, que está herdando o Exception comum.

		// E uma boa convenção a ser seguida na criação de erros, é que, ao criar uma mensagem de erro criar com uma Exception, isso por que o Error é melhor de ser utilizado quando se tem erros internos do php, Exception error de teste para programadores, e como vimos hoje, muito comum também utilizar classes customizadas para lançamentos de erros.
		throw new CustomException("Erro de teste");
		

	} catch (CustomException $error) {

		$error->showCustomException();
	}
	
?>