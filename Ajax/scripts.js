// Recuperamos na função a url do link a ser clicado
function requisitarPagina(url) {
	// Criação da variável 'ajax' que recebe a classe XMLHttpRequest, que contém os atributos e métodos que serão utilizado para o nosso exemplo de uma SPA - Single Page Aplciation.
	let ajax = new XMLHttpRequest();

	// Requisição não iniciada, state = 0
	console.log(ajax.readyState);

	// Conexão estabelecida com o servidor, state = 1
	ajax.open('GET', url);
	
	console.log(ajax.readyState);

	// 'Alguma lógica para ficar observando para o progresso da requisição'
	ajax.onreadystatechange = () => {
		console.log(ajax.readyState);
	}

	// Método open - responsável por configurar qual url será requisitada e por qual método(get, post..)
	// ajax.open('GET', url);

	ajax.send();
	// console.log(ajax)
}

/* Uma requisição XMLHttpRequest, passa por 5 estados: 

ReadyState 

- 0: Request not initialized (requisição não iniciada)
- 1: Server connection established (conexão estabelecida com servidor)
- 2: Request received (requisição recebida)
- 3: Processing request (processando requisição)
- 4: Request finished and response is ready (requisição finalizada)

*/
