function verificarVelocidade() {
    const velocidade = parseFloat(document.getElementById('velocidade').value);
    const resultado = document.getElementById('resultado');

    if (isNaN(velocidade)) {
        resultado.innerText = 'Por favor, insira uma velocidade válida.';
        resultado.style.color = 'black';
        return;
    }

    if (velocidade === 60) {
        resultado.innerText = 'CONTINUE';
        resultado.style.color = 'green';
    } else if (velocidade === 80) {
        resultado.innerText = 'ATENÇÃO';
        resultado.style.color = 'yellow';
    } else if (velocidade > 80) {
        resultado.innerText = 'MULTADO';
        resultado.style.color = 'red';
    } else {
        resultado.innerText = 'DENTRO DO LIMITE';
        resultado.style.color = 'black';
    }
}
