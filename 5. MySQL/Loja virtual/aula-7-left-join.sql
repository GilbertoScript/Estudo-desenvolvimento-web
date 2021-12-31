-- Aula 6 - Junção à esquerda - JOIN - LEFT JOIN

-- Left join - Relaciona todos os registros da tabela à esquerda + CASO EXISTA todos os registros da tabela à direita

-- Quando temos um cenário onde é preciso fazer consultas em mais de uma tabela com uma única query, podemos fazer as junções de tabelas.

-- Exemplo simples:

-- Temos um exemplo onde queremos selecionar todos os registros de dentro das tabelas tb_clientes e tb_pedidos, para fazer isso usamos o LEFT JOIN, porém esse retorno só é possível se houver um relacionamento entre essas tabelas, esse relacionamento é descrito após o nome da tabela pelo operador ON().

-- Ou seja: queremos todos os registros da tabela à esquerda, mas caso exista registros na tabela a direita, retorne eles, onde o relacionamento estabelecido seja satisfeito.

SELECT
	*
FROM
	tb_clientes LEFT JOIN tb_pedidos ON (tb_clientes.id_cliente = tb_pedidos.id_cliente);

-- Para praticar um pouco vamos a uma outra pergunta um pouco mais simples: quantos produtos possuem imagens?

-- Então ele retorna os produtos, e caso exista registros de imagens nesses produtos, é retornado, e para que seja retornado tudo de forma correta usamos o operador ON que usa a relação entre essas duas tabelas para retornar com mais exatidão as imagens...

SELECT 
	*
FROM
	tb_produtos LEFT JOIN tb_imagens ON (tb_imagens.id_produto = tb_produtos.id_produto);

-- E para finalizar aqui temos uma observação importante:

-- Em operações LEFT JOIN, todos os registros selecionados da tabela à esquerda serão retornados, porém os registros à direita serão retornados apenas se existirem com base no operador de relacionamento, ou seja se uma imagem não está relacionada a um produto via id_produto, essa imagem não seria retornada....