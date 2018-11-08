<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <nav class="light-green lighten-1" role="navigation">
    <div class="nav-wrapper container"><img id="img-logoIF" src="/img/logo.png" width="10px" height="60px"><a id="logo-container" href="#" class="brand-logo">Extensão</a>
    	
      <ul class="right hide-on-med-and-down">
      	<li><a href="/cadastrar/curso/curso.html">Criar Curso</a></li>
      	<li><a href="">Criar Turma</a></li>
        <li><a href="#">Sair</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
      	<li><a href="">Criar Curso</a></li>
      	<li><a href="">Criar Turma</a></li>
        <li><a href="#">Sair</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="container">
    <div class="section">
		
		<small class="msg">*Todos os campos são obrigatorios</small>
		<hr>
		<form action="cadastro.php" method="post">

			<p><label>Curso</label><br><br>
			<select class="w3-select" name="curso">
            <?php 
            $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
            $query_select = "select id, nome from curso";
            $select = mysqli_query($connect,$query_select);
            if (mysqli_num_rows($select) > 0) {
                while($row = mysqli_fetch_assoc($select)) {
                    echo "<option value='" . $row["id"]. "'>" . $row["nome"] . "</option>";
                }
            } else {
                echo "<option value='0'>Sem Curso</option>";
            }
            ?>
            </select>
<hr>
<p><label>Nome do Professor </label>
<input class="w3-input w3-border" name="professor" type="text" required></p>
<hr>
<p><label>Quantidade de vagas: Total</label>
<input class="w3-input w3-border" name="qtd_total" type="number" required></p>
<hr>
<p><label>Quantidade de vagas: Deficiente</label><br>
<input class="w3-input w3-border" name="qtd_def" type="number" required></p>
<hr>
<p><label>Quantidade de vagas: Negro</label><br>
<input class="w3-input w3-border" name="qtd_negro" type="number" required></p>
<hr>
<p><label>Quantidade de vagas: Geral</label><br>
<input class="w3-input w3-border" name="qtd_geral" type="number" required></p>
<hr>
<p><label>Descrição </label>
<input class="w3-input w3-border" name="descricao" type="text" required></p>
<hr>
<p><label>Data de Inicio</label>
<input class="w3-input w3-border" name="dataInicio" type="date" required></p>
<hr>
<p><label>Data de Fim</label>
<input class="w3-input w3-border" name="dataFim" type="date" required></p>
<hr>
<input  class="waves-effect waves-light btn green" type="submit" name="Cadastrar" value="Cadastrar">
<button class="waves-effect waves-light btn green" onclick="window.location='index.html';">Voltar</button>

<br>
<br>
</form>
</div>
<br><br>
</div>
<div class="espaco">
</div>
<footer class="page-footer light-green">
<div class="container">
<div class="row">
<div class="col l6 s12">
<h5 class="white-text">IFSP</h5>
<p class="grey-text text-lighten-4">IFSP Extensão</p>
</div>

</div>
</div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/init.js"></script>
</body>
</html>