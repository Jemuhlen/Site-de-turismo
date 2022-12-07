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
        <h1 class="conteudo-principal-escrito-titulo">Vinhos Finger</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Estr. Geral Boa Esperança, 2000 - Boa Esperança, Rolante - RS, 95690-000</h2>
		<h2>(51) 99938-4323</h2>
      </div>
      <img class="conteudo-principal-img"src="../img/finger.jpg" alt="Imagem do Bot">
    </section>

    
  </main>

  
</body>