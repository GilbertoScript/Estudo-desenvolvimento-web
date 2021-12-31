function getFilmes() {
	let xml = new XMLHttpRequest();

	xml.open('GET', 'http://localhost/ajax/filmes/filmes.xml');

	xml.onreadystatechange = () => {

		// Sucesso no estado da requisição e no status da resposta:
		if(xml.readyState == 4 && xml.status == 200) {

			let xmlFilmes = xml.responseText;

			// Transformar o xml em uma árvore de elementos
			let parser = new DOMParser();
			domFilmes = parser.parseFromString(xmlFilmes, 'text/xml');

			jsonFilmes = xmlToJson(domFilmes);

			// Utilizando um for in, para percorrer o jsonFilmes:
			for(let i in jsonFilmes['filmes']['filme']) {

				let item = jsonFilmes['filmes']['filme'][i];

				// Inserção na página os elementos dinâmicos
				let divRow = document.createElement('div')
				divRow.className = "row"

				let divCol = document.createElement('div')
				divCol.className = "col"

				// Lógica para recuperar os genêros do filme:
				let genero = '';
				for(let g in item.genero) {

					if(genero) genero += ', ';
					genero += item.genero[g]['#text'];
				}

				// Lógica para recuperar o elenco do filme:
				let elenco = '';
				for(let e in item.elenco.ator) {

					if(elenco) elenco += ', ';
					elenco += item.elenco.ator[e]['#text'];
				}

				divRow.appendChild(divCol);
				divCol.innerHTML = `
					<p><strong>Título: </strong>${item['titulo']['#text']}</p>
					<p><strong>Resumo: </strong>${item['resumo']['#text']}</p>
					<p><strong>Genêro: </strong>${genero}</p>
					<p><strong>Elenco: </strong>${elenco}</p>
					<p>
						<strong>
							Data de lançamento: 
						</strong>
						${item['dataLancamento']['#text']} ( ${item['dataLancamento']['@attributes']['pais']} )
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