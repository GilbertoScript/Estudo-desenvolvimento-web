-- Uma outra grande funcionalidade do SQL, é a utilização do comando IN, parecido com o between, ele faz uma boa redução na verbosidade e complexidade da leitura do código.

-- Um exemplo de sua utilização:

-- Ao invés fazer assim:

SELECT 
	* 
FROM
	`tb_alunos` 
WHERE
	interesse = 'Jogos' OR interesse = 'Informática' OR interesse = 'Esporte';

-- Fazemos assim:

SELECT 
	* 
FROM
	`tb_alunos` 
WHERE
	interesse IN('Jogos', 'Informática', 'Esporte');

-- E uma outra possibilidade é listar todos os parâmetros passados menos os que estão no IN, por exemplo:

SELECT 
	* 
FROM
	`tb_alunos` 
WHERE
	interesse NOT IN('Jogos', 'Informática', 'Esporte');