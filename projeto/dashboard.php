<?php

session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: /projeto/login.php"); #garante que apenas usuarios logados possam acessar o dashboard e as tarefas 
    exit; #(se nao existir usuario logado redirecionar para login)
}
?>

<h2>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h2>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Painel do Sistema</h1>

    <a href="../tarefas/adicionar.php">Adicionar tarefa</a>
    <a href="../tarefas/listar.php">Ver tarefas</a>

    <p>
        Usuario logado:
        <?php echo $_SESSION['usuario_nome']; ?>
    </p>

    <a href="logout.php">Sair</a>
</body>
</html>