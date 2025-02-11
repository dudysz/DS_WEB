window.document.write(window.document.URL);

var p1 = window.document.getElementsByTagName('p')[2];
document.getElementById("quarto-paragrafo").innerHTML = p1.innerText

document.getElementById("teste").innerHTML = "Hello World"; 

var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello World!";


document.querySelector("p#paragrafo").style.backgroundColor = "blue"

var paragrafo = document.querySelector("p").style;
paragrafo.backgroundColor = "red";
paragrafo.color = "white";