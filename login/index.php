<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>
  <div class="login">
    <h2>Login de Acesso</h2>
     <!-- erro de login-->
     <?php
      if (isset($_GET['erro']) && $_GET['erro'] == 'senha') {
        echo '<p style="color:red;">Senha incorreta. Tente novamente.</p>';
      }
    ?>
    <!-- form -->
    <form action="autenticar.php" method="post" autocomplete="off">
      <div class="usuario">
        Usuário: <input type="text" name="usuario"><br>
      </div>

      <div class="usuario">
        Senha: <input type="password" name="senha"><br>  
      </div>
        <button type="submit">Entrar</button><br>
      
        <a href="">Cadastre-se</a>
      
    </form>

  </div>
</body>
</html>