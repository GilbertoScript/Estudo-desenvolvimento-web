<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 20 - PHP - Casting de tipo</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  	<?php 

      // No PHP, para fazer a troca de tipo de uma variável é bem simples.

      // Os casting de tipos podem ser feitos com a maior parte dos tipos de variáveis, sendo elas:               ------- int, float, string e boolean. 

      // Para recuperar o tipo de uma variável utilizamos o gettype, gettype(<variavel>) => retorna o tipo da variável

      // Vamos criar algumas variáveis para conseguimos fazer o casting de seus tipos.

      $nome = 'Gilberto';
      $id_usuario = '454.456.321.897';
      $idade = 17;
      $peso = 57.5;
      $solteiro = true;

      // E o recurso de casting funciona basicamente dessa maneira:
      // A instrução de float também pode ser declarada por: 'double'
      // A instrução de inteiro também pode ser declarada por: 'integer'
      // A instrução de boolean, também pode ser declarada por: 'bool'

      // ------------------------------- //

      # Int => float, string

      # $idade2 = (float) $idade;
      $idade2 = (string) $idade;

      // ------------------------------- //

      # Float => int, string

      # $peso2 = (string) $peso;

      // Ao fazer a conversão de um valor do tipo float para int, seus respectivos valores '., ...', serão perdidos.

      $peso2 = (int) $peso;

      // ------------------------------- //

      # String => int, float, boolean

      # $id_usuario2 = (float) $id_usuario;
      # $id_usuario2 = (boolean) $id_usuario;
      $id_usuario2 = (int) $id_usuario;

      // ------------------------------- //

      # Boolean => teste com int, string

      // Só irá retornar 0 para false, se o casting for de tipo int ou float, se for de tipo string retornará vazio.

      # $solteiro2 = (int) $solteiro;
      $solteiro2 = (string) $solteiro;

      // Quando utilizamos gettype(), passando uma variável, se atribuirmos esse retorno a um echo, será exibido no navegador o tipo dessa variável.
      echo gettype($idade) . " $idade <br>";
      echo gettype($idade2) . " $idade2 <br><hr>";

      echo gettype($peso) . " $peso <br>";
      echo gettype($peso2) . " $peso2 <br><hr>";

      echo gettype($id_usuario) . " $id_usuario <br>";
      echo gettype($id_usuario2) . " $id_usuario2 <br><hr>";

      echo gettype($solteiro) . " $solteiro <br>";
      echo gettype($solteiro2) . " $solteiro2 <br>";

  	?>

</body>
</html>