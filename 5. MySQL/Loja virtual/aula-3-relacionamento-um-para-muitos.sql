-- Aula 3 - Relacionamento um para muitos --

-- Para criar um relacionamento de um para muitos, podemos criar uma outra tabela, que por sua vez, se relacionará com a chave primária da tabela principal:

CREATE TABLE tb_imagens (
	id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto),
    url_imagem VARCHAR(200) NOT NULL
)

-- Com a tabela criada, agora podemos inserir dados dentro dela, iremos inserir o id_produto a qual estamos nos referenciando a chave primária, e iremos inserir o caminho (url) da imagem.

-- Produto 1
INSERT INTO tb_imagens(id_produto, url_imagem) 
	VALUES 
(1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'), (1, 'notebook_3.jpg')

-- Produto 2
INSERT INTO tb_imagens(id_produto, url_imagem) 
	VALUES 
(2, 'smartv_1.jpg'), (2, 'smartv_2.jpg')

-- Produto 3
INSERT INTO tb_imagens(id_produto, url_imagem)
	VALUES 
(3, 'smartphone_1.jpg'), (3, 'smartphone_2.jpg'), (3, 'smartphone_3.jpg')