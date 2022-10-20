<!DOCTYPE html>
<html>
<head>
<title>ProgramaJão - Seu site para Hardware</title>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/parallax.css">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->

    <!-- OwlCarousel CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- OwlCarousel CDN -->


    <!-- CDN Font awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- CDN Font awesome -->
    
</head>


  <body class="cadastro">

    <!-- Inicio do cabeçalho -->
  <header>
    <!-- Início da navbar --> 

    <!-- Logo e título -->

    <nav class="navbar navbar-expand-lg navbar fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
       <img src="../imagens/cpu.png" width="30" height="30" class="d-inline-block align-top" alt="">
        ProgramaJão
      </a> 
      <!-- Fim -->

      <!-- Botão colapso -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <!-- Fim doBotão colapso -->

      <!-- Começo dos links clicaveis -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="sobre.php"><i class="fas fa-align-left about"></i>Sobre</a>
      </li>
      <!-- Começo da lista dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-buffer works"></i>
          Serviços
        </a>

        <!-- Começo menu dropdown -->
      <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="hardware.php"><i class="fas fa-microchip"></i>Hardware</a>
        <a class="dropdown-item" href="acessorios.php"><i class="fas fa-headphones"></i>Acessórios</a>
        <a class="dropdown-item" href="monte.php"><i class="fas fa-tools"></i>Monte seu PC</a>
      </div> 
        <!-- Fim menu dropdown -->

      <li class="nav-item">
        <a class="nav-link" href="entrar.php"><i class="fas fa-user-circle"></i>Entrar</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="cadastro.php"><i class="fas fa-sign-in-alt"></i>Cadastrar <span class="sr-only">(current)</span></a>
      </li>

      </li><!-- Fim da lista dropdown -->
    </ul>
    </div><!-- Fim dos links clicaveis -->
  </nav> <!-- Fim da navbar -->

  </header><!-- Fim do cabeçalho -->
    
    <div class="cadastrar-se">
      <form class="" action="cadastro.php" method="post">
        <h1>Cadastre-se</h1>
        <input type="text" placeholder="Nome completo" class="txtb" required="required">
        <input type="email" placeholder="Email" class="txtb" required="required">
        <input type="password" placeholder="Senha" class="txtb" required="required">
        <input type="submit" value="Criar conta" class="signup-btn">
        <a href="entrar.php">Ja possui uma conta?</a>        
      </form>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>


</html>