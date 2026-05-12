<?php
include('../config/conexao.php');

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];

$sql = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao',  
status='$status' WHERE id=$id";

mysqli_query($conexao, $sql);

header("Location: listar.php");
exit;
?>