<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

    <h2>Cadastro de Usuário</h2>

    <form action="usuarios/cadastrar_usuario.php" method="POST">

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

</body>
</html>

<?php
include('../config/conexao.php'); #IMPORTAR A CONEXAO COM O BANCO

$nome = $_POST['nome'];
$email = $_POST['email']; # pega os dados digitados pelo usuario e guarda na variavel com o metodo POST

$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); #criptografar a senha

$sql = "INSERT INTO usuarios (nome, email, senha) #insira os dados na tabela USUARIO
VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conexao);
} #testar a conexao

?>