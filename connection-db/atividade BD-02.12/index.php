<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos e Clientes</title>
<body>
    <h1>Cadastro de Produtos e Clientes</h1>
    <div class="container">
        <form action="insertionProduto.php" method="POST">
            <h2>Cadastro de Produto</h2>
            <label for="nomeProduto">Nome:</label>
            <input type="text" id="nomeProduto" name="nome" required>
            <label for="valorProduto">Valor:</label>
            <input type="number" step="0.01" id="valorProduto" name="valor" required>
            <label for="estoqueProduto">Estoque:</label>
            <input type="number" id="estoqueProduto" name="estoque" required>
            <button type="submit">Cadastrar Produto</button>
        </form>
        <form action="insertionCliente.php" method="POST">
            <h2>Cadastro de Cliente</h2>
            <label for="nomeCliente">Nome:</label>
            <input type="text" id="nomeCliente" name="nome" required>
            <label for="emailCliente">E-mail:</label>
            <input type="email" id="emailCliente" name="email" required>
            <button type="submit">Cadastrar Cliente</button>
        </form>
    </div>

    <h2>Produtos Cadastrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Estoque</th>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'loja');
        $result = $conn->query("SELECT * FROM produto");
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['valor']}</td><td>{$row['estoque']}</td></tr>";
        }
        ?>
    </table>

    <h2>Clientes Cadastrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM cliente");
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['email']}</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
