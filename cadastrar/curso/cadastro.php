<?php 
 
$nome = $_POST['nome']; 
$desc = $_POST['desc']; 


if ($nome == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo Nomme do Curso deve ser preenchido');window.location.href='cadastro.php';</script>";
}else if($nome == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo Descrição total deve ser preenchido');window.location.href='cadastro.php';</script>";
}else{
  $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
  $query = "INSERT INTO curso(nome, descricao) VALUES ('$nome',$descricao')";
  $insert = mysqli_query($connect,$query);
           
  if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Curso cadastrado com sucesso!');window.location.href='/adm_page.html';</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse curso');/script>";
    }
}
?>