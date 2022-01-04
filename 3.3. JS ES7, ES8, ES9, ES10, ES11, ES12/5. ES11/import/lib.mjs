export const greetingMessage = () => {

	let atualDate = new Date().toLocaleDateString();

	return `Olá, seja muito bem vindo, data de hoje: ${atualDate}`
}

export function getAddressByCEP(cep) {

	return fetch(`https://viacep.com.br/ws/${cep}/json/`)
		.then(response => response.json())
}