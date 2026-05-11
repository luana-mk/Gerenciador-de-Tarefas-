
<?php
include('../config/conexao.php'); #IMPORTAR A CONEXAO COM O BANCO

if (!isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    die("Erro: dados não recebidos no formulario");
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']); #evita quebra de sql garante seguranca
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); #criptografar a senha

$sql = "INSERT INTO usuarios (nome, email, senha)
VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    header("Location: ../login.php");
    exit;
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>