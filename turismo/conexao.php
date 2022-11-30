<?php
	$conexao = mysqli_connect("127.0.0.1", "root", "", "turismo"); // abre a conexão com o banco de dados

	if ($conexao == false){
		die("Houve um erro ao conectar com o banco de dados");
	}
?>