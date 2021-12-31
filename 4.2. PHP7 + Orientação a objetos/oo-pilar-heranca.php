<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 7 - Pilar da herança</title>
</head>
<body>

	<?php

		// Um dos pilares a serem seguidos quando utilizamos o paradigma de orientação a objetos, é o pilar da herança, e seus principais fundamentos são: Reutilizável e manuntenção.
		// E para o exemplo vamos criar algumas classes.

		// Ok, agora já temos dois objetos, porém onde entra a questão da herança? Simples, como os objetos tem alguns atributos e métodos iguais, por que não reduzir a quantidade de código e criar uma classe para esses atributos e métodos repetidos?

		// Após criar a superclass Aparelho, podemos remover os atributos que se repetem das outras, e explicitar as subclasses que estão herdando os atributos de Aparelho.

		class Aparelho {

			public $modelo = null;
			public $RAM = null;
			public $cor = null;

			function ligar() {
				echo "Aparelho ligou.";
			}

			function desligar() {
				echo "Aparelho desligou.";
			}

			function abriCamera() {
				echo "Câmera ligou.";
			}
		}

		// Modelo que representa a abstração de um objeto notebook herdando aparelho
		class Notebook extends Aparelho {

			public $HD = null;
			public $processador = null;

			function __construct($HD, $processador, $modelo, $RAM, $cor) {

				$this->HD = $HD;
				$this->processador = $processador;
				$this->modelo = $modelo;
				$this->RAM = $RAM;
				$this->cor = $cor;
				
			}

			function ligarTecladoRGB() {
				echo "Teclado RGB ligado";
			}

			function exibiriResumoProduto() {
				return "

					<h2>Resumo aparelho:</h2>
					<h3> " . $this->modelo . " </h3>
					<ul>
						<li>" . $this->HD . "</li>
						<li>" . $this->processador . "</li>
						<li>" . $this->RAM . "</li>
						<li>" . $this->cor . "</li>
					</ul>
				";
			}
		}

		// Modelo que representa a abstração de um objeto celular herdando aparelho
		class Celular extends Aparelho {

			public $android = null;

			function __construct($android, $modelo, $RAM, $cor) {

				$this->android = $android;
				$this->modelo = $modelo;
				$this->RAM = $RAM;
				$this->cor = $cor;
			}

			function abrirPlayStore() {
				echo "Play store abriu";
			}

			function exibiriResumoProduto() {
				return "

					<h2>Resumo aparelho:</h2>
					<h3> " . $this->modelo . " </h3>
					<ul>
						<li>" . $this->android . "</li>
						<li>" . $this->RAM . "</li>
						<li>" . $this->cor . "</li>
					</ul>
				";
			}

		}

		$SamsungEbook20 = new Notebook('500GB', 'Intel Celerom', 'Samsung Ebook 20', '4GB', 'Cinza');
		$SonyXperiaE4 = new Celular(5.0, 'Sony Xperia E4', '2GB', 'Preta');

		echo $SamsungEbook20->exibiriResumoProduto() . "<hr />";
		echo $SonyXperiaE4->exibiriResumoProduto() . "<hr />";

		// E para acessar um método da superclass é simples basta:
		# $SamsungEbook20->ligar();
	?>
	
</body>
</html>