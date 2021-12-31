-- Aula 8 - Junção à direita - RIGHT JOIN

-- Relaciona todos os registros da tabela à direita, e caso exista os registros na tabela à esquerda, eles serão retornados com base no operador de relacionamento entre essas duas tabelas.

-- Para um exemplo, vamos fazer uma consulta simples com o LEFT JOIN, e em seguida fazer a mesma consulta com o operador RIGHT JOIN.

SELECT
	*
FROM
	tb_clientes LEFT JOIN tb_pedidos ON (tb_clientes.id_cliente = tb_pedidos.id_cliente);

-- O retorno é o seguinte: temos prioritariamente todos os registros contidos dentro de tb_clientes, e caso esse cliente tenha um pedido, ele será apresentado também, ele é apresentado por causa que há uma relação entre essas duas tabelas que é: 'tb_clientes.id_cliente = tb_pedidos.id_cliente'.

-- E quando fazemos a mesma consulta, porém com o operador RIGHT JOIN, temos um retorno diferente, isso pois não serão retornados pedidos que não existem, pois o 'pivô' de comparação mudou, isto é, se antigamente era priorizado o retorno dos clientes, e retornaria os pedidos apenas se existissem, agora é retornado primeiro os pedidos, e se o cliente não tiver feito nenhum pedido, ele não é retornado, isso pois como dito antes, a prioridade é retornar os pedidos, caso não exista pedido, não faz sentido retornar o cliente sem nenhum pedido.