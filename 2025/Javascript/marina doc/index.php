<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <form action="insertion.php" method="POST" name="formulario" onsubmit="return validardadoscliente()">
                <label for="name" >Nome:</label>
                <input type="text" name="nome">
                <br>
                <label for="email" >Email:</label>
                <input type="text" name="email">
                <br>
                <input type="submit">
            </form>

        </div>


    <?php
        include 'conexao.php';

        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
        foreach($todos as $linha){
            $idCliente = $linha['id'];
            $nomeCliente = $linha['nome'];
            $emailCliente = $linha['email'];

            echo " id: ".$idCliente;
            echo '<br>';
            echo " nome: ".$nomeCliente;
            echo'<br>';
            echo " email: ".$emailCliente;
            echo'<br>';
            echo "<a href='uptade.php?id=$idCliente'>Editar Cliente</a>";
            echo "<br>";
            echo "<a href='delete.php?id=$idCliente'>Deletar Cliente</a>";
            echo "<br><br>";
        }

    ?>
    </div>
    <script src ="script.js"></script>
</body>
</html>