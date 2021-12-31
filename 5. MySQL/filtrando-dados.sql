-- Filtrando registros WHERE --

-- Para que serve um filtro? Basicamente é isso mesmo... Para filtrar registros, e ter informações mais precisas e necessárias.

-- Operadores de comparação: =, <, >, <=, >=,
-- Operadores lógicos:

-- AND: Todas as operações de comparação devem ser verdadeiras.
-- OR: Pelo menos uma das operações de comparação deve ser verdadeira.

-- Pesquisa simples:
-- Seleciona todos as linhas de dentro da tabela tb_alunos, onde o estado é igual à DF;
SELECT 
	* 
FROM 
	`tb_alunos` 
WHERE
	estado = 'DF';

-- Outra pesquisa:
SELECT 
	* 
FROM 
	`tb_alunos` 
WHERE 
	idade > 18 AND idade < 60 AND interesse = 'Informática';