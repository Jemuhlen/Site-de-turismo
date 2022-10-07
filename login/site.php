<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   <title>Turismo em Rolante</title>
 </head>
 <body>
  <header> 
    <div id="start">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand">Turismo em Rolante</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mapa">Mapa</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pontos turísticos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#chuvisqueiro">Chuvisqueiro</a></li>
                  <li><a class="dropdown-item" href="#cascata">Cascata </a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#rio">Rio</a></li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sugestao">Dê sua sugestão</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
              </li>
            </ul>
          </div>
      </nav>
  </header>

  <main>      
      <div class="container-fluid"> 
        <div  id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </main>

  <div class="mapa" id="mapa">
    <h1>MAPA</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27739.983987175332!2d-50.5644716!3d-29.64732015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9518e46f16da5dd1%3A0xe4d314d8d2f62c23!2sRolante%2C%20RS%2C%2095690-000!5e0!3m2!1spt-BR!2sbr!4v1665065615867!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="container-fluid" id="pontosturisticos">
    <div class="chuvisqueiro" id="chuvisqueiro">
      <h1>CHUV</h1>
    </div>
    
    <div class="cascata" id="cascata">
      <h1>CASC</h1> 
          <strong>Chuvisqueiro</strong>
          
    </div>
    <div class="rio" id="rio">
      <h1>RIO</h1>
    </div>
  </div>

  <div class="sobre" id="sobre">
    <h1 id="sobre">SOBRE</h1> <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    +
    </a>
  </div>
  
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
    </div></div>

<div class="sugestao" id="sugestao">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>

  

  <footer>
  <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#carouselExampleIndicators" class="nav-link px-2 text-muted">Início</a></li>
      <li class="nav-item"><a href="#pontosturisticos" class="nav-link px-2 text-muted">Pontos Turísticos</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
  </footer>
</div>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

</body>
</html>