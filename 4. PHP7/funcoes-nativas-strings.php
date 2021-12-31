<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 29 - PHP - Funções nativas para manipular strings</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  <h2>Funções nativas para manipular strings</h2>
  <hr>

  <!-- 

      // Neste arquivo iremos ver 6 das principais funções nativas para manipular strings. Ou seja, a partir de strings, executar funções que irão atuar sobre essas respectivas strings.

      // strtolower($string) => Transforma todos os caracteres da string em minúsculos
      // strtoupper($string) => Transforma todos os caracteres da string em maiúsculas
      // ucfirst($string) => Transforma o primeiro caracter da string em maiúsculo
      // strlen($string) => Conta a quantidade de caracteres de uma string, inclusive com os espaços
      // str_replace(<procura por>, <substitui por>, $texto) => Substitui uma cadeia de caracteres por outra dentro de uma string

      // substr($texto, <posição inicial>, <qntd_de_caracteres>) => Retorna parte de uma string
  -->

  	<?php 

    // Poderiamos por exemplo receber nomes de um banco de dados, e a partir desses nomes fazer diversas formatações.


      // Por exemplo um nome que foi digitado com caracteres maiúsculos e minúsculos de forma errada.
      $nome = 'gilberto Alves';
      echo "String original: $nome <br />";

      echo "String modificada com strtolower: " . strtolower($nome) . "<br />";
      echo "String modificada com strtoupper: " . strtoupper($nome) . "<br />";
      echo "String modificada com ucfirst: " . ucfirst($nome) . "<br /> <hr>";
      echo "Quantidade de caracteres da string, contada com strlen: " . strlen($nome) . "<br />";

      echo "
        String manipulada com str_replace, encontra o g minúsculo e substitui por maiúsculo: <br />" 
        . str_replace('g', 'G', $nome) . "<br /> <hr />";

      echo "String manipulada com substr, exibindo apenas o sobrenome: " . substr($nome, 8);

  	?>

</body>
</html>