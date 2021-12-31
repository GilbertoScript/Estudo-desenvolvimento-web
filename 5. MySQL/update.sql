-- Para fazer a atualização de registros dentro do sql utilizamos uma função DML - Data Manipulation Language, conhecida como Update.

-- A sintaxe basicamente é a seguinte:

UPDATE
	<tabela>
SET
	<coluna> = <valor>
WHERE
	<filtro(s)>

-- Exemplo de uma utilização real:
-- Que atualiza o interesse para saude, onde os alunos tem a idade superior a 80.

UPDATE
	tb_alunos
SET
	interesse = 'Saúde'
WHERE
	idade >= 80;

-- Exemplo um pouco mais complexo, onde várias colunas são afetadas:

UPDATE 
	tb_alunos 
SET 
	interesse = 'Informática', idade = 18, email = 'teste@gmail.com' 
WHERE 
	id_aluno = 1;