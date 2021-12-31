-- Aula 5 - Relacionamento muitos para muitos (populamento)

-- Agora com as tabelas criadas, e feito todos os relacionamentos, iremos popular essas tabelas.

-- População da tabela tb_clientes - Não incluimos a coluna id_cliente, pois ela é auto_increment, e sua inserção nos registros será feito de maneira automática.

INSERT INTO tb_clientes(nome, idade) VALUES ('Gilberto', 18);

-- Agora iremos inserir registros na tabela - tb_pedidos, isso pois estamos fazendo um pedido para o cliente 'Gilberto'. E nessa tabela inserimos apenas o id do cliente que estamos referenciando.

INSERT INTO tb_pedidos(id_cliente) VALUES (1);

-- Agora iremos criar o pedido_produto, ou seja, iremos popular a tabela que se relaciona com o pedido do cliente, e com os produtos que contém nesse pedido:

-- Fazemos a inserção de um pedido em que o id do produto é 2.
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES (1, 2);

-- E agora podemos fazer outro registro em que quem fez o pedido é a mesma pessoa, porém o produto é o '3'.
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES (1, 3);

-------------------------------------------------------------------------------------------------------

-- E também podemos fazer com que seja feito outro pedido pelo mesmo cliente:
INSERT INTO tb_pedidos(id_cliente) VALUES (1);

-- Em que ele faz outro pedido, logo o id do pedido se torna '2'.
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES (2, 1)

-------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------

-- Criando outro cliente chamado Rodrigo:

INSERT INTO tb_clientes(nome, idade) VALUES ('Rodrigo', 20);

-- Criando um pedido para o cliente Rodrigo:

INSERT INTO tb_pedidos (id_cliente) VALUES (2);

-- Colocando produtos no pedido do cliente Rodrigo:



