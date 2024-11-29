<?php
session_start();

// Remove a sessão
session_unset();
session_destroy();

// Remove o cookie
setcookie('username', '', time() - 3600, "/");

// Redireciona para a página de login
header('Location: index.php');
exit();
?>

