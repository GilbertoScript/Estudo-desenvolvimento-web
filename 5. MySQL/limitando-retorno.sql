-- Uma função muito utilizada quando fazemos consultas em SQL, é a questão da ordenação de resultados, e junto disso temos como limitar os retornos dessas consultas.

-- Uma boa convensão é utilizar o operador LIMIT, apenas nos finais das querys(requisições ao SQL), isso pois como ele não é obrigatório, faz mais sentido usar sempre ao final. E um outro operador que anda em conjunto com o LIMIT, é o operador OFFSET, que define 'a partir de'.

-- Um exemplo da utilização do LIMIT é a seguinte:

-- Em que é SELECIONADO todos os registros de DENTRO da tabela 'tb_alunos' ONDE a idade está entre 18 e 50, a partir disso está sendo feita uma ORDENAÇÃO em ordem crescente a partir do número do id, e o LIMITE dos resultados dessa consulta é 10.
 
SELECT 
	* 
FROM 
	`tb_alunos` 
WHERE 
	idade BETWEEN 18 AND 50
ORDER BY
	id_aluno ASC
LIMIT
	10;

-- Exemplo da utilização do LIMIT utilizado em conjunto com o OFFSET:

-- Retorna porém o limite é 10, e sérá a partir do id 3.

SELECT 
	* 
FROM 
	`tb_alunos` 
ORDER BY
	id_aluno ASC
LIMIT
	3, 10;

-- Outra forma da utilização do OFFSET:

-- LIMIT
--	10
-- OFFSET
--	3;