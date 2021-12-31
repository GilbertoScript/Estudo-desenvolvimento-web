<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 31 - PHP - Funções nativas para manipular datas</title>

	<style type="text/css">
		
	</style>

</head>
<body>

  <h2>Funções nativas para manipular datas</h2>

    <?php

      // Para estudar a manipulação de datas em PHP, temos algumas das principais funções nativas para realizar essa tarefa, que são:

      // date(formato) => Recupera a data atual
      // date_default_timezone_get(timezone) => Recuperar o timezone default da aplicação
      // date_default_timezone_set(timezone) => Atualizar o timezone default da aplicação
      // strtotime(data) => Transformar as datas textuais em segundos

      // Recuperar a data atual / data corrente:
      // Essa função por sua vez espera um parâmetro, o formato da data a ser exibido.
      // Se por exemplo quisessemos recuperar a data da seguinte forma: dia/mes/ano hora:minutos, fariamos assim:

      # echo date('d/m/Y H:i') . "<br />";

      // No browser, a aplicação retorna o horário errado, isso pois é necessário fazer uma simples configuração de timezone:

      // Primeiro vemos qual o timezone atual utilizando uma função nativa, seu retorno é de Berlim-Europa
      # echo date_default_timezone_get();

      // E para consertar isso basta:

      # date_default_timezone_set('America/Sao_Paulo');

      // Porém como eu fiz a configuração do timezone pelo arquivo php.ini, já está exibindo o horário normalmente

      // E depois executamos novamente o get do timezone, e a data para sabermos se foi corrigida:
      echo date_default_timezone_get() . "<br />";
      echo date('d/m/Y H:i') . "<br /> <hr />";


      // Agora vamos para um exemplo um pouco mais complexo:

      // Vamos criar algumas datas..
      $data_inicial = "2021-03-11";
      $data_final = "2021-03-25";

      // E como fazer para saber quantos dias tem entre essas duas datas? Simples, basta primeiro transformarmos essas datas de tipo string em datas calculaveis:

      // Timestamp - 01/01/1970
      // Então primeiro iremos transformar a data que queremos calcular:

      // Então o que a função faz é o seguinte calcular o tempo entre 01-01-1970 até 2021-03-11

      $time_inicial = strtotime($data_inicial);
      $time_final = strtotime($data_final);

      echo "2021-03-11 - " . $time_inicial . "<br />";
      echo "2021-03-25 - " . $time_final . "<br />";

      // Criando a variável que irá fazer o cálculo das duas datas já formatadas.
      $diferenca_times = $time_final - $time_inicial;

      echo "A diferença entre as datas são: " . ($diferenca_times / 86400) . " dias <br />";

  	?>

    

</body>
</html>