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

	
			$sql = "INSERT INTO pontos (nome, email, sugestao) VALUES ('$nome', '$email', '$sugestao') ";
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