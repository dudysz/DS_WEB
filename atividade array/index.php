<?php

$frutas = ["Maçã", "Banana", "Laranja", "Abacaxi", "Uva"];
echo "Frutas no array:\n";
foreach ($frutas as $fruta) {
    echo "- $fruta\n";
}

echo "\n";


$frutas[] = "Manga";
echo "Array atualizado:\n";
print_r($frutas);

echo "\n";


sort($frutas);
echo "Array ordenado em ordem alfabética:\n";
print_r($frutas);

echo "\n";


$produto = [
    "nome" => "Teclado",
    "preco" => 120.50,
    "estoque" => 15
];

echo "Informações do produto:\n";
foreach ($produto as $chave => $valor) {
    echo "- $chave: $valor\n";
}

echo "\n";


$produto["preco"] = 140.00;

echo "Informações atualizadas do produto:\n";
foreach ($produto as $chave => $valor) {
    echo "- $chave: $valor\n";
}

echo "\n";


$unidades = 5;
$valor_total = $produto["preco"] * $unidades;
echo "Valor total pela venda de $unidades unidades: R$ $valor_total\n";

echo "\n";


$nomes_produtos = ["Teclado", "Mouse", "Monitor"];
$precos_produtos = [150.00, 80.00, 1200.00];
$produtos_associativos = array_combine($nomes_produtos, $precos_produtos);

echo "Produtos combinados com preços:\n";
print_r($produtos_associativos);

echo "\n";


$cores = ["vermelho", "azul", "verde", "amarelo", "preto"];
if (in_array("verde", $cores)) {
    echo "A cor 'verde' está presente no array.\n";
} else {
    echo "A cor 'verde' não está presente no array.\n";
}

echo "\n";


$numeros = [10, 20, 30, 40, 50];

$soma = array_sum($numeros);
$media = $soma / count($numeros);
echo "Soma dos números: $soma\n";
echo "Média dos números: $media\n";
?>
