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
  <script type="text/javascript" src="../js/jquery.js"></script>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
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

    <main>      
    <div class="container-fluid"> 
        <div  id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1lnMd1z4EqE5IYeDWkap7-6RfIgn6cbI&ehbc=2E312F" width="100%" height="100%" style="border:0; margin:0;
      " ></iframe>
  </div>

<div class="pontos-turisticos">
<?php
    $conn = mysqli_connect("127.0.0.1", "root", "", "atracoes");
    if ($conn == false){
      die("Houve um erro ao conectar com o banco de dados");
    }
    $sql = "SELECT * From informacoes ORDER BY id";
    $registros = mysqli_query($conn, $sql);
     
  ?>
	
<section class="py-5 text-center container" id="pontos-turisticos">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Pontos Turísticos</h1>
        <p class="lead text-muted">Aqui estão alguns lugares que você adoraria conhecer!</p>
      </div>
    </div>
  </section>

  <div class="pontos">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
           <img src="img/1669297432.jpeg">

<div class="card-body">
              <p class="card-text">Cascata Três Quedas</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/tresquedas.php" class="btn btn-pontos">ver</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/1669587779.jpeg">

            <div class="card-body">
              <p class="card-text">Bier Garten Eltz</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/bier.php" class="btn btn-pontos">ver</a>

                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/1669588542.jpeg">

            <div class="card-body">
              <p class="card-text">Cantina Figueira Branca</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/cantina.php" class="btn btn-pontos">ver</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/1670275434.jpg" width="100%" height="100%">

            <div class="card-body">
              <p class="card-text">Vinícula Sbardelotto</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/sbar.php" class="btn btn-pontos">ver</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/1670347842.jpeg">

            <div class="card-body">
              <p class="card-text">Casa da Colônia</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/casac.php" class="btn btn-pontos">ver</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/1670349325.jpg">

            <div class="card-body">
              <p class="card-text">Cascata das Andorinhas</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/andorinhas.php" class="btn btn-pontos">ver</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="img/1670350725.jpeg">

            <div class="card-body">
              <p class="card-text">Vinhos Dei Lazzari</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/lazzari.php" class="btn btn-pontos">ver</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/finger.jpg" >

            <div class="card-body">
              <p class="card-text">Vinhos Finger</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/finger.php" class="btn btn-pontos">ver</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/1670351210.jpeg" width="420px" height="200px">

            <div class="card-body">
              <p class="card-text">Morri Grande</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="pontos/morro.php" class="btn btn-pontos">ver</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="sobre" id="sobre">
  <h1>Sobre</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolores quis sequi ea modi perferendis quidem, perspiciatis minus suscipit recusandae consequatur eaque dolor provident exercitationem optio atque laborum cupiditate. Repellendus!</p>
</div>

<!--PARTE DO PHP-->
<?php
    require_once("conexao.php");
?>

<form method="POST">
  <div class="sugestao" id="sugestao">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Coloque seu nome completo</label>
      <input type="nome" name="nome" class="form-control" id="exampleFormControlInput1" placeholder=>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Coloque seu e-mail</label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@email.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Deixe sua sugestão</label>
      <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <input type="submit" name="enviar" value="Enviar" class="btn btn_primary">
    </form>
    <?php
if (isset($_POST['enviar']) == true) {
		// codigo a ser executado se a variavel estiver definida

		// usando a funcao empty para saber se um campo foi preenchido
		if (empty($_POST["nome"]) == true) {
			echo ("Por favor preencha o campo <b>nome</b>");
		} else if (empty($_POST["email"])){
			// exibindo a mensagem de erro com javascript
			echo("Preencha o <b>email</b>");
		}	else {
			require_once ("conexao.php");
			$nome = $_POST["nome"];
			$email = $_POST["email"];
      $texto = $_POST["texto"];

	
			$sql = "INSERT INTO pontos (nome, email, sugestao) VALUES ('$nome', '$email', '$texto') ";
			// echo para debugar a consulta sql gerada
			// echo ($sql);

			// mandando executar a consulta sql
			// a funcao mysqli_query retorna true se a consulta foi executada com sucesso
			if (mysqli_query($conexao, $sql)){
				echo ("Sugestão adicionada com sucesso!<br>");
			} else {
				// erro ao executar a consulta
				echo ("Erro: $sql <br>" . mysqli_error($conexao) );
			}

			// encerrando a conexao
			mysqli_close($conexao);
		
		}
	}
?>
    
    
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
  <script> src="js/swiper-bundle.min.js"</script>
  <script> src="js/script.js"</script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>


</body>
</html>
