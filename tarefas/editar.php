<?php
include('../config/conexao.php');

$id = $_GET['id'];

// buscar tarefa no banco
$sql = "SELECT * FROM tarefas WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$tarefa = mysqli_fetch_assoc($resultado); #seleciona o id da tarefa e o mysqli_fetch_assoc transforma ela em array

?>


<form action="atualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">

    <input type="text" name="titulo" value="<?php echo $tarefa['titulo']; ?>">

    <textarea name="descricao"><?php echo $tarefa['descricao']; ?></textarea>

    <select name="status">
        <option value="pendente" <?php if($tarefa['status']=="pendente") echo "selected"; ?>>Pendente</option>
        <option value="concluido" <?php if($tarefa['status']=="concluido") echo "selected"; ?>>Concluído</option>
    </select>

    <button type="submit">Salvar</button>

</form>