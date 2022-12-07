<?php

include('verifica.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guarda Senhas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
		require_once("menu1.php");
        
	?>
    <div id="conteudo">
    <?php
		require_once("conecta1.php");
    $sql = "SELECT * from tbsenhas ORDER BY tbsenhas.grupo";

    $registros = mysqli_query($conexao, $sql);
    echo ("<table><tr><th>Senha</th><th>Grupo</th><th>Opções</th>");
    
    if (mysqli_num_rows($registros) > 0){
        echo ("<h1>Suas Senhas</h1>");
        while ($registro = mysqli_fetch_array($registros) ){
            
            echo("<br><tr><td>$registro[senha]</td> <td>$registro[grupo]</td><td><a href='excluir.php?id_senha=$registro[idsenha]' class='btn del_btn'>Excluir</a></td></tr><br>");
    }
}
    ?>
    </div>    
</body>
</html>