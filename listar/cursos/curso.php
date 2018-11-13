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
    <div class="nav-wrapper container"><img id="img-logoIF" src="/img/logo.png" width="10px" height="60px"><a id="logo-container" href="/adm_page.php" class="brand-logo">Extensão</a>
    	
      <ul class="right hide-on-med-and-down">
          <form method="POST" id="FORM" action='/adm_page.php'>
          <li><a href="/cadastrar/curso/curso.html">Criar Curso</a></li>
      	<li><a href="">Criar Turma</a></li>
        <li><a href="javascript:{}" onclick="document.getElementById('FORM').submit();" >Sair</a></li>
        </form>
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
<?php 
 $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
 $query = "select * from curso";
  $select = mysqli_query($connect,$query);    
  echo "<table>"   ;        
  if (mysqli_num_rows($select) > 0) {
    // output data of each row
    echo "<tr><th>Nome</th><th>Descricao</th><th> </th></tr>";
    while($row = mysqli_fetch_assoc($select)) {
        $form = 'FORM'.$row["id"];
        echo " <tr>
                    <td>".$row["nome"]."</td>
                    <td>".$row["descricao"]."</td>
                    <td>
                        <a href='delete.php?id=".$row["id"]."'  class='waves-effect waves-light btn'>
                            <i class='material-icons'>delete</i>
                        </a>
                    </td>
                </tr>";
    }
    echo "</table>";
} else {
    echo "Não há cursos cadastrados!";
}
?>
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
