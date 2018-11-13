<?php 
$nomeCompleto = $_POST['nome'];
$senha = $_POST['senha']; 
$email = $_POST['email'];
$obs = $_POST['obs'];

//$db = mysqli_select_db('cadastro');
$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='/cadastrar/adm/cadastro_adm.html';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='/cadastrar/adm/cadastro_adm.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO `usuarios`(`nomeCompleto`, `senha`, `email`,  `obs`, `ADM`) VALUES ('$nomeCompleto', '$senha', '$email', '$obs','1')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='/adm_page.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='/cadastrar/adm/cadastro_adm.html'</script>";
        }
      }
    }
?>