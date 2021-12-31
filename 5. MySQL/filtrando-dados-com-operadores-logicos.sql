-- AND: Todas as operações de comparação devem ser verdadeiras.
-- OR: Pelo menos uma das operações de comparação deve ser verdadeira.

-- Pesquisa simples com operadores lógicos:
SELECT 
	* 
FROM 
	`tb_alunos` 
WHERE 
	idade > 18 AND idade < 60 AND interesse = 'Informática';

-----------------------------------------------------------------------------------------------------------

-- Pesquisa um pouco mais complexa, onde: O interesse é informática ou jogos E a (idade é entre 10 a 60 anos OU o estado é igual à DF)

SELECT 
	* 
FROM 
	`tb_alunos` 
WHERE 
	(interesse = 'Informática' OR interesse = 'Jogos') 
		AND 
	((idade >= 10 AND idade <= 60) OR (estado = 'DF'))
