<?php
// 1. 
$frutas = ["Maçã", "Banana", "Laranja", "Abacaxi", "Uva"];
echo "<h3>1. Frutas no array:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Frutas</th></tr>";
foreach ($frutas as $fruta) {
    echo "<tr><td>$fruta</td></tr>";
}
echo "</table><br>";

// 2. 
$frutas[] = "Manga";
echo "<h3>2. Array atualizado:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Frutas</th></tr>";
foreach ($frutas as $fruta) {
    echo "<tr><td>$fruta</td></tr>";
}
echo "</table><br>";

// 3. 
sort($frutas);
echo "<h3>3. Array ordenado:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Frutas</th></tr>";
foreach ($frutas as $fruta) {
    echo "<tr><td>$fruta</td></tr>";
}
echo "</table><br>";

// 4.
$produto = [
    "nome" => "Teclado",
    "preco" => 120.50,
    "estoque" => 15
];
echo "<h3>4. Informações do produto:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Chave</th><th>Valor</th></tr>";
foreach ($produto as $chave => $valor) {
    echo "<tr><td>$chave</td><td>$valor</td></tr>";
}
echo "</table><br>";

// 5. 
$produto["preco"] = 140.00;
echo "<h3>5. Informações atualizadas do produto:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Chave</th><th>Valor</th></tr>";
foreach ($produto as $chave => $valor) {
    echo "<tr><td>$chave</td><td>$valor</td></tr>";
}
echo "</table><br>";

// 6. 
$unidades = 5;
$valor_total = $produto["preco"] * $unidades;
echo "<h3>6. Valor total pela venda de $unidades unidades:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Unidades</th><th>Valor Total</th></tr>";
echo "<tr><td>$unidades</td><td>R$ $valor_total</td></tr>";
echo "</table><br>";

// 7. 
$nomes_produtos = ["Teclado", "Mouse", "Monitor"];
$precos_produtos = [150.00, 80.00, 1200.00];
$produtos_associativos = array_combine($nomes_produtos, $precos_produtos);
echo "<h3>7. Produtos e seus preços:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Produto</th><th>Preço</th></tr>";
foreach ($produtos_associativos as $nome => $preco) {
    echo "<tr><td>$nome</td><td>R$ $preco</td></tr>";
}
echo "</table><br>";

// 8. 
$cores = ["vermelho", "azul", "verde", "amarelo", "preto"];
echo "<h3>8. Verificação da cor 'verde':</h3>";
echo in_array("verde", $cores) ? "<p>A cor 'verde' está presente no array.</p>" : "<p>A cor 'verde' não está presente no array.</p>";
echo "<br>";

// 9. 
$numeros = [10, 20, 30, 40, 50];
$soma = array_sum($numeros);
$media = $soma / count($numeros);
echo "<h3>9. Soma e média dos números:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Soma</th><th>Média</th></tr>";
echo "<tr><td>$soma</td><td>$media</td></tr>";
echo "</table><br>";
?>