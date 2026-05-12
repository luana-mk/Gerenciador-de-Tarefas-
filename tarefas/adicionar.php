<?php
include('../config/conexao.php');

$usuarios = mysqli_query($conexao, "SELECT id, nome FROM usuarios");
?>


<h2>Criar Tarefa</h2>

<form action="../tarefas/salvar_tarefa.php" method="POST">

    <label>Título:</label>
    <input type="text" name="titulo" required>
    <br><br>

    <label>Descrição:</label>
    <textarea name="descricao" required></textarea>
    <br><br>

    <label>Data Limite:</label>
    <input type="date" name="data_limite">
    <br><br>

    <label>Responsável:</label>

    <select name="usuario_id">

        <?php while($usuario = mysqli_fetch_assoc($usuarios)) { ?>
            <option value="<?php echo $usuario['id']; ?>">

                <?php echo $usuario['nome']; ?> 

            </option>

        <?php } #nesse while ele vai percorrer o banco enquanto tiver usuarios cadastrados e mostra-los como <option ?>  
        

    </select>

    <br><br>

    <button type="submit">Salvar</button>

</form>