-- Para fazer a consulta de dados dentro do SQL é bem simples, basta, utilizar o comando SELECT, que por sua vez, faz parte do subconjunto do SQL - DDL - Data Manipulation Language

SELECT ativo, carga_horaria, data_cadastro, id_curso, imagem_curso, investimento, nome_curso, resumo FROM
	tb_course

-- E após executar esse comando SQL, dentro do Phpmyadmin, podemos ter acesso aos registros contidos dentros das respectivas colunas.

-- E poderia ser feito tranquilamente a consulta apenas das colunas desejadas, por exemplo:

SELECT ativo, carga_horaria, investimento, nome_curso, resumo FROM tb_course

-- Também podemos utilizar um caractere coringa para a exibição de todos os registros da tabela selecionada:

SELECT * FROM tb_course