<?php
session_start();


if (isset($_SESSION['username']) || (isset($_COOKIE['username']) && isset($_COOKIE['email']) && isset($_COOKIE['password']))) {
    $_SESSION['username'] = $_COOKIE['username'] ? $_SESSION['username']
    header('Location: dashboard.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

  
    if ($username = 'Duda' && $email = 'duda@duda.com' && $password = '123') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "<p style='color:red'>Usuário ou senha inválidos!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h1>Login</h1>
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
            <label>Usuário:</label>
            <br>
            <input type="text" name="username" placeholder="digite seu nome" >
            <br><br>
            <label>E-mail:</label>
            <br>
            <input type="email" name="email" placeholder="digite seu email">
            <br><br>
            <label>Senha:</label>
            <br>
            <input type="password" name="password" placeholder="digite sua senha">
            <br><br>
            <button type="submit">Entrar</button>
    </form>
</body>
</html>