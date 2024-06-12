<?php
// Configurações de conexão
$servername = "localhost"; // nome do servidor
$username = "root"; // nome de usuário do MySQL
$password = ""; // senha do MySQL
$database = "database"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} 

?>
