<?php
session_start();
include('../config/conexao.php');

if (!isset($_SESSION['usuario_id'])) {
    die("Você precisa estar logado"); #verifica se usuario esta logado (DIE encerra o php)
}

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_limite = $_POST['data_limite'];
$usuario_id = $_POST['usuario_id'];
$criado_por = $_SESSION['usuario_id'];

#POST serve para receber dados enviados pelo form // SESSION serve para guardar as infos enquanto o usuario estiver logado

$sql = "INSERT INTO tarefas (titulo, descricao, status, usuario_id, data_limite, criado_por)
VALUES ('$titulo', '$descricao', 'pendente', '$usuario_id', '$data_limite', '$criado_por')"; #criar as tarefas no banco

if (mysqli_query($conexao, $sql)) {
    header("Location: ../projeto/dashboard.php");
    exit;
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>