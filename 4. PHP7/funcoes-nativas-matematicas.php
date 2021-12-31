<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 30 - PHP - Funções nativas para manipular tarefas matemáticas</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  <h2>Funções nativas para manipular tarefas matemáticas</h2>
  <hr>

    <?php

      // Algumas das principais funções nativas para tarefas matemáticas são:

      // ceil($numero) => Arredonda o valor para cima
      // floor($numero) => Arredonda o valor para baixo
      // round($numero) => Arredonda o valor com base nas casas decimais, ou seja, se a casa decimal for de .0 a .4, arredonda para baixo, caso .5 a .9, arredonda para cima

      // rand() => Gera um número inteiro aleatório
      // sqrt($numero) => Retorna a raiz quadrada

      // Para exemplificar vamos criar algumas variáveis
      $peso = 57.4;

      echo "Número original: 57.4, após passar pelo arredondamento do ceil: " . ceil($peso) . "<br />";
      echo "Número original: 57.4, após passar pelo arredondamento do floor: " . floor($peso) . "<br />";
      echo "Número original: 57.4, após passar pelo arredondamento do round: " . round($peso) . "<br />";
      echo "Gerando números aleatórios com o método rand, de 0 a 1000: " . rand(0, 1000) . "<br />";

      // Função nativa matemática do php para saber qual o valor máximo em que o rand, poderá gerar sem ter o seu valor limite especificado: echo getrandmax();

      echo "Função nativa do PHP para capturar a raiz quadrada de algum número(57.4): " . sqrt($peso) . "<br />";

  	?>

    

</body>
</html>