-- SELECT - Operador LIKE -- 

-- Permite realizar filtros com base em uma pesquisa de caracteres dentro de uma coluna textual
-- Caracteres curingas

-- % Indica que pode haver a existência de qualquer conjunto de caracter no texto
-- _ Indica que pode haver a existência de um ou mais caracteres em uma posição específica do texto.

-- Exemplos com %: -----------------------------------------------------------------------

	[...] WHERE nome LIKE 'Evelyn';

	[...] WHERE nome LIKE '%e';
	[...] WHERE nome LIKE '%a%';
	[...] WHERE nome LIKE 'C%';

-- Exemplos com _: -----------------------------------------------------------------------

	-- Nome que contêm qualquer caractere, e em seguida termina com 'riel'
	[...] WHERE nome LIKE '_riel';

	-- Nome que contêm qualquer caractere entre as letras 'ru', um exemplo é: 'Cruz'.
	[...] WHERE nome LIKE '_ru_';
	
	-- Nome que contêm qualquer caractere que começa com I, e tem 3 letras ao todo, por exemplo: 'Ina'.
	[...] WHERE nome LIKE 'I_ _';

-- Exemplo com utilização dos dois operadores: --------------------------------------------

	[...] WHERE nome LIKE '%tt_';