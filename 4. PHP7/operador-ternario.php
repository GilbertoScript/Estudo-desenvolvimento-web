<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 16 - PHP - Operador ternário</title>

</head>
<body>

	<?php 

		// Uma outra forma mais enxuta de se escrever um comando if/else, é com a utilização do operador ternário, apesar de ser mais limitado, em algumas situações é bem convencional a sua utilização.

		// E para a prática, iremos refatorar o código da aula 15, com o uso do operador ternário.

		// Sua sintax é basicamente : <condição> ? true : false

		// Ela pode ser impressa no navegador via a tag curta de impressão, ou atribuindo o operador ternário em si, a outra variável

		# -------------------------------------------------------------------------------------------------------- #
		# -------------------------------------------------------------------------------------------------------- #

		$user_have_store_card = true;

		$purchase_value = 165.45;

		$shipping_value = 50;

		$user_name = 'Gilberto';

		$received_freight = true;

		if($user_have_store_card && $purchase_value >= 400) {

			$shipping_value = 0;

		} else if($user_have_store_card && $purchase_value >= 300) {
			$shipping_value = 15;

		} else if($user_have_store_card && $purchase_value >= 100) {
			$shipping_value = 25;

		} else {
			$received_freight = false;
		}

	?>

	<div>
		<h2>Detalhes pedido:</h2> <hr>

		<p>
			Possui cartão loja? 
			<?= $user_have_store_card ? "Sim, possui. <br>" : "Não possui. <br>" ;  ?>
		</p>

		<p>Valor da compra: <?= $purchase_value; ?></p>

		<p>
			Recebeu desconto no frete? 
			<?php 

				$received_freight_q = ($received_freight) ? "Sim, recebeu. <br>" : "Não recebeu. <br>" ;

				echo $received_freight_q;

			?>
		</p>

		<p>Valor do frete: <?= $shipping_value; ?></p><hr>
	</div>

</body>
</html>