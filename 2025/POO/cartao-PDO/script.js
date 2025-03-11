function calcular() {
    const divNome = document.getElementById('nome').value;
    const divDesc = document.getElementById('descricao').value;

    if (!divNome || !divDesc) {
        alert("Preencha todos os campos!");
        return;
    }

    const novaDiv = document.createElement("div");
    novaDiv.style.marginBottom = "10px";
    novaDiv.style.padding = "10px";
    novaDiv.style.border = "1px solid #333";
    novaDiv.style.backgroundColor = "#f0f0f0";
    novaDiv.style.display = "flex";
    novaDiv.style.alignItems = "center";
    novaDiv.style.justifyContent = "space-between";

    const paragrafo = document.createElement("p");
    paragrafo.textContent = `${divNome} - Descrição: ${divDesc}`;
    paragrafo.style.margin = "0";
    paragrafo.style.fontSize = "20px";
    paragrafo.style.color = "#333";

    const deletar = document.createElement("button");
    deletar.textContent = "Deletar";
    deletar.style.marginLeft = "10px";
    deletar.style.padding = "5px 10px";
    deletar.style.border = "none";
    deletar.style.cursor = "pointer";
    deletar.style.backgroundColor = "#ff6666";
    deletar.style.color = "white";
    
    deletar.onmouseover = function() {
        deletar.style.backgroundColor = "#ff4d4d";
    };
    deletar.onmouseout = function() {
        deletar.style.backgroundColor = "#ff6666";
    };
    
    deletar.onclick = function() {
        novaDiv.remove();
    };

    novaDiv.appendChild(paragrafo);
    novaDiv.appendChild(deletar);

    const areaCartao = document.getElementById("cartao");
    areaCartao.appendChild(novaDiv);
}


document.body.style.backgroundColor = "#282c36";
document.body.style.color = "#dcdcdc";
document.body.style.padding = "20px";
document.body.style.display = "flex";
document.body.style.flexDirection = "column";

document.addEventListener("DOMContentLoaded", function() {
    const botaoPrincipal = document.getElementById("botaoPrincipal");
    if (botaoPrincipal) {
        botaoPrincipal.style.backgroundColor = "#4CAF50";
        botaoPrincipal.style.color = "white";
        botaoPrincipal.onmouseover = function() {
            botaoPrincipal.style.backgroundColor = "#45a049";
        };
        botaoPrincipal.onmouseout = function() {
            botaoPrincipal.style.backgroundColor = "#4CAF50";
        };
    }
});
