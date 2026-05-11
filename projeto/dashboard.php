<? 

session_start();

$_SESSION['usuario'] = "Luana";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Painel do Sistema</h1>

    <p>
        Usuario logado:
        <?php echo $_SESSION['usuario']; ?>
    </p>

    <a href="logout.php">
        Sair
    </a>
</body>
</html>