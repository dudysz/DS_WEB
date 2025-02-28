function sauldar(){
    var mensagem = document.getElementById("nome").value;
    document.getElementById("mensagem").innerHTML = "seja bem-vindo" + " " + mensagem;
}


function calcular(){
    var valor = document.getElementById("numero").value;
    var numero = parseInt(valor);

    var resultado = numero % 2 === 0 ? "Par" : "Impar";
    document.getElementById("resultado").innerHTML = numero + " é " + resultado; 
}

function changeColor() {
    const colors = ["red", "green", "blue", "yellow", "purple", "orange", "pink"];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById("colorBox").style.backgroundColor = randomColor;
}


function ConverterparaMaiusculas(){
    var texto = window.document.getElementById("transformacao").value;
    var resultado = palavra.toUpperCase();
    document.getElementById("trans").innerText = resultado;
}


function calcularAcrescimo() {
    var valor = parseFloat(document.getElementById("valor").value);
    var porcentagem = parseFloat(document.getElementById("porcentagem").value);

    if (isNaN(valor) || isNaN(porcentagem)) {
        document.getElementById("resultado").innerText = "Por favor, insira valores numéricos válidos.";
        return;
    }

    var resultado = adicionarPorcentagem(valor, porcentagem);
    document.getElementById("resultado").innerText = "O valor final é: " + resultado.toFixed(2);
}

function adicionarPorcentagem(valor, porcentagem) {
    return valor + (valor * (porcentagem / 100));
}