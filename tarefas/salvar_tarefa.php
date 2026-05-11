<?php
session_start();
include('../config/conexao.php');

if (!isset($_SESSION['usuario_id'])) {
    die("Você precisa estar logado");
}

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$usuario_id = $_SESSION['usuario_id'];

$sql = "INSERT INTO tarefas (titulo, descricao, status, usuario_id)
VALUES ('$titulo', '$descricao', 'pendente', '$usuario_id')";

if (mysqli_query($conexao, $sql)) {
    header("Location: ../dashboard.php");
    exit;
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>