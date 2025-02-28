function verificarIdade() {
    var idade = document.getElementById("idade").value;
    var resultado = idade >= 18 ? "Você é maior de idade." : "Você é menor de idade.";
    document.getElementById("resultadoIdade").innerText = resultado;
}



function verNumero(){
    var numero = parseInt(document.getElementById("numero").value);
    var resultado = document.getElementById("resultadoNumero");

    if (numero > 0){
        resultado.innerHTML = "O número é positivo.";
    } else if (numero < 0){
        resultado.innerHTML = "O número é negativo.";
    } else {
        resultado.innerHTML = "O número é zero";
    }
}


function senha(){
    var senha = parseInt(document.getElementById("senha").value)
    var login = document.getElementById("usuario").value
    var mensagem = document.getElementById("mensagem")
    if ((senha != "12345") || (login != "admin")){
        mensagem.innerHTML =  "erro"
    }else{
        mensagem.innerHTML ="Boas Vindas"
    }

}

function calculo(){
    var num1 = parseFloat(document.getElementById("numero").value)
    var num2 = parseFloat(document.getElementById("numero2").value)
    var operação = document.getElementById("calculo").value
    var mensagem = document.getElementById("mensagem2")
    if (operação == "+"){
        mensagem.innerHTML = (num1 + num2)
    }else if(operação == "-"){
        mensagem.innerHTML = (num1 - num2)
    }else if(operação == "*"){
        mensagem.innerHTML = (num1 * num2)
    }else{
        mensagem.innerHTML = (num1 / num2)
    }
}


function calcular() {
    var numero = document.getElementById("numero").value;
    var valor = Number(numero); 

    if (valor % 2 === 0) { 
        document.getElementById("resultadoO").innerHTML = "O número " + valor + " é par.";
    } else {
        document.getElementById("resultadoO").innerHTML = "O número " + valor + " é ímpar.";
    }
}


function encontrarMaior() {
    var num1 = Number(prompt("Digite o primeiro número:"));
    var num2 = Number(prompt("Digite o segundo número:"));
    var num3 = Number(prompt("Digite o terceiro número:"));

    var maior;

    if (num1 >= num2 && num1 >= num3) {
        maior = num1;
    } else if (num2 >= num1 && num2 >= num3) {
        maior = num2;
    } else {
        maior = num3;
    }

    alert("O maior número é: " + maior);
}


function verificarTriangulo() {
    var lado1 = parseFloat(document.getElementById("lado1").value);
    var lado2 = parseFloat(document.getElementById("lado2").value);
    var lado3 = parseFloat(document.getElementById("lado3").value);

    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3)) {
        document.getElementById("resultado").innerText = "Por favor, insira valores numéricos válidos.";
        return;
    }

    if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
        if (lado1 === lado2 && lado2 === lado3) {
            document.getElementById("resultadoTriangulo").innerText = "O triângulo é Equilátero.";
        } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
            document.getElementById("resultadoTriangulo").innerText = "O triângulo é Isósceles.";
        } else {
            document.getElementById("resultadoTriangulo").innerText = "O triângulo é Escaleno.";
        }
    } else {
        document.getElementById("resultadoTriangulo").innerText = "Os valores inseridos não formam um triângulo válido.";
    }
}