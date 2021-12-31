<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7 OO - Aula 12 - Atributos e métodos estáticos</title>
</head>
<body>

	<?php

		// Falando de uma maneira geral, atributos e métodos estáticos, são atributos que podem ser acessados sem ter que ser feito a instância de uma determinada classe.

		// Para o exemplo teremos uma classe.

		// Para definir um atributo ou método como estático, precisamos escrever "static", logo após o operador de restrição do determinado atributo ou método.

		class Notebook {

			// Atributo comum
			public $marca = 'Samsung';

			// Atributo estático
			public static $memoria = '500GB';

			// Método comum
			public function ligarNotebook() {
				echo "Notebbok foi ligado.";
			}

			// Método estático
			public static function abrirNavegador() {
				// Tentar recuperar algum atributo ou método comum, via um método ou atributo estático, retornará um erro, isso pois atributos e métodos estáticos só existem após a instância de uma classe, ou seja, enquanto a classe não for instânciada, recuperar atributos comuns é algo inacessível.
				# echo $this->marca;

				echo "Navegador foi ligado.";
			}
		}

		// Normalmente para instânciar uma classe atribuimos a uma variável, que cria um objeto baseado no modelo.
		# $SamsungEbookE20 = new Noteebok();]

		// Porém quando estamos falando de atributos ou métodos estáticos, não é necessário fazer a instância da classe para se obter acesso a esses atributos ou métodos estáticos. E para fazer isso usamos:
		echo Notebook::$memoria;
		echo "<br />";

		// A mesma coisa acontece aos métodos estáticos:
		Notebook::abrirNavegador();

		// E quando tentamos acessar atributos e métodos comuns? Simples, isso dá um erro no navegador, isso pois atributos e métodos comuns não são acessíveis dessa forma.
		# Notebook::ligarNotebook();

		// Ok, porém e se eu ainda quiser instânciar uma classe, sem problemas, porém os atributos e métodos estáticos não serão acessíveis via '->' ou '$this';
		$SamsungEbookE20 = new Notebook();

		# Erro: echo $SamsungEbookE20->$memoria;
		# Erro: $SamsungEbookE20->abrirNavegador();

	?>
	
</body>
</html>