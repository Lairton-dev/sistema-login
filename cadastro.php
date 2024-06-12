<?php
// Inicia sessões
session_start();

// Conexão com a base de dados
include_once("./server/database.php");

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpa os dados dos campos de usuário, email e senha para evitar injeção de SQL
    $user = mysqli_real_escape_string($conn, $_POST["user"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Consulta para verificar se o usuário ou email já existe na tabela users
    $sql = "SELECT * FROM users WHERE Username = '$user' OR email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($result) > 0) {
        // Envia o usuário para a página de login com uma mensagem de alerta
        echo "<script>alert('Você já possui uma conta, faça login!'); window.location.href='index.php'; </script>";
    } else {
        // Hash da senha antes de armazená-la no banco de dados
        $senha_hash = password_hash($password, PASSWORD_DEFAULT);

        // Manipulação do upload do arquivo de avatar
        if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
            $avatar_tmp_name = $_FILES['avatar']['tmp_name'];
            $avatar_name = basename($_FILES['avatar']['name']);
            $upload_dir = 'uploads/avatars/';
            $avatar_path = $upload_dir . $avatar_name;

            // Movendo o arquivo para o diretório de upload
            if (move_uploaded_file($avatar_tmp_name, $avatar_path)) {
                // Inserção dos dados na tabela users
                $sql_insert = "INSERT INTO users (Username, email, senha, Avatar) VALUES ('$user','$email','$senha_hash', '$avatar_path')";
                if (mysqli_query($conn, $sql_insert)) {
                    // Novo usuário inserido com sucesso
                    echo "<script>alert('Usuário cadastrado com sucesso, faça login'); window.location.href='index.php'; </script>";
                } else {
                    // Erro ao inserir usuário
                    echo "<script>alert('Erro ao cadastrar usuário. Por favor, tente novamente mais tarde.');</script>";
                }
            } else {
                // Erro ao fazer upload do avatar
                echo "<script>alert('Erro ao fazer upload do avatar.');</script>";
            }
        } else {
            // Avatar não selecionado ou erro no upload
            echo "<script>alert('Por favor, selecione um avatar para fazer upload.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pages.css">
    <title>Cadastro</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="form_cadastro">
        <label for="user">Usuário</label>
        <input type="text" id="user" name="user" required placeholder="Insira seu nome de usuário">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Insira seu email">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required placeholder="Insira sua senha">
        <label for="avatar">Avatar</label>
        <input type="file" id="avatar" name="avatar" required>
        <button type="submit">Cadastre-se</button>
        <a href="index.php">Entrar</a>
    </form>
</body>
</html>
