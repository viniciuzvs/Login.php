<?php
session_start();

//verifica se esta logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="painel.css">
    <title>Painel</title>
</head>
<body>
    <div class="container">
      <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?></h2>
      <p>Você esta logado com sucesso.</p>
      <a href="logout.php">Sair</a>
    </div>
</body>
</html>

