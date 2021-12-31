<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 15 - PHP - if/else - prática 3</title>
</head>
<body>

	<?php 

		// Para práticar um pouco mais com os operadores de comparação e com os operadores lógicos, vamos simular um exemplo um pouco mais próximo de scripts mais complexos.

		// Temos uma loja em que o cliente ganha frete grátis se: ele tiver o cartão da loja, e se a compra for superior a 100 reais.

		// Usuário possui cartão loja?
		$user_have_store_card = true;

		// Valor de compra.
		$purchase_value = 165.45;

		// Valor do frete.
		$shipping_value = 50;

		// Nome do usuário
		$user_name = 'Gilberto';

		// Frete recebido
		$received_freight = false;

		if($user_have_store_card && $purchase_value >= 100) {

			$shipping_value = 0;
			$received_freight = true;

		}

	?>

	<div>
		<h2>Detalhes pedido:</h2> <hr>

		<p>
			Possui cartão loja? 
			<?php 

				if($user_have_store_card) {
					echo "Sim, possui. <br>";

				} else {
					echo "Não possui. <br>";
				}

			?>
		</p>

		<p>Valor da compra: <?= $purchase_value; ?></p>

		<p>
			Recebeu desconto no frete? 
			<?php 

				if($received_freight == true) {
					echo "Sim, recebeu. <br>";

				} else {
					echo "Não recebeu. <br>";
				}

			?>
		</p>

		<p>Valor do frete: <?= $shipping_value; ?></p><hr>
	</div>

</body>
</html>