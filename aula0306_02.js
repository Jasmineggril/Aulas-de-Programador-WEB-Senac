//SENAC - TAGUATINGA
// PROGRAMACAO WEB COM JS
// EXPLORANDO A LINGUAGEM
// CONHECIMENTO VARIAVEIS EM JS

let minhaIdade = 30; // number
let meuNome = "Jasmine De Sá Araujo" //string
let souEstudante = true //bolean
let valorNulo = null //null
let valorindefinido; // não vamos atribuir nenhum valor
let minhaDataDeNascimento = new Date (1998,8,25); // object

//ESTRUTURA DE CONTROLE: CONDICIONAIS
let idade_a = 18
if (idade_a >=18){
    console.log("Você pode votar");
}else if(idade_a == 17){
    console.log("Você pode votar no proximo ano");
}

let idade = 15;
if(idade=>18){
    console.log("Você pode votar"); 
}else if(idade == 17){
    console.log("Você pode votar no proximo ano");
}else{
    console.log("Você ainda não pode votar");
}
 
let dia = 2;
switch(dia){
    case 1:
        console.log("Segunda-Feira");
        break;
    case 2:
        console.log("Terça-Feira");
        break;
        default;
    console.log("Dia Invalido")
}

// ESTRUTURA DE CONTROLE: Loop

for( let d=0; i<5; d++){
    console.log(i);
} 

let j = 1;
while (i<5){
    console.log(j);
    j++;
}

let i = 0;
do{ 
    console.log(i);
    i++;
}while(i<5);

// CONVERSÃO DE TIPOS DE DADOS

let num = 10
let str = '20'
console.log(nom + str);// restaurar em '1020'concatenacao
str = Number(str);
console.log(nom + str);// resultara em 30(soma)

// OPERADORES

let a = 15;
let b = '5';
let c;
c=a+b;

c=a+b
console.log(c);// Resultara em 20

c= a-b;
console.log(c); // Resultara em 10

c= a*b; 
console.log(c): // Resultara em 

c= a/b;
console.log(c): // Resultara em

//Funcoes em JS
function nomeDaFuncao(param1, param2, param3){
    //codigo a ser executado
}

function saudacao(nome){
    console.log("Olá, " + nome + "!");
}

saudacao("Jasmine");

let cor = "Vermelho" // variavel global
function mostrarCor( ){
    console.log(cor);
}

function mostrarCarro(){
    let cor = "Ferrari" // variavel local
    console.log(cor);
}

mostrarCarro()// imprime"Ferrari"
console.log(carro);// erro carro is not difine

const numero = [1,2,3,4,5]
const quadrados = numeros, map(function(n)){
    return n*n;
}


console.log(quadrados); //imprime [1,4,9,16,25]
function cumprimentar (callback){
    console.log("Olá");
    callback();
    function dizer nome 
}