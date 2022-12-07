<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar senha</title>
</head>
<body>
	<?php 
		// primeiro é preciso buscar as informacoes do registro a ser editado
		$id_senha = $_GET['id_senha'];

		$conn = mysqli_connect("127.0.0.1", "root", "", "dbguardasenha");

		if ($conn) {
			$sql = "SELECT * FROM tbsenhas WHERE idsenha = $id_senha";

			$resultado = mysqli_query($conn, $sql);

			// a edicao vai retornar apenas uma linha, pois a busca é pela primary key da tabela
			if (mysqli_num_rows($resultado) == 1) {
				
				// pega os dados relativo a linha que retornou e armazenada na variável abaixo
				$salvo = mysqli_fetch_array($resultado);

				// pegando o valor dos campos e salvando em variaveis para preencher o formulário
				$senha  = $salvo["senha"];
                $grupo  = $salvo["grupo"];

			} else {
				echo ("Senha não encontrada");
			}
		} else {
			die("Falha na conexão " . mysqli_connect_error() );
		}
	?>
	<form method="POST">
		<fieldset>
			<!-- para preencher os campos do formulário, é necessario printar os valores dentro do elemento VALUE -->>
			<legend>Editando senha de:<b><?php echo ($grupo); ?></b></legend>
			Senha: <input type="text" name="senha" value="<?php echo ($senha); ?>"> <br>
			Grupo: <input type="text" name="grupo" value="<?php echo ($grupo); ?>">
			<input type="submit" name="enviar" value="Salvar">
		</fieldset>
	</form>
	<style type="text/css">
		input:invalid {
			animation: shake 300ms;
		}
		@keyframes shake {
			25% { transform: translateX(4px) ; }
			50% { transform: translateX(-4px); }
			25% { transform: translateX(4px); }
		}
	</style>
	<?php
	// isset testa se uma variavel existe
	if (isset($_POST['enviar']) == true) {
		// codigo a ser executado se a variavel estiver definida

		// usando a funcao empty para saber se um campo foi preenchido
		if (empty($_POST["senha"]) == true) {
			echo ("Por favor preencha o campo <b>senha</b>");
		} else if (empty($_POST["grupo"])){
			// exibindo a mesagem de erro com javascript
			//echo("<script>alert('Preencha a data de nascimento');</script>");
			echo("Preencha o <b>grupo</b>");
		}
		} else {
			// não é mais preciso abrir a conexão com o BD, pois isso foi feito anteriormente e também já foi testado se a conexao foi bem sucedida 
            $senha  = $_POST["senha"];
            $grupo  = $_POST["grupo"];

			// para editar o registro, usa-se o UPDATE
			$sql = "UPDATE tbsenhas SET senha = '$senha', grupo = '$grupo' WHERE id = $id_senha";

			// echo para debugar a consulta sql gerada
			// echo ($sql);

			// mandando executar a consulta sql
			// a funcao mysqli_query retorna true se a consulta foi executada com sucesso
			if (mysqli_query($conn, $sql)){
				echo ("
					<script>
						alert('Senha editada com sucesso');
						location.href = 'index.php';
					</script>
				");
			} else {
				// erro ao executar a consulta
				echo ("Erro: $sql <br>" . mysqli_error($conn) );
			}

			// encerrando a conexao
			mysqli_close($conn);

		}
	 
	?>
</body>
</html>