<?php
		
	// PHP 7 OO - Aula 16 - Namespaces 2

	// A utilização de namespaces é muito comum quando em um código se utiliza diversas bibliotecas, isso para que não haja conflito em relação a nomeclatura das determinadas bibliotecas.

	// E para os exemplos de hoje, iremos implementar a importação e apelidação de namespaces(Use e Aliasing)

	// Importação das libs:
	require './bibliotecas/lib1/lib1.php';
	require './bibliotecas/lib2/lib2.php';

	// Agora que já importamos as libs, vamos fazer com que seja utilizado determinada classe de alguma lib, ou seja, vamos importar a lib em específico.

	// Utilização de apelidos(aliasing)
	use A\Cliente as C1;
	use B\Cliente as C2;

	$cliente1 = new C1(); 

	echo "<pre>";
		print_r($cliente1);
	echo "</pre>";

	echo $cliente1->__get('nome');

	$cliente2 = new C2(); 

	echo "<pre>";
		print_r($cliente2);
	echo "</pre>";

	echo $cliente2->__get('nome');
?>