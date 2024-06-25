function gerarTabuada() {
    const numero = parseInt(document.getElementById("numero").value);
    const resultado = document.getElementById("resultado");
    resultado.innerHTML = ""; 

    if (isNaN(numero) || numero < 1 || numero > 10) {
        resultado.innerHTML = "<p>Por favor, digite um número entre 1 e 10.</p>";
        return;
    }

    let tabuada = `<h2>Tabuada de ${numero}</h2>`;
    for (let i = 1; i <= 10; i++) {
        tabuada += `<p>${numero} X ${i} = ${numero * i}</p>`;
    }

    resultado.innerHTML = tabuada;
}
