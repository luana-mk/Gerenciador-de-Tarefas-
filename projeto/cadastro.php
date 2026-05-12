<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h2>Criar conta</h2>

<form action="/usuarios/cadastrar_usuario.php" method="POST">

    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Senha:</label>
    <input type="password" name="senha" required>
    <br><br>

    <button type="submit">Cadastrar</button>

</form>

<a href="login.php">Já tenho conta</a>

</body>
</html>