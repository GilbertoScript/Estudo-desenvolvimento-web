<?php
	namespace A;

	interface CadastroInterface {
		public function salvar();

	}

	class Cliente implements CadastroInterface {
		public $nome = 'Fulano';

		public function __get($attr) {
			return $this->$attr;
		}

		public function salvar() {
			echo "Salvar cliente";
		}
	}
?>
