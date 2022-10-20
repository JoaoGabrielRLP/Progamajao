<!DOCTYPE html>
<html lang="pt-br">
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

  
      
    <body class="monte">

<!-- Inicio do cabeçalho -->
  <header>
    <!-- Início da navbar --> 
<!-- Início da navbar --> 

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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-buffer works"></i>
          Serviços
        </a>

        <!-- Começo menu dropdown -->
      <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="hardware.php"><i class="fas fa-microchip"></i>Hardware</a>
        <a class="dropdown-item" href="acessorios.php"><i class="fas fa-headphones"></i>Acessórios</a>
        <a class="dropdown-item active" href="monte.php"><i class="fas fa-tools"></i>Monte seu PC<span class="sr-only">(current)</span></a>
      </div> 
        <!-- Fim menu dropdown -->

      <li class="nav-item">
        <a class="nav-link" href="entrar.php"><i class="fas fa-user-circle"></i>Entrar</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="cadastro.php"><i class="fas fa-sign-in-alt"></i>Cadastrar</a>
      </li>

      </li><!-- Fim da lista dropdown -->
    </ul>
    </div><!-- Fim dos links clicaveis -->
  </nav> <!-- Fim da navbar -->
  </header><!-- Fim do cabeçalho -->


   <div id="foto-monte">
      <div class="espaco-monte">
      <span class="titulo-monte"> Monte seu PC</span>
      </div>
    </div>

    <br>


  <div class="jumbotron bg bg-dark">
    
    <h1 class="display-4 text-primary">Componentes</h1>
      
      <br>

  <form>
    
  <div class="form-row form-group">
    
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
       <label for="exampleFormControlSelect1" class="text-primary">Processadores</label>
      <select class="form-control" id="exampleFormControlSelect1">
            <option id="Processadores">1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
    </div>

    <br>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <label for="exampleFormControlSelect1" class="text-primary">Memória Ram</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
      </select>
    </div>

     <br>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <label for="exampleFormControlSelect1" class="text-primary">Placa mãe</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
      </select>
    </div>

     <br>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <label for="exampleFormControlSelect1" class="text-primary">Fonte</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
      </select>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <label for="exampleFormControlSelect1" class="text-primary">Placa de vídeo</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
      </select>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <label for="exampleFormControlSelect1" class="text-primary">Cooler</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
      </select>
    </div>

    <div class="col">
      <label for="exampleFormControlSelect1" class="text-primary">Gabinete</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>

      </select>
    </div>
  </div>


</form>


       <button type="button" class="btn btn-primary">
       <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Comprar
      </button>
      
    
  </div>

        <br>

        <div class="jumbotron bg bg-dark">
    
    <h1 class="display-4 text-primary">Acessórios</h1>
      
      <br>

  <form>
    
  <div class="form-row form-group">
    
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
       <label for="exampleFormControlSelect1" class="text-primary">Teclados</label>
      <select class="form-control" id="exampleFormControlSelect1">
            <option id="Processadores">1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
    </div>

    <br>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <label for="exampleFormControlSelect1" class="text-primary">HeadSets</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
      </select>
    </div>

     <br>

    <div class="col">
      <label for="exampleFormControlSelect1" class="text-primary">Mouses</label>
       <select class="form-control" id="exampleFormControlSelect1">

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
      </select>
    </div>


  
  </div>
</form>

       <button type="button" class="btn btn-primary">
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
       Comprar
     </button>
      
    
  </div>

       
 
 <br>

  <!-- carousel --> 


 <div class="jumbotron">
    <h1 class="display-6">Calcule seu frete</h1>

    <form>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite seu cep">
  </div>
  <button type="button" class="btn btn-primary">
    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Calcular
  </button>
  
</form>
 </div>
   
 
<footer>
      <div class="footer-container">
        <div class="left-col">
           <img src="../imagens/cpu.png" width="30" height="30" class="d-inline-block align-top" alt="">
            ProgramaJão
           <div class="social-media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
           </div>
           <p class="rights-text">© 2020 Criado por ProgramaJão Todos os direitos reservados</p>
        </div>

        <div class="link-rodape">
                <h2>Aceitamos</h2>
                <div class="cartao">
                    <img src="../imagens/master-card.png" alt="Master-card">
                    <img src="../imagens/bitcoin.png" alt="bitcoin">
                    <img src="../imagens/amazon.png" alt="amazon">
                    <img src="../imagens/visa.png" alt="visa">
                </div>
            </div>

        <div class="right-col">
          <h1>Login para receber descontos!</h1>
          <div class="border"></div>
          <p>Entre com seu email</p>
            
            

         <form class="formulario-footer">
           <input class="txtb"type="email" name="email" placeholder="Digite seu email"
          required="required">
           <input class="btn btn-outline-dark" type="submit" name="btn" value="Logar">
         </form>
          <p>Não possui uma conta? <a href="cadastro.php">Clique aqui</a></p>
        </div>
      </div>
    </footer>












<!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>