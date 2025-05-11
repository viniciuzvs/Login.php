<?php

$usuario_correto = "administrador";
$senha_correta = "12345";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === $usuario_correto && $senha === $senha_correta) {
    // inicia a sessão e redireciona
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $usuario;
    
    header("Location: painel.php");
    exit;
} else{
    header("Location: index.php?erro=senha");
}
?>