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


<link rel="stylesheet" type="text/css" href="../css/pontos.css">
	<body>
	   <main class="conteudo">
    <section class="conteudo-principal">
      <div class="conteudo-principal-escrito">
        <h1 class="conteudo-principal-escrito-titulo">Casa Da Colonia</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Av. Getúlio Vargas, 131 - Rolante, RS, 95690-000</h2>
		<h2>(51) 3547-3449
        </h2>
      </div>
      <img class="conteudo-principal-img"src="../img/casac.jpg" alt="Imagem do Bot">
    </section>

    
  </main>

  
</body>