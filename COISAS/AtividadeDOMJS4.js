function calcularMedia() {
    const nota1 = parseFloat(document.getElementById('nota1').value);
    const nota2 = parseFloat(document.getElementById('nota2').value);

    if (isNaN(nota1) || isNaN(nota2)) {
        document.getElementById('resultado').innerText = 'Por favor, insira ambas as notas.';
        document.getElementById('resultado').style.color = 'black';
        return;
    }

    const media = (nota1 + nota2) / 2;
    const resultado = document.getElementById('resultado');

    if (media >= 7) {
        resultado.innerText = `Aprovado com média: ${media.toFixed(2)}`;
        resultado.style.color = 'green';
    } else {
        resultado.innerText = `Reprovado com média: ${media.toFixed(2)}`;
        resultado.style.color = 'red';
    }
}
