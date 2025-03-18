<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo"<script>alert('Esta faltando o medodo POST')
        window.locotion.href = 'index.php' ;
        </script>";

        
    }

   $nome = $_POST['nome'];
   $email = $_POST['email'];
    
    include_once('conexao.php');

    echo "<h2>inserindo dados<h2>";
    $statement = $db ->prepare("INSERT INTO clientes (nome, email) VALUE (?, ?)");
    $statement->execute(array($nome, $email));

    header ("Location: index.php");
?>