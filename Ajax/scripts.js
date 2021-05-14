// Recuperamos na função a url do link a ser clicado
function requisitarPagina(url) {

	// Incluir um gif via DOM:
	let conteudo = document.getElementById('conteudo');
	conteudo.innerHTML = '';

	// Se o elemento não existir, ele cria, se já estiver criado, ele não entra na condição
	if(!document.getElementById('loading')) {

		let loadingGif = document.createElement('img');
		loadingGif.id = "loading"
		loadingGif.src = "assets/loading.gif";
		loadingGif.className = "rounded mx-auto d-block";

		conteudo.appendChild(loadingGif);

		console.log('chegou aqui');
	}

	// Criação da variável 'ajax' que recebe a classe XMLHttpRequest, que contém os atributos e métodos que serão utilizado para o nosso exemplo de uma SPA - Single Page Aplciation.

	let ajax = new XMLHttpRequest();

	// Requisição não iniciada, state = 0
	//console.log(ajax.readyState);

	// Conexão estabelecida com o servidor, state = 1
	ajax.open('GET', url);
	
	//console.log(ajax.readyState);

	// 'Alguma lógica para ficar observando para o progresso da requisição'
	ajax.onreadystatechange = () => {

			if (ajax.readyState == 4 && ajax.status == 200) {

				conteudo.innerHTML = ajax.response;
				console.log('Requisição finalizada, o status é 200');
				//document.getElementById('loading').remove();
			}

			if (ajax.readyState == 4 && ajax.status == 404) {

				window.location = "404/404_page.html";
				//document.getElementById('loading').remove();
			}
	}

	ajax.send();
	// console.log(ajax)
}


// Método open - responsável por configurar qual url será requisitada e por qual método(get, post..)
	// ajax.open('GET', url);

/* Uma requisição XMLHttpRequest, passa por 5 estados: 

ReadyState 

- 0: Request not initialized (requisição não iniciada)
- 1: Server connection established (conexão estabelecida com servidor)
- 2: Request received (requisição recebida)
- 3: Processing request (processando requisição)
- 4: Request finished and response is ready (requisição finalizada)

*/