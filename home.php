<?php
// inicia sessão
session_start();

// Verifica se o usuário está logado, caso contrário redireciona para a página de login
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
// informações da sessão
$user_id = $_SESSION['user_id'];
$email =  $_SESSION['user_email'];
$username =  $_SESSION['user_name'];
$avatar = $_SESSION["user_avatar"];
$create = $_SESSION["data_create"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
  
    
</body>
</html>