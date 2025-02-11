<?php
$conn = new mysqli('localhost', 'root', '', 'loja');

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO produto (nome, valor, estoque) VALUES ('$nome', $valor, $estoque)";
$conn->query($sql);

$conn->close();
header('Location: index.php');
?>
