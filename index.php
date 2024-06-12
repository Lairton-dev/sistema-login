<?php
//inicia sessão
session_start();
// conexão com a base de dados ./server/database.php
include_once("./server/database.php");

// Verifica se o formulário do login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpa os dados dos campos de e-mail e senha para evitar injeção de SQL
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Consulta para verificar se o usuário existe na tabela users
    $sql = "SELECT * FROM users WHERE email = '$email'";
    // $conn é a variavel de conexão com o banco de dados no arquivo database.php
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta retornou algum resultado
    if ($result && mysqli_num_rows($result) > 0) {
        // criar um array com todos linhas da tabela users do banco de dados, ["ID", "Username", "email", "senha", "Avatar", "created_at"]
        $row = mysqli_fetch_assoc($result);
        $senha_hash = $row['senha'];

        // Verifica se a senha inserida pelo usuário corresponde à senha hashada no banco de dados
        if (password_verify($password, $senha_hash)) {
            // Senha correta, redireciona para a página inicial e cria sessões.
            $_SESSION['user_id'] = $row['ID'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['Username'];
            $_SESSION['user_avatar'] = $row["Avatar"];
            $_SESSION["data_create"] = $row["created_at"];
            header("Location: home.php");
            exit(); // Importante para evitar que o script continue sendo executado após o redirecionamento
        } else {
            // Senha incorreta, redireciona de volta à página de login com uma mensagem de erro
            header("Location: index.php?error=1");
            exit();
        }
    } else {
        // Usuário não encontrado, redireciona para a tela de cadastro
        header("Location: cadastro.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pages.css">
    <title>Entrar</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form_login">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Ensira seu email">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required placeholder="Ensira sua senha">
        <?php 
        if(isset($_GET["error"])) {
            echo "<span>Senha incorreta, tente novamente!</span>";
        }
        ?>
        <button type="submit">Entrar</button>
        <a href="cadastro.php">Cadastre-se</a>
    </form>
</body>
</html>
