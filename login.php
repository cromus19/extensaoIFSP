
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body class="greenExtensao">
	<div class="espaco"></div>
	<center>
	<div class="tudo ">
			<br>
			<img  src="img/logo.png" width="60px">
			<br>
			<img  src="img/extensao.png" width="220px"><br>
	  		<h2>Login</h2>
	  		<p>Digite seu nome de usuario e sua senha para acessar o sistema</p>
		
		<form method="POST" action="cadastrar/Login/login.php">

	  		<hr>
	  		<p><label>Nome </label>
	  		<input class="w3-input inputLogin w3-border" name="login" type="text" required></p>
	  		<br>
		    <p><label>Senha</label>
			<input class="w3-input inputLogin w3-border" name="senha" type="password" required></p>
			<br>

  			
  			
			
			<input  class="w3-btn greenIF" type="submit" name="Cadastrar" value="Entrar">
			
			<button class="w3-btn redIF" onclick="window.location='index.html';">Voltar</button>

			<br>
			<br>


		</form>
		<hr>		
		<small class="msg">Não tem cadastro?</a></small> <a href="cadastro.html"><small>clique aqui</small>
		<hr>
	</div>
	</center>

	<div class="espaco"></div>
</body>
</html>
<?php
    	if(isset($_COOKIE['login'])){
            header("Location:index.php");
        }
?>