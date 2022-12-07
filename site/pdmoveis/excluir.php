<?php
	$id_senha = $_GET["id_senha"];

	$conn = mysqli_connect("localhost", "root", "", "dbguardasenha");

    
	// conexao com sucesso
	if ($conn){
		$sql = "DELETE FROM tbsenhas WHERE idsenha = $id_senha";


		if (mysqli_query($conn, $sql)){
			echo ("
				<script>
					alert('Senha excluída com sucesso!');
					location.href = 'index.php';
				</script>
			");
		} else {
			echo ("Houve um erro ao excluir a senha");
		}

		mysqli_close($conn);

	} else {
		echo("Falha na conexão: " . mysqli_connect_error() );
	}

?>