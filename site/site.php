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
   <script type="text/javascript" src="jquery.js"></script>
 </head>
 <body>
  <header> 
    <div id="start">
      <nav class="navbar fixed-top navbar-expand-lg">
          <a class="navbar-brand active" href="#start"><img src="" class="icone"></a> <!--tem que colocar um icon-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#mapa">Mapa</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pontos turísticos
                </a>
                <ul class="dropdown-menu">  <!--DROPDOWN MENU-->
                  <li><a class="dropdown-item" href="#chuvisqueiro">Ponto 1</a></li>
                  <li><a class="dropdown-item" href="#cascata">Ponto 2</a></li>
                  <li><a class="dropdown-item" href="#rio">Ponto 3</a></li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                  <div class="botao">
                    <a class="nav-link" href="#sugestao">Dê sua sugestão</a>
                  </div>
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
  </div>

  <div class="mapa" id="mapa">
    <h1>MAPA</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27739.983987175332!2d-50.5644716!3d-29.64732015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9518e46f16da5dd1%3A0xe4d314d8d2f62c23!2sRolante%2C%20RS%2C%2095690-000!5e0!3m2!1spt-BR!2sbr!4v1665065615867!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="container-fluid" id="pontos_turisticos">
        <div class="chuvisqueiro" id="chuvisqueiro">
          <h1>Cascata Três Quedas</h1>
          <div class="clearfix">
            <img src="img/tres.jpg" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
            <div class="text">
          <p>
            Localizada no caminho da Boa Esperança, assim como presente em uma placa sinalizando o local, a escada que leva até a cascata foi inaugurada em 2013. Facil acesso e descida segura.<br>
            Endereço: Caminho das Pipas - Boa Esperança, Rolante - RS, 95690-000<br>
            Horario:Aberto 24 horas<br>
            Telefone: (51) 3547-1188<br>
            nenhum custo para visitação<br>
          </p>

          <p>
            Maecenas posuere lorem sit amet facilisis tempus. Aenean varius tortor vitae suscipit varius. Etiam molestie maximus leo, sed vehicula libero iaculis vitae. Donec tincidunt eros eget lorem finibus, quis laoreet urna volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla libero tortor, vestibulum sed eros id, congue venenatis dolor. Proin lectus nisi, vestibulum ut dignissim in, maximus non urna. Nullam enim nibh, efficitur eget placerat vitae, facilisis sed nulla. 
          </p>
        </div>
      </div>
    </div>

    <div class="cascata" id="cascata">
      <h1>Cascata das andorinhas</h1>
      <div class="clearfix">
        <img src="img/andorinhas.jpg" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <p>
            Também chamada de gruta das andorinhas, pela moradia dessas aves no local. Cascata entre rochas, formam um pequeno cânion, cai de uma altura de 15 metros e forma uma poça de 4 metros de profundidade. é possível banhar-se nela. Para chegar até a cascata é necessário realizar uma trilha apé, são em média 800 metros, sendo boa parte percorrida por um estrada larga e um pequeno percurso costeando o rio pela esquerda.Há placas indicando o caminho. Em torno de 20 minutos de trilha. Pode-se visitar em qualquer período do ano, mas aconselha-se o verão para poder banhar-se. <br>
            Custo para visitação: nenhum <br>
            Em torno de 1 hora consegue fazer a visitação <br>
            Endereço: Boa Esperança, Rolante - RS, 95690-000 <br>
            Horario: Aberto 24 horas <br>
          </p>
          <p>
            Maecenas posuere lorem sit amet facilisis tempus. Aenean varius tortor vitae suscipit varius. Etiam molestie maximus leo, sed vehicula libero iaculis vitae. Donec tincidunt eros eget lorem finibus, quis laoreet urna volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla libero tortor, vestibulum sed eros id, congue venenatis dolor. Proin lectus nisi, vestibulum ut dignissim in, maximus non urna. Nullam enim nibh, efficitur eget placerat vitae, facilisis sed nulla. 
          </p>
        </div>
      </div>
    </div>
    </div>
    
    <div class="rio" id="rio">
      <h1>Pousada in mezzo ai monti</h1>
      <div class="clearfix">
        <img src="img/pousada.jpg" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">

        <div class="text">
          <p>
            Uma pousada com dormitórios para uma pessoa, casal e casal com criança. Diária com café da manhã.<br>
            Endereço: Boa Esperança - Zona Rural, Rolante - RS, 95690-000 <br>
            Horário: Aberto 24 horas <br>
            Telefone: (51) 99722-3334 <br>
            Custo da diária a combinar com a pousada <br>
          </p>

          <p>
            Maecenas posuere lorem sit amet facilisis tempus. Aenean varius tortor vitae suscipit varius. Etiam molestie maximus leo, sed vehicula libero iaculis vitae. Donec tincidunt eros eget lorem finibus, quis laoreet urna volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla libero tortor, vestibulum sed eros id, congue venenatis dolor. Proin lectus nisi, vestibulum ut dignissim in, maximus non urna. Nullam enim nibh, efficitur eget placerat vitae, facilisis sed nulla. 
          </p>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="sobre" id="sobre">
    <h1>Sobre</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis augue, et finibus sapien nisl non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc placerat felis quis odio dignissim, placerat tincidunt elit vulputate. Cras non pulvinar felis. Vivamus commodo egestas tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam suscipit felis nec dui mollis, egestas sollicitudin velit varius. Pellentesque pretium molestie mauris, non volutpat metus imperdiet et. Mauris et semper ex. Vivamus mollis tempus suscipit. Nunc faucibus commodo odio, nec sollicitudin mi efficitur sit amet.
    </p>
  </div>

  <div class="sugestao" id="sugestao">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Coloque seu e-mail</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Deixe sua sugestão</label>
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