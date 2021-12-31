-- Aula 10 - Alias - Apelidando tabelas --

-- O recurso de nomear tabelas enquanto estamos realizando resquisições é muito simples porém bastante útil.

-- Aqui temos uma consulta simples, onde retorna a relação de produtos e as descrições desses produtos, pode retornar produtos sem descrições, visto que, a tabela que está sendo priorizada é a tb_produtos.

SELECT 
	*
FROM
	tb_produtos LEFT JOIN tb_descricoes_tecnicas ON (tb_produtos.id_produto = tb_descricoes_tecnicas.id_produto);

-- Agora poderiamos realizar essa mesma consulta porém utilizando apelidações:

-- O retorno é o mesmo, e com menos verbosidade...

SELECT 
	*
FROM
	tb_produtos as p LEFT JOIN tb_descricoes_tecnicas as dt ON (p.id_produto = dt.id_produto);

-- Agora podemos realizar outra consulta, um pouco mais complexa.

-- Perceba que mesmo utilizando muitas instruções, a verbosidade diminui drasticamente, isso por que com as renomações de tabelas, algo com o nome muito grande pode se tornar uma letra ou alguma palavra bem menor..

SELECT 
	p.id_produto,
    p.produto,
    p.valor,
    dt.descricao_tecnica
FROM
	tb_produtos as p LEFT JOIN tb_descricoes_tecnicas as dt ON (p.id_produto = dt.id_produto)
WHERE
	p.valor >= 500.00;