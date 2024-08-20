
document.addEventListener('DOMContentLoaded', (event) => {
    const buttons = document.querySelectorAll('button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('clicked');
        });
    });
});

function calcularMedia() {

    const nacional = document.getElementById('nacional').value;
    const internacional = document.getElementById('internacional').value;

    document.getElementById('resultado').innerText = `Resultados para: ${nacional} e ${internacional}`;
}
