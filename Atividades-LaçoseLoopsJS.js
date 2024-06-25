function validarNota() {
    const nota = parseFloat(document.getElementById("nota").value);
    const mensagemNota = document.getElementById("mensagemNota");

    if (isNaN(nota) || nota < 0 || nota > 10) {
        mensagemNota.innerHTML = "<p>Por favor, digite uma nota válida entre 0 e 10.</p>";
    } else {
        mensagemNota.innerHTML = "<p>Nota válida: " + nota + "</p>";
    }
}


function validarUsuarioSenha() {
    const usuario = document.getElementById("usuario").value;
    const senha = document.getElementById("senha").value;
    const mensagemUsuarioSenha = document.getElementById("mensagemUsuarioSenha");

    if (senha === usuario) {
        mensagemUsuarioSenha.innerHTML = "<p>Erro: A senha não pode ser igual ao nome de usuário.</p>";
    } else {
        mensagemUsuarioSenha.innerHTML = "<p>Usuário e senha válidos.</p>";
    }
}


function verificarParOuImpar() {
    const numero = parseInt(document.getElementById("numero").value);
    const mensagemParImpar = document.getElementById("mensagemParImpar");

    if (isNaN(numero)) {
        mensagemParImpar.innerHTML = "<p>Por favor, digite um número válido.</p>";
    } else if (numero % 2 === 0) {
        mensagemParImpar.innerHTML = "<p>O número " + numero + " é par.</p>";
    } else {
        mensagemParImpar.innerHTML = "<p>O número " + numero + " é ímpar.</p>";
    }
}
