-- Uma funcionalidade do SQL a cerca de DML - Data manipulation Language - é a de excluir registros, para isso utilizamos o operador DELETE.

-- A sintaxe basicamente é:

DELETE FROM
	<tabela>
WHERE
	<filtro(s)>

-- Exemplo da utilização do Delete em um comando onde o aluno que contém o id = 5 terá seu cadastro removido:

DELETE FROM
	tb_alunos
WHERE 
	id_aluno = 5;

-- E muito cuidado sempre ao utilizar o DELETE, pois se não houver um where, ou o where não estiver bem especificado, é possível que acabe por apagar regitstros que não deveriam ser apagados, ou até mesmo apagar uma tabela inteira, por isso é muito comum antes de se utilizar o DELETE, sempre utilizar um SELECT, passando a esse SELECT as informações que você passaria ao DELETE, para que assim você possa fazer um 'debug' correto e não corra riscos na sua aplicação.

-- Utilização do WHERE em um exemplo mais complexo.

