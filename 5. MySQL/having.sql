-- SELECT - Filtrando seleções agrupadas com HAVING.

-- Utilizar filtros com o group by, podemos exibir em nossas consultas ao SQL, agrupamentos de registros, por exemplo quando fazemos uma consulta onde queremos retornar quantos usuários por estado estão cadastradospodemos:

SELECT 
	estado, COUNT(*) AS total_por_estado 
FROM 
	`tb_alunos`
GROUP BY 
	estado;

-- E com a utilização do HAVING, podemos aprimorar os resultados ainda mais...

-- Nesse exemplo temos a seguinte situação: com o retorno dos estados, atuamos sobre o resultado e exibimos em tela apenas os estados que possuem mais de 5 registros dentro deles.

SELECT 
	estado, COUNT(*) AS total_por_estado 
FROM 
	`tb_alunos`
GROUP BY 
	estado
HAVING
	total_por_estado > 5;

-- Exemplo de uma pesquisa mais complexa:

SELECT 
	estado, COUNT(*) AS total_por_estado 
FROM 
	`tb_alunos`
WHERE
	interesse != 'Jogos'
GROUP BY 
	estado
HAVING
	total_por_estado >= 3;