function calcular(tipo, valor) {
    
    if(tipo === 'acao') {
        if(valor === 'c') {
            document.getElementById('resultado').value = ''
        }

        if(valor === '+' || valor === '-' || valor === '*' || valor === '/' || valor === '.') {
            document.getElementById('resultado').value += valor
        
        }

        if(valor === '=') {
            var valor_campo = eval(document.getElementById('resultado').value)

            document.getElementById('resultado').value = valor_campo
            
        }

    } else if (tipo === 'valor') {
        document.getElementById('resultado').value += valor

    }
}

/*
    Calculadora - A partir do evento onclick recebe uma função passando dois parametros a dois respectivos valores: tipo e valor
    se o tipo for de ação e for o de resetar tudo existente no visor o seguinte código será executado:

        if(valor === 'c') {
            document.getElementById('resultado').value = ''

    Se o tipo for de ação e for de alguma operação será executado o seguinte código:

        if(valor === '+' || valor === '-' || valor === '*' || valor === '/' || valor === '.') {
            document.getElementById('resultado').value += valor

    Se o tipo for de ação e for para realizar o calculo e para exibir no visor da calculadora será realizado o seguinte o código:
        
        if(valor === '=') {
            var valor_campo = eval(document.getElementById('resultado').value)

            document.getElementById('resultado').value = valor_campo
    
    Caso o tipo for de valor (1,2,3,4...) será executado o seguinte código:

        else if (tipo === 'valor') {
        document.getElementById('resultado').value += valor
*/
