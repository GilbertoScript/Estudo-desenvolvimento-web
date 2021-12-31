-- Aula 4 - Relacionamento muitos para muitos

-- Para criar um relacionamento de muitos para muitos, é bem simples, o conceito é o seguinte: teremos várias tabelas que se relacionarão com outras tabelas, em contextos 'distintos', por exemplo: 

-- Teremos uma tabela clientes, que terá um relacionamento de um para muitos, ou seja, um cliente, pode ter muitos pedidos, isso é diferente do relacionamento de um para um do tb_descricoes_tecnicas com tb_produtos, pois o produto só pode ter uma descrição, e em tb_pedidos teremos uma primary key, agora juntamos com tb_pedidos e tb_produtos, e isto resulta em um relacionamento de muitos para muitos com essas duas tabelas, isso pois um produto pode estar presente em vários pedidos, assim como em um pedido, pode conter vários produtos.

-- E para relacionar essas duas tabelas de muitos para muitos, é necessário criar uma tabela auxiliar, ou seja, criamos a tabela tb_pedidos_produtos. 

-- Criação da tabela tb_clientes:

CREATE TABLE tb_clientes (
	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT(3) NOT NULL
);

-- Criação da tabela tb_pedidos, que se relaciona com tb_clientes, em um relacionamento um para muitos.

CREATE TABLE tb_pedidos(
	id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES tb_clientes(id_cliente),
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Agora iremos criar a tabela que irá fazer o relacionamento de muitos para muitos, essa tabela irá relacionar o contexto tb_pedidos e o contexto de tb_produtos...

CREATE TABLE tb_pedidos_produtos(
	id_pedido INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY(id_pedido) REFERENCES tb_pedidos(id_pedido),
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto)
);