import { Component } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {

	public resultado: String = ""
	public titulo: String = "Meu primeiro App"
	public imagemRandomica: String = "https://source.unsplash.com/random/200x200"
	public imagemLocal: String = "../assets/icone-celular.png"

	constructor(private navegacao: NavController) { }

  	ngOnInit() {
  	}

  	recuperar() {
		this.resultado = this.nome
	}

	abrirBotoes() {
		this.navegacao.navigateForward('botoes')
	}

	abrirLista() {
		this.navegacao.navigateForward('lista')
	}

	public atualiza(): void {

		this.titulo = "Texto alterado"

	}

	public acao(): void {

		this.titulo = "Botão clicado"

	}

}
