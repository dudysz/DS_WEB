<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header('Location: index.php'); 
    exit();
}


$username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?php echo htmlspecialchars($username); ?>!</h1>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>

