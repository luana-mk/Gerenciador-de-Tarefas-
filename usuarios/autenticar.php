<?php
session_start();

include('../config/conexao.php'); #importar a conexao com o banco

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$resultado = mysqli_query($conexao, $sql); #executar o sql

if (mysqli_num_rows($resultado) > 0){
    $usuario = mysqli_fetch_assoc($resultado); #transforma resultado em array BIBLIOTECA

    if (password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome']; #cria sessao do usuario 

        header("Location: ../dashboard.php"); #redireciona para o dashboard
        exit;
  
    } else {

        echo "Senha incorreta.";

    }

} else {

    echo "Usuário não encontrado.";

}

?>