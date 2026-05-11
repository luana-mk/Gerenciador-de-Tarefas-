<h2>Criar Tarefa</h2>

<form action="../tarefas/salvar_tarefa.php" method="POST">

    <label>Título:</label>
    <input type="text" name="titulo" required>
    <br><br>

    <label>Descrição:</label>
    <textarea name="descricao" required></textarea>
    <br><br>

    <button type="submit">Salvar</button>

</form>