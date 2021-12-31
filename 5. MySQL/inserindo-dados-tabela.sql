-- Para fazer a inserção de um registro dentro da tabela, usamos o comando INSERT INTO, podemos estar apenas dentro do banco de dados para fazer um registro...

-- Após escrever INSERT INTO, precisamos definir qual a tabela que irá ser alterada.

-- Após dado o nome da tabela, a esquerda de Values, temos as colunas que irão ser alteradas, e a direita os valores inseridos nessas colunas...
INSERT INTO tb_course(
    ativo,
    carga_horaria,
    data_cadastro,
    id_curso,
    imagem_curso,
    investimento,
    nome_curso,
    resumo
)VALUES(
	1,
    35,
    '2021-01-25 12:25:34',
    2,
    'curso_angular.jpg',
    575.86,
    'Web completo com JS, TS e Angular',
    'Aprenda a criar aplicações Front-end incríveis com JavaScript, Typescript e Angular'
);

-- Importante: Não é possível inserir dois registros distintos de uma só vez dentro de uma tabela, ou seja, sempre um registro por vez!
