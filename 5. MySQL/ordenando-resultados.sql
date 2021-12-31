-- SELECT - Ordenando resultados.

-- A sintaxe base para a ordenação de resultados é:

SELECT
	<coluna(s)>
FROM
	<tabela(s)>
WHERE 
	<filtro(s)>
ORDER BY
	idade ASC, nome DESC;
		  --- 		----
		  --		--
		  --		--
		  --		--
		  --		--
	--   Ascending	Descending

--------------------------------------------- Exemplo --------------------------------------------------
--------------------------------------------- ------- --------------------------------------------------

SELECT 
	* 
FROM 
	`tb_alunos` 
WHERE
	idade BETWEEN 18 AND 30
ORDER BY 
	idade ASC, nome DESC;