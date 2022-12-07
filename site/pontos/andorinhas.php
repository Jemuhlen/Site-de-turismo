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
        <h1 class="conteudo-principal-escrito-titulo">Cascatas das Andorinhas</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Também chamada de gruta das andorinhas, pela moradia dessas aves no local. Cascata entre rochas, formam um pequeno cânion, cai de uma altura de 15 metros e forma uma poça de 4 metros de profundidade. é possível banhar-se nela. Para chegar até a cascata é necessário realizar uma trilha apé, são em média 800 metros, sendo boa parte percorrida por um estrada larga e um pequeno percurso costeando o rio pela esquerda.Há placas indicando o caminho. Em torno de 20 minutos de trilha. Pode-se visitar em qualquer período do ano, mas aconselha-se o verão para poder banhar-se.</h2>
		<h2> Boa Esperança, Rolante - RS, 95690-000</h2>
		<br>Aberto 24 horas</br>
      </div>
      <img class="conteudo-principal-img"src="../img/andorinhas.jpg" alt="Imagem do Bot">
    </section>

    
  </main>

  
</body>