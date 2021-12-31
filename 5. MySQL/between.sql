-- Algo muito comum utilizado em muitas linguagens é a utilização de:
-- idade >= 18 and idade <= 60;
-- data >= '2021-01-01' AND data <= '2021-05-01';

-- Perceba que isso é algo algumas das vezes um pouco verboso, visto que em muitas linguagens não temos uma otimização para isso, mas no sql temos a utilização do operador BETWEEN(entre), que funciona da seguinte forma:

-- [...]
-- WHERE idade BETWEEN 18 AND 60;

-- Veja que com o operador between temos uma redução na verbosidade do código, essa funcionalidade funciona apenas com dados do tipo number ou do tipo date.

-- Exemplos:

SELECT
	*
FROM
	`tb_alunos`
WHERE
	(idade BETWEEN 18 AND 60) AND (interesse = 'Informática' OR interesse = 'Jogos');

-- Exemplo com datas:

SELECT
	*
FROM
	`tb_alunos`
WHERE
	data BETWEEN '2021-01-01' AND '2021-05-01';