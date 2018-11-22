<?php 
 
$nome = $_POST['nome']; 
$dataInicio = $_POST['dataInicio']; 
$dataFim = $_POST['dataFim']; 

if ($nome == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo Nome deve ser preenchido');window.location.href='/cadastrar/turma/cadastro_turma.php';</script>";
}else if($dataInicio == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo Data de Inicio deve ser preenchido');window.location.href='/cadastrar/turma/cadastro_turma.php';</script>";
}
else if($dataFim == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo Data de Fim deve ser preenchido');window.location.href='/cadastrar/turma/cadastro_turma.php';</script>";
}else{
  $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
  $query = "INSERT INTO turma(nome, dt_inicio, dt_fim) VALUES ('$nome', '$dataInicio', '$dataFim')";
  $insert = mysqli_query($connect,$query);
           
  if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Edital cadastrado com sucesso!');window.location.href='/adm_page.php';</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse edital');/script>";
    }
}
?>