-- SELECT - Funções de agregação parte 1 - MAX, MIN e AVG.

SELECT 
	-- <Função de agregação> --
FROM 
	-- <tabela> 
WHERE
	-- <filtro>

-- Funções de agregação:

-- MIN(coluna) - Retorna o MENOR valor de todos os registros com base em uma coluna.
-- MAX(coluna) - Retorna o MAIOR valor de todos os registros com base em uma coluna.
-- AVG(coluna) - Retorna a média de todos os registros com base em uma coluna.

-- Exemplo:
-- Retorna os registros da tabela tb_cursos onde o curso está ativo e que possui o menor investimento.

SELECT 
	MIN(investimento) 
FROM 
	`tb_cursos`
WHERE
	ativo = 1;

-- Exemplo:
-- Retorna os registros da tabela tb_cursos onde o curso está ativo e que possui o maior investimento.

SELECT 
	MAX(investimento) 
FROM 
	`tb_cursos`
WHERE
	ativo = 1;

-- Exemplo:
-- Retorna a média de investimento com base em: o curso estar ativo e estar dentro da tabela cursos.

SELECT 
	AVG(investimento) 
FROM 
	`tb_cursos`
WHERE
	ativo = 1;