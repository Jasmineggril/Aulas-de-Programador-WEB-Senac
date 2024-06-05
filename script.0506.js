// Conhencendo o JavaScript

// funcoes basica

function saudacao(nome){
    return "Olá," + nome + "!";
}

// funcão com multiplos paramtros

function soma (num1, num2){
    return  num1 + num2;
}

// Funções com estrutura condicional

function contagemRegressiva(num){
    if(num %2 === 0){
        return "par"
    }else{
        return "impar"
    }
}

// Funções com estrutura repetition

function contagemRegressiva(num){
    for(let i = num; i>=0; i++){
        console.log(i);
    
    }
}   

//Criando e maniopulando objeto
let carro = {
    marca: "Nissan",
    modelo: "Versa",
    ano: 2023,
    ligar: function(){
        console.log("O carro está ligado");
    }
}

// acessando as propriedade objeto

console.log(carro.marca); // Saida.Nissan
console.log(carro['modelo']); //Saida.Verso

//manipulando objetos

carro.cor = "Azul";

console.log(carro.cor); 
carro.ano = 2023;
console.log (carro.ano);
delete carro.cor;
console.log(carro.cor);

// Criando e manipulando arrays
let números =[1,2,3,4,5];
let nome = ["Maria", "João","Paulo", "Jose"]
let  misto = [1,"Paulo", true, [1,2],{nome: "João" , idade: 30}]

// acessando valores em arrays
let fruta = ["Banana", "Maca", "Pera", "Cereja"]

console.log(frutas[0]);

console.log(frutas[1]);

// alterando valores em arrays
let frutas = ["Banana", "Maca", "Pera", "Cereja"]
frutas[2] = "Mamão"
console.log(frutas);

// metodos comuns de arrys
// push(): adiciona um novo elemento no final do array
// pop():remove o ultimo elemento do array
//shift(): remove o ultimo elemento no final do array
//unshift(): adiciona novo elemento no icinio doi array
// splice(): adicine ou remove elemento de um array em uma posicao especifica
//slice (): cria um novo array com base em parte do array antigo
//join(): une todos os elmentos do array em uma unica string

let frutas = ["Banana", "Maca", "Pera", "Cereja"]
frutas.push("Uva")
console.log(frutas);

frutas.pop();   
console.log(frutas);

frutas.shift();
console.log(frutas);

frutas.unshift("Manga")
console.log(frutas);

frutas.splice(1,0, "Kiwi")
console.log(frutas);

let frutasTropicais = frutas.slice(0.2);
console.log(frutasTropicais);

let frutas = ["Banana", "Maca", "Pera", "Cereja"]
frutas.forEach(function(fruta)){
    console.log(fruta);
}

let numeros = [1,2,3,4,5]
let quadrados = numeros.map(function(numeros){
return numeros * numeros =
});
console.log(quadrados);

// Document Object Model

// document.getElementByTagName(nome) document. querySelector (seletor) document.querySelectorAll (seletor)

let heading = document.getElementById( 'main');
heading.textContent='<p> Este é um novo parágrafo';

let div = document.getElementById('main');
div.style.color = 'blue';
