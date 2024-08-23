<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <h1>Login</h1>
    
    <form action="login.php" method="POST">
        <label for="username">Nome de Usuário:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
