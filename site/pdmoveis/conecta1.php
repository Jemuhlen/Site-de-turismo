<?php
	$conexao = mysqli_connect("ifrs2022.mysql.dbaas.com.br", "ifrs2022", "Fimdeano@2022", "dbguardasenha"); // abre a conexão com o banco de dados

	if ($conexao == false){
		die("Houve um erro ao conectar com o banco de dados");
	}
?>