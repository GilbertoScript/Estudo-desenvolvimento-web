function getFilmes() {
	let xml = new XMLHttpRequest();

	xml.open('GET', 'http://localhost/ajax/filmes/filmes2/filmes.json');

	xml.onreadystatechange = () => {

		// Sucesso no estado da requisição e no status da resposta:
		if(xml.readyState == 4 && xml.status == 200) {

			let jsonFilmes = xml.responseText;
			let objJsonFilmes = JSON.parse(jsonFilmes);

			console.log(objJsonFilmes)

			// Utilizando um for in, para percorrer o jsonFilmes:
			for(let i in objJsonFilmes.filmes) {

				let item = objJsonFilmes.filmes[i];

				// Inserção na página os elementos dinâmicos
				let divRow = document.createElement('div')
				divRow.className = "row"

				let divCol = document.createElement('div')
				divCol.className = "col"

				// Lógica para recuperar os genêros do filme:
				let genero = '';
				for(let g in item.generos) {

					if(genero) genero += ', ';
					genero += item.generos[g].genero;
				}

				// Lógica para recuperar o elenco do filme:
				let elenco = '';
				for(let e in item.elenco) {

					if(elenco) elenco += ', ';
					elenco += item.elenco[e].ator;
				}

				divRow.appendChild(divCol);
				divCol.innerHTML = `
					<p><strong>Título: </strong>${item.titulo}</p>
					<p><strong>Resumo: </strong>${item.resumo}</p>
					<p><strong>Genêro: </strong>${genero}</p>
					<p><strong>Elenco: </strong>${elenco}</p>
					<p>
						<strong>
							Data de lançamento: 
						</strong>
						${item.dataLancamento.data} ( ${item.dataLancamento.pais} )
					</p>
					<hr />
				`

				document.getElementById('lista').appendChild(divRow);
			}

			
		}

		// Caso a conexão com o servidor seja feita e tenha recebido a requisição, porém não tenha encontrado o determinado arquivo, será feito isso:
		if(xml.readyState == 4 && xml.status == 404) {
			
			window.location = "../404/404_page.html"
		}

	}

	xml.send();
}









// XML to JSON:
// Transformar o xml em uma árvore de elementos
// let parser = new DOMParser();
// domFilmes = parser.parseFromString(xmlFilmes, 'text/xml');

// jsonFilmes = xmlToJson(domFilmes);