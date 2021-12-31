-- SELECT - Funções de agregação parte 2 - SUM e COUNT.

SELECT 
	-- <Função de agregação> --
FROM 
	-- <tabela> 
WHERE
	-- <filtro>

-- Funções de agregação:

-- SUM(coluna) - Retorna a soma dos valores de todos os registros com base em uma coluna.
-- COUNT(*) - Retorna a quantidade de todos os registros dentro de uma tabela.

-- Exemplo:
-- Retorna a soma do investimento de todos os cursos que estão dentro da tabela tb_cursos e que o curso se encontre ativo

SELECT 
	SUM(investimento) 
FROM 
	`tb_cursos`
WHERE
	ativo = 1;

-- Exemplo:
-- Retorna a quantidade de cursos que se encontram ativos.

SELECT 
	COUNT(*) 
FROM 
	`tb_cursos` 
WHERE 
	ativo = 1;