const input = document.getElementById('meuInput');
const botao = document.getElementById('meuBotao');
const div = document.getElementById('minhaDiv');

function gerarCorAleatoria() {
    const letras = '0123456789ABCDEF';
    let cor = '#';
    for (let i = 0; i < 6; i++) {
        cor += letras[Math.floor(Math.random() * 16)];
    }
    return cor;
}

botao.addEventListener('click', function() {
    
    const texto = input.value;

    
    if (texto.trim() !== "") {
        
        div.textContent = texto;
       
        div.style.backgroundColor = gerarCorAleatoria();
        
        input.value = '';
    } else {
        
        div.textContent = 'Por favor, digite algo no campo de texto.';
        div.style.backgroundColor = 'lightcoral';
    }
});
