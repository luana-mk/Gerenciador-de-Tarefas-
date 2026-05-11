<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="usuarios/autenticar.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br></br>

        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br></br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>