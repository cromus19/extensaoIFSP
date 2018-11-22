<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body class="greenExtensao">
	<div class="espaco"></div>
	<center>
	<div class="tudo ">
			<br>
			<img  src="/img/logo.png" width="60px">
			<br>
			<img  src="/img/extensao.png" width="220px"><br>
	  		<h2>Cadastro de Turma</h2>
	  		<p>Preencha os campos para realizar o cadastro</p>
		
		<hr>
		
		<small class="msg">*Todos os campos são obrigatorios</small>
		<hr>
		<form action="cadastro.php" method="post">
<p><label>Nome </label>
  <input class="w3-input w3-border" name="nome" type="text" required
  maxlength=15
onKeyUp="return taCount(this,'nome')" onKeyPress="return taLimit(this)"></p>
<small>Quantidade restante de <small id="nome">15</small> caracteres</small>
  <hr>
<p><label>Data de Inicio</label>
<input class="w3-input w3-border" name="dataInicio" type="date" required></p>
<hr>
<p><label>Data de Fim</label>
<input class="w3-input w3-border" name="dataFim" type="date" required></p>
<hr>
<input  class="w3-btn greenIF" type="submit" name="Cadastrar" value="Cadastrar">
<button class="w3-btn redIF" onclick="window.location='/adm_page.php';">Voltar</button>

<br>
<br>
</form>
</div>
</center>

<div class="espaco"></div>
<script type="text/javascript" src="/js/validacao.js"></script>

</body>
</html>