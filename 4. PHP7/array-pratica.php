<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 33 - PHP - Array prática</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  <h1>Array Prática</h1>
  <h3>Arrays sequenciais</h3><hr>

    <?php

      // Em php temos algumas opções para a criação de arrays, podem ser sequenciais (numéricos) e associativos

      ##### Sequenciais

      // Para declarar um array é bem simples, basta:
      # $lista_usuarios = array('Gilberto', 'Fulano', 'Ciclano'); Ou então:
      $lista_usuarios = ['Gilberto', 'Fulano', 'Ciclano'];

      // Para adicionar um novo elemento ao array é simples, basta:
      $lista_usuarios[] = 'Beltrano';

      // Para fazer o debug de um array podemos utilizar algumas funções nativas do php, que por sua vez irão imprimir o array no browser, por exemplo:

      // E com a utilização da tag <pre> do html, os arrays são formatados no browser.
      echo "Debug do array utilizando var_dump: <pre>"; 
        var_dump($lista_usuarios);
      echo "</pre> <br /> <hr />"; 

      echo "Debug do array utilizando print_r: <pre>"; 
        print_r($lista_usuarios);
      echo "</pre> <br />"; 

      // E para recuperar um único item do array é só fazer:
      echo $lista_usuarios[0] . "<br /> <hr /> <hr />";

      ### Associativos
      echo "<h3> Arrays associativos </h3>";

      // A idéia de arrays associativos é bastante semelhante ao dos arrays de tipo sequenciais. A principal diferença é que os índices são explícitos, ou seja, a declaração dos índices é feita de forma manual:

      $lista_ids = array('Gilberto' => '265', 'Ciclano' => '456', 'Beltrano' => '921');

      // E para adicionar um novo índice ao array especificando esse índice basta:

      $lista_ids['José'] = '564';

      echo "Debug do array utilizando var_dump: <pre>";
        var_dump($lista_ids);
      echo "</pre>";

      echo "Debug do array utilizando print_r: <pre>";
        print_r($lista_ids);
      echo "</pre>";

    ?>

    

</body>
</html>