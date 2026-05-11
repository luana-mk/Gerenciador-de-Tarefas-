<?php

session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Painel do Sistema</h1>
    <a href="tarefas/alterar_status.php?id=1&status=concluida">Concluir</a>

    <p>
        Usuario logado:
        <?php echo $_SESSION['usuario']; ?>
    </p>

    <a href="logout.php">Sair</a>
</body>
</html>