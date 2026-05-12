<?php
session_start();
include('../config/conexao.php');

if (!isset($_SESSION['usuario_id'])) {
    die("Você precisa estar logado"); #protecao
}

$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT * FROM tarefas WHERE usuario_id = $usuario_id";
$resultado = mysqli_query($conexao, $sql);
?>

<h2>Minhas Tarefas</h2>

<?php while ($tarefa = mysqli_fetch_assoc($resultado)) { ?>

    <div style="border:1px solid #b52c2cff; margin:10px; padding:10px;">
        <h3><?php echo $tarefa['titulo']; ?></h3>
        <p><?php echo $tarefa['descricao']; ?></p>
        <strong>Status:</strong> <?php echo $tarefa['status']; ?>

        <br><br>

        <!-- EDITAR e EXCLUIR -->
        <a href="editar.php?id=<?php echo $tarefa['id']; ?>">Editar</a>
        <a href="excluir.php?id=<?php echo $tarefa['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
        
    </div>

<?php } ?>