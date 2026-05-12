<?php
session_start(); #inicia sessao atual

Session_destroy(); #apaga todos os dados da sessao 

header("Location: login.php"); #redireciona para login
exit;
?>