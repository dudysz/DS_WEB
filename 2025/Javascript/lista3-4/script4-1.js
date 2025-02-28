function verIdade() {
    var idade = parseInt(document.getElementById("numero").value); 
    var resultado = document.getElementById("resultado");

    if (idade >= 18) {
        resultado.innerHTML = "Você é de maior.";
    } else { 
        resultado.innerHTML = "Você é de menor.";
    }
}

function verNumero(){
    var numero = parseInt(document.getElementById("numero").value);
    var resultado = document.getElementById("resultado");

    if (numero > 0){
        resultado.innerHTML = "O número é positivo.";
    } else if (numero < 0){
        resultado.innerHTML = "O número é negativo.";
    } else {
        resultado.innerHTML = "O número é zero";
    }
}