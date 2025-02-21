

document.addEventListener("DOMContentLoaded", function () {
    var box = document.getElementById("box");

    box.addEventListener("mouseover", function() {
        box.style.backgroundColor = "red";
        box.style.width = "350px";
        box.style.height = "350px";
    });

    box.addEventListener("mouseout", function() {
        box.style.backgroundColor = "rgb(180, 62, 248)";
        box.style.width = "300px";
        box.style.height = "300px";
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var campoTexto = document.getElementById("campoTexto");
    var resultado = document.getElementById("resultado");

    campoTexto.addEventListener("input", function() {
        resultado.innerText = campoTexto.value;
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var botao = document.getElementById("botaoClique");
    var contador = document.getElementById("contador");
    var cliques = 0;

    botao.addEventListener("click", function() {
        cliques++;
        contador.innerText = cliques;
    });
});



window.onload = function () {
    var div = document.createElement("div");
    div.innerText = "Bem-vindo!";
    div.style.cssText = "width: 250px; padding: 15px; margin: 20px auto; text-align: center; background: green; color: white; font-size: 18px; border-radius: 8px;";
    document.body.appendChild(div);
};