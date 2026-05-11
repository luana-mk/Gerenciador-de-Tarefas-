<?php
include('../config/conexao.php');

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE tarefas SET status='$status' WHERE id=$id";

mysqli_query($conexao, $sql);

header("Location: ../dashboard.php");
exit;
?>