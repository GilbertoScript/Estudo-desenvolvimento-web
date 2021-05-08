-- Aula 1 -- Relacionamento um para um --

-- Criando o banco de dados:

CREATE DATABASE db_loja_virtual;

-------------- Criando a primeira tabela:

-- Na coluna id_produto, definimos ela como nossa PRIMARY KEY explicitamente, pois, será o campo que não poderá se repetir de forma alguma.

-- E utilizamos também o AUTO_INCREMENT...

-- ...O auto incremento permite que um número único seja gerado quando um novo registro é inserido em uma tabela. Em MYSQL trata-se da palavra chave AUTO_INCREMENT, cujo valor inicial padrão é 1, e se incrementa de 1 em 1.

CREATE TABLE tb_produtos(
	id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    produto VARCHAR(200) NOT NULL,
    valor FLOAT(8, 2) NOT NULL
);

-------------- Criando a segunda tabela:

-- E para a segunda tabela nós criamos algumas colunas, e como chave estrangeira, que está apontando para a primary_key de outra coluna, nós podemos definir ela no final da construção das tabelas, e passando para ela o nome da chave primária.

-- E passamos também a FOREIGN KEY, as REFERENCES, ou seja, de qual tabela a chave estrangeira está apontando. E passamos na tabela de REFERENCES, qual o nome da chave primária.

CREATE TABLE tb_descricoes_tecnicas(
	id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL ,
    descricao_tecnica TEXT NOT NULL,
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto)
)
