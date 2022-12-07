<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "atracoes");
        if ($conn == false){
          die("Houve um erro ao conectar com o banco de dados");
        }
        $sql = "SELECT * From informacoes ORDER BY id";
        $registros = mysqli_query($conn, $sql);
        while ($registro = mysqli_fetch_array($registros) ){
         
        }    
      ?>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Turismo em Rolante</title>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="../css/pontos.css">
</head>

<body>
<header> 
    <div id="start">
      <nav class="navbar fixed-top navbar-expand-lg">
          <a class="navbar-brand active" href="#start"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-signpost-split-fill" viewBox="0 0 16 16"> <path d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5v5z"/></svg></a>
          

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#mapa">Mapa</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#pontos-turisticos">Pontos Turísticos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sugestao">Dê sua sugestão</a>
              </li>
            </ul>
          </div>
      </nav>
  </header>


	   <main class="conteudo">
    <section class="conteudo-principal">
      <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Cascatas das Andorinhas</h1>
        <p class="conteudo-principal-escrito-subtitulo">Também chamada de gruta das andorinhas, pela moradia dessas aves no local. Cascata entre rochas, formam um pequeno cânion, cai de uma altura de 15 metros e forma uma poça de 4 metros de profundidade. é possível banhar-se nela. Para chegar até a cascata é necessário realizar uma trilha apé, são em média 800 metros, sendo boa parte percorrida por um estrada larga e um pequeno percurso costeando o rio pela esquerda.Há placas indicando o caminho. Em torno de 20 minutos de trilha. Pode-se visitar em qualquer período do ano, mas aconselha-se o verão para poder banhar-se. <br>Boa Esperança, Rolante - RS, 95690-000<br>
        <br>Aberto 24 horas</br></p>
      </div>
      <img class="conteudo-principal-img"src="../img/andorinhas.jpg" alt="Imagem do Bot">
    </section>
    
  </main>
  
</body>


<footer class="py-3 my-4">
    <div class="container">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#carouselExampleIndicators" class="nav-link px-2 text-muted">Início</a></li>
      <li class="nav-item"><a href="#pontos-turisticos" class="nav-link px-2 text-muted">Pontos Turísticos</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 - IFRS Campus Rolante - Informática 4 </p>
    </div>
</footer>
<script> src="js/swiper-bundle.min.js"</script>
  <script> src="js/script.js"</script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
