<?php
		
	// PHP 7 OO - Aula 17 - Tratamentos de erro - Try, Catch, Finally, throw
	
	// Para começar vamos abrir a tag de erro try(tente), que é a principal tag de tratamento de erro, isso pois essa tag faz com que seja identificado determinado erro.

	// Blocos de tratamento de erro try, 'possui' outros dois destinos, um bloco catch(pegar), que irá fazer algo com o erro que foi pego no bloco try, ou o bloco finally, que irá encerrar o tratamento de erro.

	// 
	
	/*

	E caso o erro estivesse fora dos blocos de tratativa de erro por exemplo, a aplicação iria simplesmente morrer, e não executaria nada que estivesse depois desse erro.

		$sql = 'Select * from clientes';
		mysql_query($sql);

	*/

	// Aqui poderia por exemplo ter uma lógica
	try {

		// E aqui outra lógica que por acaso poderia ocorrer um potêncial erro(exceção), fazendo com que fosse necessário a utilização de outro bloco try.
		echo "<h2>--- Entrou no bloco try ----</h2>";

		// E por exemplo, caso dentro do try ocorresse algum erro, poderiamos capturá-lo com o catch, e fazer alguma tratativa, e para forçar um erro vamos fazer:
			// $sql = 'Select * from clientes';
			// mysql_query($sql);

		// Outro exemplo da criação de erros, é com o throw, que 'lança' os erros na aplicação
		// Poderiamos por exemplo, verificar se um arquivo existe dentro da aplicação:
		if(!file_exists('require_arquivo.php')) {

			// O resultado dessa lógica é de que esse arquivo existiria, já que estamos invertendo o resultado
			// Então poderiamos lançar para a aplicação um erro intencional:
			throw new Exception('O arquivo em questão "require_arquivo.php" não está disponível');
		};

	  
	  // E caso ocorra o erro feito na função mysql_query, iremos capturá-lo da seguinte forma, e note que ele captura um ERRO.
	} catch(Error $e) {
		echo "<h3>--- O erro foi capturado no bloco catch de erro ---</h3>";

	  // Catch que irá capturar o erro lançado 'Exception, exceção'
	} catch(Exception $exception) {

		echo "<h3>--- O erro foi capturado no bloco catch de exceção ---</h3>";
	}


	// Após a tentativa de try, o comando finally será executado. Caso já tenha o try e o catch, o finally é opcional, porém se existir apenas o try, o finally é sim obrigatório.
	finally {
		echo "<h2>--- Entrou no bloco finally ----</h2>";
	}

	echo "Fora do bloco de tratamento de erro";
	
?>