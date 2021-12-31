Incluindo, editando e removendo colunas da tabela

ALTER TABLE

ADD - Permite a inclusão de uma nova coluna na tabela.

--------------- ALTER TABLE tb_course ADD COLUMN carga_horaria INT(5) NULL;

CHANGE - Permite a alteração do nome de uma coluna e de suas propriedades, como por exemplo o tipo.

--------------- ALTER TABLE tb_course CHANGE carga_horaria carga_hora FLOAT(10) NULL;

DROP - Permite a remoção de uma coluna da tabela.

--------------- ALTER TABLE tb_course DROP carga_horaria