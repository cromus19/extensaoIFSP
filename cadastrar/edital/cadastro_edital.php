<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

			<p><label>Curso</label><br><br>
			<select class="w3-select" name="curso" required>
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
<input  class="w3-btn greenIF" type="submit" name="Cadastrar" value="Cadastrar">
<button class="w3-btn redIF" onclick="window.location='index.html';">Voltar</button>

<br>
<br>
</form>
</div>
</center>

<div class="espaco"></div>

</body>
</html>