<?php
$conn = new mysqli('localhost', 'root', '', 'loja');

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO cliente (nome, email) VALUES ('$nome', '$email')";
$conn->query($sql);

$conn->close();
header('Location: index.php');
?>
