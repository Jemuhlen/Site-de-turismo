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
        <h1 class="conteudo-principal-escrito-titulo">Cantina Figueira Branca</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Opções de serviço: Refeições; Espaço ideal para encontro informal com amigos e familia ou até mesmo reuniões de negócios.</h2>
		<h2>Estrada Boa Esperança, 550, no bairro Boa Esperanca, na cidade Rolante, RS, 95690-000</h2>
		<br>(51) 99814-9016 (51) 9697-4613</br>
      </div>
      <img class="conteudo-principal-img"src="../img/cantina.jpg" alt="Imagem do Bot">
    </section>

    
  </main>

  
</body>