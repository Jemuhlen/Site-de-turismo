<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de usuário</title>
</head>
<body>
	<form method="POST" action="processa.php">
		<fieldset>
			<legend>Adicionando novo usuário</legend>
			Nome: <input type="text" name="nome" pattern="[a-z]*"required >
			<br>
			Data de nascimento: <input type="date" name="nascimento"required>
			<br>
			Número de telefone: <input type="text" name="numero"required>
			<br>
			Email: <input type="email" name="email"required>
			<br>
			Senha: <input type="password" name="senha">
			<input type="submit" name="enviar" value="Enviar">
			<!--Senha novamente: <input type="password" name="senhadnv"required>
			<input type="submit" name="enviar" value="Enviar">-->
		</fieldset>
	</form>
	
<style type="text/css">
	
	input:invalid {
		animation: shake 300ms;
	}
	@keyframes shake{
			25%{transform: transLateX(4px);}
			50%{transform: transLateX(-4px);}
			25%{transform: transLateX(4px);}
	}
</style>
</body>
</html>