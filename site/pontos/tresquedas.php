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
        <h1 class="conteudo-principal-escrito-titulo">Cascata Três Quedas</h1>
        <h2 class="conteudo-principal-escrito-subtitulo">Localizada no caminho da Boa Esperança, assim como presente em uma placa sinalizando o local, a escada que leva até a cascata foi inaugurada em 2013. Facil acesso e descida segura.</h2>
		<h2>Caminho das Pipas - Boa Esperança, Rolante - RS, 95690-000
		<br>Horario:Aberto 24 horas</br>
		<br>Telefone: (51) 3547-1188</br>
		<br>nenhum custo para visitação</br>
		</h2>
      </div>
      <img class="conteudo-principal-img"src="../img/1669297432.jpeg" alt="Imagem do Bot">
    </section>

    
  </main>

  
</body>