-- Aula 9 - Inner Join - Junção interna.

-- O conceito do INNER JOIN é o seguinte: relaciona todos os registros da tabela à esquerda e à direita onde exista o relacionamento entre os registros. Ou seja, em vez de trazer prioritariamente os registros de uma tabela ou de outra(que é o que ocorre com right e left join), ele retorna apenas os registros dessas duas tabelas que se relacionam.

-- Para um exemplo mais aprofundado, vamos começar criando mais um produto.
INSERT INTO 
	tb_produtos(produto, valor) 
VALUES 
	('HD externo portátil Seagate Expansion 1TB USB 3.0', 274.90);

-- Exemplo de um left join --
SELECT 
	* 
FROM
	tb_pedidos LEFT JOIN tb_pedidos_produtos 
    	ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

-- E para trazer mais uma tabela como resultado da segunda tabela, podemos utilizar outro LEFT JOIN.

SELECT 
	* 
FROM
	tb_pedidos LEFT JOIN tb_pedidos_produtos 
    	ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) LEFT JOIN tb_produtos 		   		   ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto);

-- E utilizando essa tabela com um RIGHT JOIN em tb_produtos, temos o retorno de um produto a mais, isso por que como existe um produto que não está presente em nenhum registro, o retorno desse produto é priorizado, visto que o comando utilizado é um right join, ou seja, priorizando a tabela à direita:
																								--
SELECT 																							--	
	* 																						  --
FROM																		---		---	   ---		
	tb_pedidos LEFT JOIN tb_pedidos_produtos 					  ----------		
    	ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) RIGHT JOIN tb_produtos 		   		   ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto);

-- E o INNER JOIN? Como ele se comporta diante disso, sendo que ele não prioriza nenhuma das tabelas?
-- Simples, como o inner join prioriza a relação entre as tabelas, todos os registros que se relacionam por meio do pivô de relacionamento estabelecido serão retornados:

SELECT 
	* 
	FROM tb_pedidos INNER JOIN tb_pedidos_produtos 
		ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) INNER JOIN tb_produtos 		   		   ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto);
