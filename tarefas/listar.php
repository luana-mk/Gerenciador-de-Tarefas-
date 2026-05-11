<?php
include('config/conexao.php');

$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT * FROM tarefas WHERE usuario_id = $usuario_id";
$resultado = mysqli_query($conexao, $sql);
?>

<h2>Minhas Tarefas</h2>

<?php while ($tarefa = mysqli_fetch_assoc($resultado)) { ?>

    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <h3><?php echo $tarefa['titulo']; ?></h3>
        <p><?php echo $tarefa['descricao']; ?></p>
        <strong>Status:</strong> <?php echo $tarefa['status']; ?>
    </div>

<?php } ?>