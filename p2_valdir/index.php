
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>




<nav class="navbar navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Nexus Logo">
    </a>
  </div>
</nav>

<div class="container">

  <div class="login-container">
  <?php

   require_once 'conexoesphp/conexao.php';

                if(isset($_GET['status'])){
                    $status = $_GET['status'];
                    if ($status == "ok"){
                        echo "<p 
                        style='
                         background-color:#0d6daa;
                         color:white; 
                         text-align:center;
                         padding:10px; 
                         font-weight:500;
                          '>Cadastrado com Sucesso,faça seu login !</p>";
                    }
                }
            ?>
      <h3 class="text-center">Login</h3>
      <p class="text-center">Não tem uma conta? <a href="cadastro.php" class="text-primary">Cadastre-se aqui</a></p>
      <form action="pagina_inicial.php" method="POST">
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required>
          </div>
          <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
          </div>
          <button type="submit" class="btn btn-primary" id="entrar" name="entrar">Entrar</button>
          <p class="form-text">
              <a href="esquecer_senha.html" class="text-secondary">Esqueceu sua senha?</a>
          </p>
      </form>
  </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    
</script>
</body>
</html>