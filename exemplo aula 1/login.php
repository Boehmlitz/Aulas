<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Login</title>
</head>
<body>
    <h1>Resultado do Login</h1>
    
    <?php
    // Nome de usuário e senha corretos (para simular)
    $usuario_correto = "admin";
    $senha_correta = "1234";

    // Verifica se o formulário foi enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dados do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verifica se o nome de usuário e a senha estão corretos
        if ($username == $usuario_correto && $password == $senha_correta) {
            echo "<p>Login bem-sucedido! Bem-vindo, $username.</p>";
        } else {
            echo "<p>Nome de usuário ou senha incorretos.</p>";
        }
    } else {
        echo "<p>Acesso inválido. Por favor, use o formulário de login.</p>";
    }
    ?>

    <br>
    <a href="index.php">Voltar ao formulário de login</a>
</body>
</html>
