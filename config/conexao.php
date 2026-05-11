<?php
$host = "localhost";
$usuario = "phpuser";
$senha = "123456";
$banco = "gerenciador_tarefas";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao){
    die("Erro na conexão: " . mysqli_connect_error());
}

?>