
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
          <a class="navbar-brand active" href="#start"><img src="img/icone.png" class="icone"></a> <!--tem que colocar um icon-->
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
                  Pontos turísticos(A-R)
                </a>
                <ul class="dropdown-menu">  <!--DROPDOWN MENU-->
                  <li><a class="dropdown-item" href="#tres">Cascata Três Quedas</a></li>
                  <li><a class="dropdown-item" href="#bier">Biergarten Eltz</a></li>
                  <li><a class="dropdown-item" href="#cfb">Cantina Figueira Branca</a></li>
                  <li><a class="dropdown-item" href="#casa">Casa da Colônia</a></li>
                  <li><a class="dropdown-item" href="#andorinhas">Cascata Das Andorinhas</a></li>
                  <li><a class="dropdown-item" href="#dvinicula">Dei Lazzari Vinicula</a></li>
                  <li><a class="dropdown-item" href="#fazendaz">Fazenda Wolff</a></li>
                  <li><a class="dropdown-item" href="#rolantche">Hotel Pousada Rolantchê</a></li>
                  <li><a class="dropdown-item" href="#morro">Morro Grande - Parque Municipal da Asa Delta</a></li>
                  <li><a class="dropdown-item" href="#portico">Pórtico de Rolante</a></li>
                  <li><a class="dropdown-item" href="#pousadam">Pousada in mezzo ai monti</a></li>
                  <li><a class="dropdown-item" href="#restaurantefb">Restaurante Figueira Branca</a></li>
                </ul>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pontos turísticos(S-Z)
                </a>
                <ul class="dropdown-menu">  <!--DROPDOWN MENU-->
                  <li><a class="dropdown-item" href="#sucos">Sucos Irmãos Colombo</a></li>
                  <li><a class="dropdown-item" href="#vinhosesucose">Vinhos e Sucos D'Boa Esperança</a></li>
                  <li><a class="dropdown-item" href="#vinhosesucosd">Vinhos e Sucos Don Franchesco</a></li>
                  <li><a class="dropdown-item" href="#vinhosf">Vinhos Finger</a></li>
                  <li><a class="dropdown-item" href="#viniculabennato">Vinícola Bennato</a></li>
                  <li><a class="dropdown-item" href="#viniculadallarosa">Vinícola Dallarosa</a></li>
                  <li><a class="dropdown-item" href="#viniculadom">Vinícola Dom Vitor</a></li>
                  <li><a class="dropdown-item" href="#viniculamontemezzo">Vinícola Montemezzo</a></li>
                  <li><a class="dropdown-item" href="#viniculasbardelotto">Vinícola Sbardelotto</a></li>
                </ul>
                <li class="nav-item">
                  <a class="nav-link" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                  <div class="botao">
                    <a class="nav-link" href="#sugestao">Dê sua sugestão</a>
                  </div>
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
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1lnMd1z4EqE5IYeDWkap7-6RfIgn6cbI&ehbc=2E312F" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="container-fluid" id="pontos turísticos">
    <div class="tres" id="tres">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Cascata Três Quedas</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis 
          </p>
        </div>
      </div>
    </div>
    <div class="bier" id="bier">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Biergarten Eltz</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis 
          </p>
        </div>
      </div>
    </div>
    <div class="cfb" id="cfb">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Cantina Figueira Branca</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis 
          </p>
        </div>
      </div>
    </div>
    <div class="casa" id="casa">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Casa Da Colônia</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis 
          </p>
        </div>
      </div>
    </div>
  <div class="andorinhas" id="andorinhas">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Cascata Das Andorinhas</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu 
          </p>
        </div>
      </div>
    </div>
  <div class="dvinicula" id="dvinicula">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Dei Lazzari Vinicula</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis augue, et finibus sapien nisl non nisi. 
          </p>
        </div>
      </div>
    </div>
    <div class="fazendaz" id="fazendaz">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Fazenda Wolff</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis a
          </p>
        </div>
      </div>
    </div>
  <div class="casa" id="casa">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Casa Da Colonia</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis 
          </p>
        </div>
      </div>
    </div>
  <div class="rolantche" id="rolantche">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Hotel Pousada Rolantchê</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis a
          </p>
        </div>
      </div>
    </div>
    <div class="morro" id="morro">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Morro Grande - Parque Municipal da Asa Delta</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam 
          </p>
        </div>
      </div>
    </div>
    <div class="portico" id="portico">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Pórtico de Rolante</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum 
          </p>
        </div>
      </div>
    </div>
    <div class="pousadam" id="pousadam">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Pousada in mezzo ai monti</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum Nunc faucibus commodo odio, nec sollicitudin mi efficitur sit amet.
          </p>
        </div>
      </div>
    </div>
    <div class="restaurantefb" id="restaurantefb">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Restaurante Figueira Branca</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam 
          </p>
        </div>
      </div>
    </div>
    <div class="sucos" id="sucos">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Sucos Irmãos Colombo</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis augue, et finibus sapien nisl non nisi. 
          </p>
        </div>
      </div>
    </div>
    <div class="vinhosesucose" id="vinhosesucose">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinhos e Sucos D'Boa Esperança</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis augue, et finibus sapien nisl non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
          </p>
        </div>
      </div>
    </div>
    <div class="vinhosesucosd" id="vinhosesucosd">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinhos e Sucos Don Franchesco</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis augue, et finibus sapien nisl non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
          </p>
        </div>
      </div>
    </div>
    <div class="vinhosf" id="vinhosf">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinhos Finger</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu pellentesque imperdiet, mauris nisi lobortis augue, et finibus sapien nisl non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
          </p>
        </div>
      </div>
    </div>
    <div class="viniculabennato" id="viniculabennato">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinícola Bennato</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu 
          </p>
        </div>
      </div>
    </div>
    <div class="viniculadallarosa" id="viniculadallarosa">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinícola Dallarosa</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu 
          </p>
        </div>
      </div>
    </div>
    <div class="viniculadom" id="viniculadom">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinícola Dom Vitor</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu 
          </p>
        </div>
      </div>
    </div>
    <div class="viniculamontemezzo" id="viniculamontemezzo">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinícola Montemezzo</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu 
          </p>
        </div>
      </div>
    </div>
    <div class="viniculasbardelotto" id="viniculasbardelotto">
      <div class="clearfix">
        <img src="img/banner1.png" class="image col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <div class="text">
          <h1>Vinícola Sbardelotto</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper ex blandit, blandit metus sed, lacinia augue. Morbi elementum purus non arcu rhoncus, nec aliquam sem commodo. Vivamus pretium dui eu bibendum lobortis. Aenean auctor, tortor eu 
          </p>
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


  
    <?php
    require_once("conexao.php");

    ?>
<form method="POST">
  <div class="bloco" id="bloco">
    <div class="caixasugestao">
      <label for="exampleFormControlInput1" class="form-label">Coloque seu nome completo</label>
      <input type="nome" name="nome" class="form-control" id="exampleFormControlInput1" placeholder=>
    </div>
    <div class="caixasugestao">
      <label for="exampleFormControlInput1" class="form-label">Coloque seu e-mail</label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@email.com">
    </div>
    <div class="caixasugestao">
      <label for="exampleFormControlTextarea1" class="form-label">Deixe sua sugestão</label>
      <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class = "button">
    <input type="submit" name="enviar" value="Enviar" class="btn btn_primary">
    </div>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

</body>
</html>
