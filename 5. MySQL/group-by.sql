-- SELECT - Agrupando seleção de registros com GROUP BY -- 

-- O ORDER BY tem a função de agrupar os registros com base em uma ou mais colunas cujos valores sejam iguais. Permite realizar funções de agregação em cada subconjunto agrupado de registros.
 
SELECT 
	* 
FROM 
	`tb_alunos`
WHERE
	idade BETWEEN 18 AND 60
GROUP BY
	-- Agrupamento --
ORDER BY
	idade ASC
LIMIT
	0, 15;

-- Um exemplo da utilização do GROUP BY é, descobrir quantos registros por interesse nós temos em toda a tabela, isso com apenas uma única requisição(query), em conjunto com uma função de agregação.

SELECT 
	*, COUNT(*) 
FROM 
	`tb_alunos` 
GROUP BY
	interesse;

-- E o resultado dessa query é a seguinte: o retorno de 5 registros(nº de interesses), e de mais uma coluna denomidada COUNT(*), que em cada linha de interesse, mostra a quantidade de 'cadastros' dentro de cada interesse.

-- E melhorando um pouco o retorno da coluna COUNT(*), podemos renomea-lá:

SELECT 
	interesse, COUNT(*) AS total_por_interesse
FROM 
	`tb_alunos` 
GROUP BY
	interesse;

-- Uma outra consulta é a query que faz uma busca por quantos elementos existem dentro de cada estado, sendo 27 possibilidades de estado:

SELECT 
	estado, COUNT(*) AS total_por_estado 
FROM 
	`tb_alunos`
GROUP BY 
	estado;