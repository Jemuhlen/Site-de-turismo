
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de senha</title>
	<link rel="stylesheet" href="estiloinserir.css">
</head>
<body>
	<form method="POST" >
		<fieldset>
			<legend>Adicionando uma nova senha</legend>
			<div class="input-group">
				<label>Senha</label>
			 	<input type="text" name="senha">
			</div>
			<div class="input-group">
				<label>Site</label>
				<input type="text" name="grupo">
			</div>
			

			<input type="submit" name="enviar" value="Enviar" class="btn btn_primary">
		</fieldset>
	</form>
	<?php
	// isset testa se uma variavel existe
	if (isset($_POST['enviar']) == true) {
		// codigo a ser executado se a variavel estiver definida

		// usando a funcao empty para saber se um campo foi preenchido
		if (empty($_POST["senha"]) == true) {
			echo ("Por favor preencha o campo <b>senha</b>");
		} else if (empty($_POST["grupo"])){
			// exibindo a mensagem de erro com javascript
			echo("Preencha o <b>grupo</b>");
		}	else {
			require_once ("conecta1.php");
			$senha = $_POST["senha"];
			$grupo = $_POST["grupo"];
	
			$sql = "INSERT INTO tbsenhas (senha, grupo) VALUES ('$senha', '$grupo') ";
			// echo para debugar a consulta sql gerada
			// echo ($sql);

			// mandando executar a consulta sql
			// a funcao mysqli_query retorna true se a consulta foi executada com sucesso
			if (mysqli_query($conexao, $sql)){
				echo ("
				<script>
					alert('Senha adicionada com sucesso!');
					location.href = 'index.php';
				</script>
			");
			} else {
				// erro ao executar a consulta
				echo ("Erro: $sql <br>" . mysqli_error($conexao) );
			}

			// encerrando a conexao
			mysqli_close($conexao);
		
		}
	}
	?>
</body>
</html>