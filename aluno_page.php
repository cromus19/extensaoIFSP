<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>IFSP</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-green lighten-1" role="navigation">
    <div class="nav-wrapper container"><img id="img-logoIF" src="img/logo.png" width="10px" height="60px"><a id="logo-container" href="#" class="brand-logo">Extensão</a>
    	
      <ul class="right hide-on-med-and-down">
      <form method="POST" id="FORM" action='/adm_page.php'>
        <li><a href="javascript:{}" onclick="document.getElementById('FORM').submit();" >Sair</a></li>
</form>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Sair</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<hr>
    <form action="usuario/aluno_page.php" method="post">
      <select class="w3-select" name="usuarios" required>
        </select>
      <hr>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <?php
            $login = $_COOKIE['login'];
            $query_select = "SELECT nomeCompleto, CPF, RG, telCasa, telCel FROM usuarios WHERE email = '$login'";
            $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
            $select = mysqli_query($connect,$query_select);
            ?>
          </div>
        </div>
       
        </div>
        <div class="row">
			
            <div class="col m4">
            <table class="table">
              <tbody>		
                 <tr>
                  <td>Nome: <?php echo $array['nomeCompleto'];?></td>

                </tr>
                <tr>
                  <td>CPF: <?php echo $array['CPF'];?></td>

                </tr>
                <tr>
                  <td>RG: <?php echo $array['RG'];?></td>

                </tr>
              </tbody>
            </table>
            </div>
            <div class="col m4"></div>
            <div class="col m4">
            <table class="table">
              <tbody>
                 <tr>
                  <td>E-mail: <?php echo $login;?></td>
  
                </tr>
                <tr>
                  <td>Telefone Casa: <?php echo $array['telCasa'];?></td>
                  
                </tr>
                <tr>
                  <td>Telefone Cel: <?php echo $array['telCel'];?></td>
                 
                </tr>
              </tbody>
            </table>
            </div>
        </div>
          <div>
            <p class="light">Cursos Cadastrados</p>
          </div>
          <div class="row">
          <div class="col 4 m4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Curso</span>
                <p>NOME DO CURSO</p>
                <p>Sala: </p>
                <p>Período</p>
              </div class="col s12 m4">
              <div class="card-action">
                <a href="#">Cancelar</a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div>
        <p class="light">Cursos Disponíveis</p>
      </div>
	   <?php
            $query_select = "SELECT * FROM cursos";
            $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
            $select = mysqli_query($connect,$query_select);
        ?>
	 <?php while($row = mysqli_fetch_assoc($select)) {	
      echo "
	  <div class='col 4 m4'>
        <div class='card blue-grey darken-1'>
          <div class='card-content white-text'>
            <span class='card-title'>Curso</span>
            <p>NOME DO CURSO</p>".$row['nome']."
            <p>Descricao</p>".$row['descricao']."
			<input type=hidden id=".$row['id']." value=".$row['id'].">
          </div class='col s12 m4'>
          <div class='card-action'>
            <a href='#'>Cadastrar</a>
          </div>
        </div>
      </div>
	 
    </div>"
    </div>

  </div>
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
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
