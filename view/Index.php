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
    
    <script href="js/script.js"></script>
  </head>
   
<body class="home">

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

      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
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

      <li class="nav-item">
        <a class="nav-link" href="cadastro.php"><i class="fas fa-sign-in-alt"></i>Cadastrar</a>
      </li>

      </li><!-- Fim da lista dropdown -->
    </ul>
    </div><!-- Fim dos links clicaveis -->
  </nav> <!-- Fim da navbar -->
  </header><!-- Fim do cabeçalho -->  

  <div id="foto">
      <div class="espaco-titulo">
      <span class="titulo"> Sua loja especializada em Hardware</span>
      </div>
  </div>
  
  <div id="ofertas">
    <h2 class="display-4">Confira as ofertas da semana!</h2>
    <p>Compre Qualquer peça abaixo e ganhe 15% de desconto na segunda peça</p>
  </div>

 
<!-- carousel -->

<div class="jumbotron bg bg-dark">
  <div class="cartoes-carousel">
   <div class="blogs owl-carousel">


<div class="card-deck">

  <div class="card">
    <img class="card-img-top" src="../imagens/fone.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fone HyperX Cloud</h5>
      <p class="card-text">R$ 275,00</p>

      <form>
      <label for="quantity">Escolha a quantidade (Entre 1 e 20):</label>
      <input type="number" id="quantity" name="quantity" min="1" max="20">
      </form>

      <button type="button" class="btn btn-outline-dark">Comprar</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="../imagens/fone1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">HeadSet Onikuma RGB</h5>
      <p class="card-text">R$ 125,00</p>
        
      <form>
      <label for="quantity">Escolha a quantidade (Entre 1 e 20):</label>
      <input type="number" id="quantity" name="quantity" min="1" max="20">
      </form>

      <button type="button" class="btn btn-outline-dark">Comprar</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="../imagens/fone3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">HeadSet Razer Electra v2</h5>
      <p class="card-text">R$ 289,00</p>

      <form>
      <label for="quantity">Escolha a quantidade (Entre 1 e 20):</label>
      <input type="number" id="quantity" name="quantity" min="1" max="20">
      </form>

      <button type="button" class="btn btn-outline-dark">Comprar</button>
    </div>
  </div>

</div>

<div class="card-deck">

  <div class="card">
    <img class="card-img-top" src="../imagens/teclado2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Razer BlackWidow Ultimate Stealth</h5>
      <p class="card-text">R$ 329,00</p>

      <form>
      <label for="quantity">Escolha a quantidade (Entre 1 e 20):</label>
      <input type="number" id="quantity" name="quantity" min="1" max="20">
      </form>

      <button type="button" class="btn btn-outline-dark">Comprar</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="../imagens/teclado1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Red Dragon Kumara RGB</h5>
      <p class="card-text">R$ 170,00</p>

      <form>
      <label for="quantity">Escolha a quantidade (Entre 1 e 20):</label>
      <input type="number" id="quantity" name="quantity" min="1" max="20">
      </form>

      <button type="button" class="btn btn-outline-dark">Comprar</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="../imagens/teclado2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Teclado Gamer rgb</h5>
      <p class="card-text">R$ 109,90</p>

      <form>
      <label for="quantity">Escolha a quantidade (Entre 1 e 20):</label>
      <input type="number" id="quantity" name="quantity" min="1" max="20">
      </form>

      <button type="button" class="btn btn-outline-dark">Comprar</button>
    </div>
  </div>
  
</div>
      
    </div> 
    </div>

    </div>

 <section class="about_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about_img-container">
              <img src="../imagens/pc-gamer.jpg" alt="" id="pc-gamer">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_detail-box">
              <h3 class="display-4 text-primary">
                Monte seu PC aqui
              </h3>
              <p>
               Só aqui na ProgramaJão você ganha descontos e ofertas a todo momento.
              </p>
              <div class="">
                <a href="hardware.php" class="btn bg-dark">
                  Confira!
                </a>
              </div>

              <br>

              <p>
                Cadastre-se para receber descontos nas próximas compras
              </p>
              <div class="">
                <a href="monte.php" class="btn bg-dark">
                  Confira!
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



   
 
 <br>

 <!-- carousel --> 
   
 <!-- Estilização do javascript para carousel -->
    <script type="text/javascript">
      $(".owl-carousel").owlCarousel({
        items: 1,
        margin: 20,
        loop: true,
        center: true,
        dots:true,
      });


      
    </script>
  <!-- Estilização do javascript para carousel --> 

<br>

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
          <p>Não possui uma conta? <a href="entrar.php">Clique aqui</a></p>
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