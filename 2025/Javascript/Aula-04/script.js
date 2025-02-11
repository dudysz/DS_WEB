

function alertaDeClique(){
    alert("Você clicou no botão!")
}

function calcular(){
    var numero1 = document.getElementById("numero1").value;
    var numero2 = document.getElementById("numero2").value;

    console.log(typeof numero1);
    var numero1 = Number.parseInt(numero1);
    var numero2 = Number.parseInt(numero2);
    console.log(typeof numero1);

    var resultado = numero1 + numero2


    document.getElementById("resultado").innerHTML = "resultado: " +resultado;
}